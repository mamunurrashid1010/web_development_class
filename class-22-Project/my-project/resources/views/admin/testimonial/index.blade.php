@extends('admin.layouts.master')
@section('content')

        <div class="page-breadcrumb">
            <div class="row">
                <div class="col-12 d-flex no-block align-items-center">
                    <h4 class="page-title">Testimonial</h4>
                    <div class="ms-auto text-end">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">About manage</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Testimonial</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <!-- flash message -->
                <div class="col-md-12">
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success alert-block">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>{{ $message }}</strong>
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>

                <div class="col-md-12">
                    <div style="float: right">
                        <a href="{{ route('testimonial.create') }}">
                            <button class="btn btn-info m-3">Create Testimonial</button>
                        </a>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">All Testimonial</h5>
                            <div class="table-responsive">
                                <table id="datatable" class="table table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Photo</th>
                                            <th>Name</th>
                                            <th>Title</th>
                                            <th>Message</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($testimonials as $data)
                                        <tr>
                                            <td><img src="{{ asset('images/testimonial') }}/{{ $data->image }}" width="100" height="100"></td>
                                            <td>{{ $data->name }}</td>
                                            <td>{{ $data->title }}</td>
                                            <td>{{ $data->message }}</td>
                                            <td>
                                                <a href="{{ route('testimonial.edit',$data->id) }}"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>
                                                <a href="{{ route('testimonial.delete',$data->id) }}"><button class="btn btn-secondary"><i class="fas fa-trash"></i></button></a>
                                            </td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

@endsection
