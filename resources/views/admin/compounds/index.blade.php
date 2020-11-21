@extends("layouts.admin")
@section("page_title", "compounds")
@section("content")

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
            </div>
            <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">
                                    View all compounds
                                    <a class="btn btn-info btn-sm text-right" href="{{ route('compounds.create') }}">+ Add New</a>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Name (en)</th>
                                            <th>Name (ar)</th>
                                            <th>Gallery</th>
                                            <th>Attachments</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>


@endsection

@section("js")
<script>
$(function() {
    $('#example2').DataTable({
        processing: true,
        serverSide: true,
        ajax: '{!! route('compounds.grid') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'name_en', name: 'name_en' },
            { data: 'name_ar', name: 'name_ar' },
            { data: 'gallery', name: 'gallery' },
            { data: 'attachments', name: 'attachments' },
            { data: 'actions', name: 'actions' },
        ]
    });
});
</script>

@endsection