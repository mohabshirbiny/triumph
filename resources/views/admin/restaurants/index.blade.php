@extends("layouts.admin")
@section("page_title", "resturants")
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
                                    View all restaurants
                                    <a class="btn btn-info btn-sm text-right" href="{{ route('restaurants.create') }}">+ Add New</a>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            
                                            <th>Hotel</th>
                                            <th>Restaurant</th>
                                            <th>image</th>
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
        ajax: '{!! route('restaurants.grid') !!}',
        columns: [
            { data: 'id', name: 'id' },
            { data: 'hotel', name: 'hotel' },
            { data: 'restaurant', name: 'restaurant' },
            { data: 'image', name: 'image' },
            { data: 'actions', name: 'actions' },
        ]
    });
});
</script>

@endsection