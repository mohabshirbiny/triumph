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
                                    <a class="btn btn-info btn-sm text-right" href="{{ route('hotels.gallery.create', $hotel_id) }}">+ Add New</a>
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Place</th>
                                            <th>Image</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $counter = 1; @endphp
                                        @foreach ($gallery_decoded as $type => $record_arr)
                                            
                                                @foreach ($record_arr as $record)
                                                    <tr>
                                                        <td>{{ $counter }}</td>
                                                        <td>{{ $type }}</td>
                                                        <td>
                                                            
                                                                <img style="width: 50px;" src="{{ url('images/hotel_files/' . $record) }}" alt="">
                                                            
                                                        </td>
                                                        <td><a class="badge bg-danger" onclick="return ConfirmDelete();" href="{{ route("hotels.gallery.delete", [$hotel_id, $record]) }}">Delete</a></td>
                                                    </tr>
                                                    @php $counter++; @endphp
                                                @endforeach
                                            
                                        @endforeach
                                    </tbody>
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