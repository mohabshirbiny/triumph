<?php

namespace App\Http\Controllers\Admin;

use App\AppSetting;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;
use App\Traits\UploadFiles;

class AppSettingController extends Controller
{

    use UploadFiles;

    public function getAll()
    {
        $appSettings = AppSetting::all()->groupby('key')->toArray();
        
        $appSettingsData = [];

        foreach ($appSettings as $key => $value) {
            try {
                $appSettingsData[$key] = (unserialize( $value[0]['value']))? unserialize( $value[0]['value'] ): [];
            } catch (\Throwable $th) {
                throw $key;
            }
            
        }
        
        return view("admin.app_settings.index", compact("appSettingsData"));

    }

    public function store(Request $request)
    {
        $data = $request->all();
        
        // dd($request->all()  );

        if ($request->has('footer_images')) {
            foreach ($request->footer_images as $key => $footer_image) {
                $footer_image_name = $this->uploadFile($footer_image, 'AppSetting', 'image', 'image', 'footer_image_files');

                $data['footer_images'][$key] = $footer_image_name;
                sleep(1);
            }
        }
        // dd($data);
        foreach ($data as $key => $value) {
            
            AppSetting::where('key',$key)->update([
                'value' => serialize($value)
            ]);
        }

        return redirect(route("settings.index"))->with("success_message", "settings has been updated successfully.");
    }
}
