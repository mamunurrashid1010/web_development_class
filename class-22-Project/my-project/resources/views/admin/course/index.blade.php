@extends('admin.layouts.master')
@section('content')
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title">Course manage</h4>
                <div class="ms-auto text-end">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Dashboard </a></li>
                            <li class="breadcrumb-item active" aria-current="page">Course</li>
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
                    <a href="{{ route('course.create') }}">
                        <button class="btn btn-info m-3">Create Course</button>
                    </a>
                </div>
            </div>
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">All Courser</h5>
                        <div class="table-responsive">
                            <table id="datatable" class="table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>Photo</th>
                                    <th>Name</th>
                                    <th>Category</th>
                                    <th>Trainer</th>
                                    <th>Fee</th>
                                    <th>Schedule</th>
                                    <th>Feature</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td><img src="{{ asset('images/course') }}/{{ $course->image }}" width="100" height="100"></td>
                                        <td>{{ $course->name }}</td>
                                        <td>{{ $course->category }}</td>
                                        <td>{{ $course->trainerName->name }}</td>
                                        <td>{{ $course->fee }}</td>
                                        <td>{{ $course->schedule }}</td>
                                        <td>{{ $course->totalFeature->count() ?? 0 }}</td>
                                        <td>
                                            <a href="{{ route('course.show',$course->id) }}"><button class="btn btn-primary"><i class="fas fa-eye"></i></button></a>
                                            <a href="{{ route('course.feature',$course->id) }}"><button class="btn btn-info"><i class="fas fa-plus"> Add feature</i></button></a>
{{--                                            <a href="{{ route('trainer.edit',$course->id) }}"><button class="btn btn-warning"><i class="fas fa-edit"></i></button></a>--}}
                                            <a href="{{ route('course.delete',$course->id) }}"><button class="btn btn-secondary"><i class="fas fa-trash"></i></button></a>
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
