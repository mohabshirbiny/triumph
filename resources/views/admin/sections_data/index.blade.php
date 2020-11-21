@extends("layouts.admin")
@section("page_title", "Sections")
@section("content")

    <div class="content-wrapper">
        @include('layouts.alerts')
        
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
                                    View all sections
                                    {{-- <a class="btn btn-info btn-sm text-right" href="{{ route('sections.store') }}">+ Add New</a> --}}
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Title (en)</th>
                                            <th>Title (ar)</th>
                                            <th>Gallery</th>
                                            <th>Model</th>
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
        ajax: '{!! route('sections.index') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'title_en', name: 'title_en' },
            { data: 'title_ar', name: 'title_ar' },
            { data: 'model', name: 'model' },
            { data: 'gallery', name: 'gallery' },
            { data: 'actions', name: 'actions' },
        ]
    });
});
</script>

@endsection