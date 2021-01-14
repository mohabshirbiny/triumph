@extends("layouts.admin")
@section("page_title", "hotels")
@section("content")

    <div class="content-wrapper">
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
                                <h3 class="card-title">Edit  {{ $page->key}} in {{ $hotel->title_en}}</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{ route('hotels.pages.store',  $hotel->id) }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">

                                    <input type="hidden" name="page" value="{{$page->id}}">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">title (en)</label>
                                            <textarea name="title[en]" class="form-control" id="title" cols="30" rows="2">{{$page->title_en}}</textarea>
                                            @if ($errors->has('text.en'))
                                                <span class="text-danger">{{ $errors->first('text.en') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">title (ar)</label>
                                            <textarea name="title[ar]" class="form-control" id="title" cols="30" rows="2">{{$page->title_ar}}</textarea>
                                            @if ($errors->has('text.ar'))
                                                <span class="text-danger">{{ $errors->first('text.ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Content (en)</label>
                                            <textarea name="content[en]" class="form-control" id="landing_text_en" cols="30" rows="2">{{$page->content_en}}</textarea>
                                            @if ($errors->has('text.en'))
                                                <span class="text-danger">{{ $errors->first('text.en') }}</span>
                                            @endif
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Content (ar)</label>
                                            <textarea name="content[ar]" class="form-control" id="landing_text_ar" cols="30" rows="2">{{$page->content_ar}}</textarea>
                                            @if ($errors->has('text.ar'))
                                                <span class="text-danger">{{ $errors->first('text.ar') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="row" id="uploaded_file_block">
                                        <div class="form-group col-md-2">
                                            <img style="width: 50px;" src="{{$page->cover_path }}" alt="">

                                        </div>
                                        <div class="form-group col-md-8">
                                            <label for="exampleInputFile">Cover</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='cover' required class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
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
    <script src="{{ asset('admin_assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script src="https://cdn.ckeditor.com/4.15.1/full/ckeditor.js"></script>

    

    <script>
        CKEDITOR.replace( 'title[en]' );
        CKEDITOR.replace( 'title[ar]' );
        CKEDITOR.replace( 'content[en]' );
        CKEDITOR.replace( 'content[ar]' );

    </script>

    
    <script type="text/javascript">
    $(document).ready(function () {
         
    });

    $(document).on("change", "#file_type", function() {
        let file_type = $(this).val();
        
        if(file_type == "youtube_video") {
            $("#youtube_video_block").removeClass("d-none");
            $("#youtube_video_block input").attr("required", "required");
            $("#uploaded_file_block input").removeAttr("required");
            $("#uploaded_file_block").addClass("d-none");
        } else {
            $("#youtube_video_block").addClass("d-none");
            $("#uploaded_file_block").removeClass("d-none");
            $("#uploaded_file_block input").attr("required", "required");
            $("#youtube_video_block input").removeAttr("required");
        }

        if(file_type == "video") {
            $("#uploaded_video_thumbnail").removeClass("d-none");
            $("#uploaded_video_thumbnail input").attr("required", "required");
        } else {
            $("#uploaded_video_thumbnail").addClass("d-none");
        }
    });
    </script>
@endsection