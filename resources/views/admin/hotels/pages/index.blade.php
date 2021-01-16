@extends("layouts.admin")
@section("page_title", "hotels")
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
                                    {{-- <a class="btn btn-info btn-sm text-right" href="{{ route('hotels.gallery.create', $hotel->id) }}">+ Add New</a> --}}
                                </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example2" class="table table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Key</th>
                                            <th>Cover</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @php $counter = 1; @endphp
                                            
                                        @foreach ($hotel->pages() as $page)
                                            <tr>
                                                <td>{{ $counter }}</td>
                                                <td>{{ $page->key }}</td>
                                                <td>
                                                    
                                                        <img style="width: 50px;" src="{{ $page->cover_path }}" alt="">
                                                    
                                                </td>
                                                <td><a class="badge bg-warning" href="{{ route("hotels.pages.show", [$hotel->id, $page->id]) }}">Edit</a></td>
                                            </tr>
                                            @php $counter++; @endphp
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