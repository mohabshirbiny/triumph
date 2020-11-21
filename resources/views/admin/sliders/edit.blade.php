@extends("layouts.admin")
@section("page_title", "services")
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
                                <h3 class="card-title">edit slider</h3>
                            </div>
                            @if (count($errors) > 0)
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{ route('sliders.update', $slider->id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select name="hotel_id" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($hotels as $hotel)
                                                <option value="{{ $hotel->id }}" @if($slider->hotel_id == $hotel->id) selected @endif>{{ json_decode($hotel->title, true)['en'] . " - " . json_decode($hotel->title, true)['ar'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Title 1 [ar]</label>
                                            <input type="text" name="title1[ar]" value='{{$slider->title1_ar}}' class="form-control" placeholder="Enter title1" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Title 1 [en]</label>
                                            <input type="text" name="title1[en]" value='{{$slider->title1_en}}' class="form-control" placeholder="Enter title1" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Title 2 [ar]</label>
                                            <input type="text" name="title2[ar]" value='{{$slider->title2_ar}}' class="form-control" placeholder="Enter title2" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Title 2 [en]</label>
                                            <input type="text" name="title2[en]" value='{{$slider->title2_en}}' class="form-control" placeholder="Enter title2" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Title 3 [ar]</label>
                                            <input type="text" name="title3[ar]" value='{{$slider->title3_ar}}' class="form-control" placeholder="Enter title3" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Title 3 [en]</label>
                                            <input type="text" name="title3[en]" value='{{$slider->title3_en}}' class="form-control" placeholder="Enter title3" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Button text [ar]</label>
                                            <input type="text" name="btn_text[ar]" value='{{$slider->btn_text_ar}}' class="form-control" placeholder="Enter btn_text" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Button text [en]</label>
                                            <input type="text" name="btn_text[en]" value='{{$slider->btn_text_en}}' class="form-control" placeholder="Enter btn_text" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Button link </label>
                                            <input type="url" name="btn_link" value='{{$slider->btn_link}}' class="form-control" placeholder="Enter Button link" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Order</label>
                                            <input type="number" name="order" value='{{$slider->order}}' class="form-control" placeholder="Enter order" />
                                        </div>
                                    </div>

                                    <img style='max-width: 100px;min-width: 100px;' src="{{$slider->image_path}}">
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">Image</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='image' class="custom-file-input" id="exampleInputFile" accept="image/*">
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
    <script type="text/javascript">
    $(document).ready(function () {
        $('#quickForm').validate({
            rules: {
                hotel_id: {
                    required: true,
                },
                location_url: {
                    required: true,
                },
            },
            errorElement: 'span',
            errorPlacement: function (error, element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass('is-invalid');
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).removeClass('is-invalid');
            }
        });
    });
    </script>
@endsection