@extends("layouts.admin")
@section("page_title", "contractor category")
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
                                <h3 class="card-title">Edit contractor category</h3>
                            </div>
                            <!-- /.card-header -->
                            <!-- form start -->
                            <form role="form" id="quickForm" method="post" action="{{ route('contractor-categories.update', $contractor_category->id) }}">
                                @csrf
                                @method("PUT")
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title (en)</label>
                                        <input type="text" name="title_en" class="form-control" placeholder="Enter title en" value="{{ $contractor_category->title_en }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Title (ar)</label>
                                        <input type="text" name="title_ar" class="form-control" placeholder="Enter title ar" value="{{ $contractor_category->title_ar }}" />
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Icon</label>
                                        <input type="text" name="icon" class="form-control" placeholder="Enter icon" value="{{ $contractor_category->icon }}" />
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
    <script src="{{ asset('admin/plugins/jquery-validation/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('admin/plugins/jquery-validation/additional-methods.min.js') }}"></script>
    <script type="text/javascript">
    $(document).ready(function () {
        $('#quickForm').validate({
            rules: {
                title_en: {
                    required: true,
                },
                title_ar: {
                    required: true,
                },
                icon: {
                    required: true,
                },
            },
            // messages: {
            //     name: {
            //         required: "Please enter a name",
            //     }
            // },
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