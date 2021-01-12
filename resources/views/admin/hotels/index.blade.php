@extends("layouts.admin")
@section("page_title", "hotels")
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
                                    View all hotels
                                    <a class="btn btn-info btn-sm text-right" href="{{ route('hotels.create') }}">+ Add New</a>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>title (en)</th>
                                            <th>title (ar)</th>
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
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(function() {
        // Swal.fire({
        //     title: 'Are you sure?',
        //     text: "You won't be able to revert this!",
        //     icon: 'warning',
        //     showCancelButton: true,
        //     confirmButtonColor: '#3085d6',
        //     cancelButtonColor: '#d33',
        //     confirmButtonText: 'Yes, delete it!'
        // }).then((result) => {
        //     if (result.isConfirmed) {
        //             Swal.fire(
        //             'Deleted!',
        //             'The hotel has been deleted.',
        //             'success'
        //             )
        //         }
        // })
        
        $('#example2').DataTable({
            processing: true,
            serverSide: true,
            ajax: '{!! route('hotels.grid') !!}',
            columns: [
                { data: 'id', name: 'id' },
                { data: 'title_en', name: 'title_en' },
                { data: 'title_ar', name: 'title_ar' },
                { data: 'actions', name: 'actions' },
            ]
        });
    });

    
    
    
</script>

@endsection