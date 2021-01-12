@extends("layouts.admin")
@section("page_title", "restaurants")
@section('css')
<link rel="stylesheet" href="{{ asset('admin_assets/plugins/select2/css/select2.min.css') }}">
<link rel="stylesheet" href="{{ asset('admin_assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') }}">
@endsection
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
                                <h3 class="card-title">Add new restaurant</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{ route('restaurants.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Hotel</label>
                                        <select name="hotel_id" class="form-control">
                                            <option value="">Select Hotel</option>
                                            @foreach ($hotels as $hotel)
                                                <option value="{{ $hotel->id }}">{{ json_decode($hotel->title, true)['en'] . " - " . json_decode($hotel->title, true)['ar'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Title [ar]</label>
                                            <input type="text" name="title[ar]" value='{{old('title.ar')}}' class="form-control" placeholder="Enter title" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Title [en]</label>
                                            <input type="text" name="title[en]" value='{{old('title.en')}}' class="form-control" placeholder="Enter title" />
                                        </div>
                                    </div>
                                    

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">description (ar)</label>
                                            <textarea name="description[ar]" class="form-control" id="" cols="30" rows="2">{{old('description.ar')}}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">description (en)</label>
                                            <textarea name="description[en]" class="form-control" id="" cols="30" rows="2">{{old('description.en')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Opening Hours </label>
                                            <input type="text" name="contact_details[open_hours]" value='{{old('contact_details.open_hours')}}' class="form-control" placeholder="Enter open hours" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Dress Code </label>
                                            <input type="text" name="contact_details[dress_code]" value='{{old('contact_details.dress_code')}}' class="form-control" placeholder="Enter dress code" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">phone</label>
                                            <input type="text" name="contact_details[phone]" value='{{old('contact_details.phone')}}' class="form-control" placeholder="Enter phone" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">fax</label>
                                            <input type="text" name="contact_details[fax]" value='{{old('contact_details.fax')}}' class="form-control" placeholder="Enter fax" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Type</label>
                                            <input type="text" name="type" value='{{old('type')}}' class="form-control" placeholder="Enter type .. Cafe,Italian,Bar ..." />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Facilities</label>
                                            <select name="facilities[]" class="select2" data-placeholder="Select a facility" style="width: 100%;" multiple>
                                                @foreach ($facilities as $facility)
                                                    <option value="{{ $facility->id }}">{{ json_decode($facility->name, true)['en'] . " - " . json_decode($facility->name, true)['ar'] }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        
                                    </div>

                                    

                                    
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
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">Cover</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='cover' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                                                         
                                    </div>
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
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">Cover</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='cover' class="custom-file-input" id="exampleInputFile" accept="image/*">
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
    <script src="{{ asset('admin_assets/plugins/select2/js/select2.full.min.js') }}"></script>

    <script src="{{ asset('admin_assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('.select2').select2();

        $('#quickForm').validate({
            rules: {
                slider_category_id: {
                    required: true,
                },
                logo: {
                    required: true,
                },
                cover: {
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

    $(document).on("change", "#city_id", function() {

    });
    </script>
@endsection