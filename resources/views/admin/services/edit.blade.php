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
                                <h3 class="card-title">edit service</h3>
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
                            <form role="form" id="quickForm" method="post" action="{{ route('services.update', $id) }}" enctype="multipart/form-data">
                                @csrf
                                @method('put')
                                <div class="card-body">
                                    
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Category</label>
                                        <select name="service_category_id" class="form-control">
                                            <option value="">Select Category</option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}" @if($details->service_category_id == $category->id) selected @endif>{{ json_decode($category->name, true)['en'] . " - " . json_decode($category->name, true)['ar'] }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Facebook</label>
                                            <input type="text" name="social_media[facebook]" value='{{ $details->social_media['facebook'] }}' class="form-control" placeholder="Enter facebook" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Twitter</label>
                                            <input type="text" name="social_media[twitter]" value='{{ $details->social_media['twitter'] }}' class="form-control" placeholder="Enter twitter" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Instagram</label>
                                            <input type="text" name="social_media[instagram]" value='{{ $details->social_media['instagram'] }}' class="form-control" placeholder="Enter instagram" />                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">Youtube</label>
                                            <input type="text" name="social_media[youtube]" value='{{ $details->social_media['youtube'] }}' class="form-control" placeholder="Enter youtube" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">name (ar)</label>
                                            <input type="text" name="name[ar]" value='{{ $details->name['ar'] }}' class="form-control" placeholder="Enter name ar" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">name (en)</label>
                                            <input type="text" name="name[en]" value='{{ $details->name['en'] }}' class="form-control" placeholder="Enter name en" />
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">about (ar)</label>
                                            <textarea name="about[ar]" class="form-control" id="" cols="30" rows="2">{{ $details->about['ar'] }}</textarea>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">about (en)</label>
                                            <textarea name="about[en]" class="form-control" id="" cols="30" rows="2">{{ $details->about['en'] }}</textarea>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">email</label>
                                            <input type="text" name="contact_details[email]" value='{{ $details->contact_details['email'] }}' class="form-control" placeholder="Enter email" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">website</label>
                                            <input type="text" name="contact_details[website]" value='{{ $details->contact_details['website'] }}' class="form-control" placeholder="Enter website" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">mobile</label>
                                            <input type="text" name="contact_details[mobile]" value='{{ $details->contact_details['mobile'] }}' class="form-control" placeholder="Enter mobile" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">phone</label>
                                            <input type="text" name="contact_details[phone]" value='{{ $details->contact_details['phone'] }}' class="form-control" placeholder="Enter phone" />
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">whatsapp</label>
                                            <input type="text" name="contact_details[whatsapp]" value='{{ $details->contact_details['whatsapp'] }}' class="form-control" placeholder="Enter whatsapp" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">working hours</label>
                                            <input type="text" name="contact_details[working_hours]" value='{{ $details->contact_details['working_hours'] }}' class="form-control" placeholder="Enter working hours" />
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">address</label>
                                            <input type="text" name="contact_details[address]" value='{{ $details->contact_details['address'] }}' class="form-control" placeholder="Enter address" />
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputEmail1">location URL</label>
                                            <input type="text" name="location_url" value='{{ $details->location_url }}' class="form-control" placeholder="Enter location URL" />
                                        </div>
                                    </div>

                                    
                                    <div class="row">
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">logo</label>
                                            <img style="width: 50px;" src="{{ url('images/service_files/' . $details->logo) }}" alt="">
                                            <div class="input-group">
                                                <div class="custom-file">
                                                    <input type="file" name='logo' class="custom-file-input" id="exampleInputFile" accept="image/*">
                                                    <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="exampleInputFile">cover</label>
                                            <img style="width: 50px;" src="{{ url('images/service_files/' . $details->cover) }}" alt="">
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
    <script src="{{ asset('admin_assets/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin_assets/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('#quickForm').validate({
            rules: {
                service_category_id: {
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