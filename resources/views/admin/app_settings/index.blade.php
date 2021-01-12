@extends("layouts.admin")
@section("page_title", "Edit App settings")
@section("content")

    <div class="content-wrapper">
        @include('layouts.alerts')
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid"></div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">App settings</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{ route('settings.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    
                                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                                        <li class="nav-item">
                                          <a class="nav-link active" id="landing_page-tab" data-toggle="tab" href="#landing_page" role="tab" aria-controls="landing_page" aria-selected="true">Landing Page</a>
                                        </li>
                                        <!-- <li class="nav-item">
                                          <a class="nav-link" id="social_links-tab" data-toggle="tab" href="#social_links" role="tab" aria-controls="social_links" aria-selected="false">Social links</a>
                                        </li>
                                        <li class="nav-item">
                                          <a class="nav-link" id="help-tab" data-toggle="tab" href="#help" role="tab" aria-controls="help" aria-selected="false">Help</a>
                                        </li> -->
                                      </ul>
                                      <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="landing_page" role="tabpanel" aria-labelledby="landing_page-tab">
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputEmail1">title (en)</label>
                                                    <textarea name="landing_title[en]" class="form-control" id="landing_title_en" cols="30" rows="2">{{(!empty($appSettingsData['landing_title'])) ? $appSettingsData['landing_title']['en'] : ''}}</textarea>
                                                    @if ($errors->has('text.en'))
                                                        <span class="text-danger">{{ $errors->first('text.en') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputEmail1">title (ar)</label>
                                                    <textarea name="landing_title[ar]" class="form-control" id="landing_title_ar" cols="30" rows="2">{{(!empty($appSettingsData['landing_title'])) ? $appSettingsData['landing_title']['ar'] : ''}}</textarea>
                                                    @if ($errors->has('text.ar'))
                                                        <span class="text-danger">{{ $errors->first('text.ar') }}</span>
                                                    @endif
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputEmail1">Text (en)</label>
                                                    <textarea name="landing_text[en]" class="form-control" id="landing_text_en" cols="30" rows="2">{{(!empty($appSettingsData['landing_text'])) ? $appSettingsData['landing_text']['en'] : ''}}</textarea>
                                                    @if ($errors->has('text.en'))
                                                        <span class="text-danger">{{ $errors->first('text.en') }}</span>
                                                    @endif
                                                </div>
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputEmail1">Text (ar)</label>
                                                    <textarea name="landing_text[ar]" class="form-control" id="landing_text_ar" cols="30" rows="2">{{(!empty($appSettingsData['landing_text'])) ? $appSettingsData['landing_text']['ar'] : ''}}</textarea>
                                                    @if ($errors->has('text.ar'))
                                                        <span class="text-danger">{{ $errors->first('text.ar') }}</span>
                                                    @endif
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="form-group col-md-6">
                                                    <label for="exampleInputEmail1">video</label>
                                                    <input type="file" id="landing_video" name="landing_video" accept="video/*" class="form-control">
                                                    @if ($errors->has('landing_video'))
                                                        <span class="text-danger">{{ $errors->first('landing_video') }}</span>
                                                    @endif
                                                </div>

                                            </div>
                                            
                                        </div>
                                         
                                      </div>



                                </div>
                                <!-- /.card-body -->
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


@endsection

@section("js")
    <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

    

    <script>
        CKEDITOR.replace( 'landing_text[en]' );
        CKEDITOR.replace( 'landing_text[ar]' );
        CKEDITOR.replace( 'landing_title[en]' );
        CKEDITOR.replace( 'landing_title[ar]' );

    </script>
    <script type="text/javascript">
    $(document).ready(function () {

        
         
    });
    </script>
@endsection