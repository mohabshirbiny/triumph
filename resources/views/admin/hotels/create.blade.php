@extends("layouts.admin")
@section("page_title", "Add new hotel")
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
                                <h3 class="card-title">Add new hotel</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{ route('hotels.store') }}" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                       
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">title (en)</label>
                                        <input type="text" name="title[en]" class="form-control" value="{{old('title.en')}}" placeholder="Enter title en" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">title (ar)</label>
                                            <input type="text" name="title[ar]" class="form-control" value="{{old('title.ar')}}" placeholder="Enter title ar" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">slug</label>
                                            <input type="text" name="slug" class="form-control" value="{{old('slug')}}" placeholder="Enter slug" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Facebook</label>
                                            <input type="text" name="social_media[facebook]" value='{{old('social_media.facebook')}}' class="form-control" placeholder="Enter facebook" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Twitter</label>
                                            <input type="text" name="social_media[twitter]" value='{{old('social_media.twitter')}}' class="form-control" placeholder="Enter twitter" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Instagram</label>
                                            <input type="text" name="social_media[instagram]" value='{{old('social_media.instagram')}}' class="form-control" placeholder="Enter instagram" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Youtube</label>
                                            <input type="text" name="social_media[youtube]" value='{{old('social_media.youtube')}}' class="form-control" placeholder="Enter youtube" />
                                        </div>
                                    </div>


                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">about (ar)</label>
                                            <textarea name="about[ar]" class="form-control" id="" cols="30" rows="2">{{old('about.ar')}}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">about (en)</label>
                                            <textarea name="about[en]" class="form-control" id="" cols="30" rows="2">{{old('about.en')}}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">email</label>
                                            <input type="text" name="contact_details[email]" value='{{old('contact_details.email')}}' class="form-control" placeholder="Enter email" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">website</label>
                                            <input type="text" name="contact_details[website]" value='{{old('contact_details.website')}}' class="form-control" placeholder="Enter website" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">mobile</label>
                                            <input type="text" name="contact_details[mobile]" value='{{old('contact_details.mobile')}}' class="form-control" placeholder="Enter mobile" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">phone</label>
                                            <input type="text" name="contact_details[phone]" value='{{old('contact_details.phone')}}' class="form-control" placeholder="Enter phone" />
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">whatsapp</label>
                                            <input type="text" name="contact_details[whatsapp]" value='{{old('contact_details.whatsapp')}}' class="form-control" placeholder="Enter whatsapp" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Fax</label>
                                            <input type="text" name="contact_details[fax]" value='{{old('contact_details.fax')}}' class="form-control" placeholder="Enter fax" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">address</label>
                                            <input type="text" name="contact_details[address]" value='{{old('contact_details.address')}}' class="form-control" placeholder="Enter address" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">location URL</label>
                                            <input type="url" name="contact_details[location_url]" value='{{old('contact_details.location_url')}}' class="form-control" placeholder="Enter location URL" />
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">location URL Map</label>
                                            <input type="url" name="contact_details[location_url_map]" value='{{old('contact_details.location_url_map')}}' class="form-control" placeholder="Enter location URL Map" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Booking URL</label>
                                            <input type="url" name="booking_url" value='{{old('booking_url')}}' class="form-control" placeholder="Enter booking URL" />
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">logo</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='logo' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">cover</label>
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='cover' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>                                        
                                    </div>
                                    <hr>
                                    <br>
                                    <h2>Index page data</h2>
                                    <br>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Rate title ar</label>
                                            <input type="text" name="index_page_data[rate_title_ar]" value='{{ old('index_page_data.rate_title_ar') }}' class="form-control" placeholder="Enter instagram" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Rate title en</label>
                                            <input type="text" name="index_page_data[rate_title_en]" value='{{ old('index_page_data.rate_title_en') }}' class="form-control" placeholder="Enter youtube" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Rate text (ar)</label>
                                            <textarea name="index_page_data[rate_text_ar]" class="form-control" id="" cols="30" rows="2">{{ old('index_page_data.rate_text_en') }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Rate text (en)</label>
                                            <textarea name="index_page_data[rate_text_en]" class="form-control" id="" cols="30" rows="2">{{ old('index_page_data.rate_text_en') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">Rate image</label>
                                            <img style="width: 150px;" src="{{  old('rate_image') }}" alt="">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='rate_image' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                                                           
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Restaurants title ar</label>
                                            <input type="text" name="index_page_data[restaurant_title_ar]" value='{{ old('index_page_data.restaurant_title_ar') }}' class="form-control" placeholder="Enter instagram" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Restaurants title en</label>
                                            <input type="text" name="index_page_data[restaurant_title_en]" value='{{ old('index_page_data.restaurant_title_en') }}' class="form-control" placeholder="Enter youtube" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Restaurants text (ar)</label>
                                            <textarea name="index_page_data[restaurant_text_ar]" class="form-control" id="" cols="30" rows="2">{{ old('index_page_data.restaurant_text_en') }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Restaurants text (en)</label>
                                            <textarea name="index_page_data[restaurant_text_en]" class="form-control" id="" cols="30" rows="2">{{ old('index_page_data.restaurant_text_en') }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">Restaurants image</label>
                                            <img style="width: 150px;" src="{{  old('restaurant_image') }}" alt="">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='restaurant_image' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                                                           
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Meet title ar</label>
                                            <input type="text" name="index_page_data[meet_title_ar]" value='{{ old('index_page_data.meet_title_ar') }}' class="form-control" placeholder="Enter instagram" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Meet title en</label>
                                            <input type="text" name="index_page_data[meet_title_en]" value='{{ old('index_page_dat.meet_title_en') }}' class="form-control" placeholder="Enter youtube" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Meet text (ar)</label>
                                            <textarea name="index_page_data[meet_text_ar]" class="form-control" id="" cols="30" rows="2">{{ old('index_page_data.meet_text_en') }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Meet text (en)</label>
                                            <textarea name="index_page_data[meet_text_en]" class="form-control" id="" cols="30" rows="2">{{ old('index_page_data.meet_text_en') }}</textarea>
                                        </div>
                                    </div>
                                    
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">Meet image</label>
                                            <img style="width: 150px;" src="{{  old('meet_image') }}" alt="">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='meet_image' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                                                           
                                    </div>
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">youtube video link</label>
                                            <input type="url" name="index_page_data[youtube_link]" value='{{ old('index_page_data.youtube_link') }}' class="form-control" placeholder="Enter booking URL" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">index background image</label>
                                            <img style="width: 150px;" src="{{  old('index_background_image') }}" alt="">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='index_background_image' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <div class="row">
                                        
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">youtube background image</label>
                                            <img style="width: 150px;" src="{{  old('youtube_background_image') }}" alt="">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='youtube_background_image' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    {{-- <div class="form-group">
                                        <label for="exampleInputEmail1">Icon</label>
                                        <input type="file" name="icon" class="form-control" />
                                    </div> --}}
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
    <script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('#quickForm').validate({
            rules: {
                icon: {
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