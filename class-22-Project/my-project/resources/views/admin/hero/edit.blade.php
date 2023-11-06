@extends('admin.layouts.master')
@section('content')

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
                    <a href="{{ route('hero') }}">
                        <button class="btn btn-info m-3">Show hero</button>
                    </a>
                </div>
            </div>
            <!-- hero form -->
            <div class="col-md-12">
                <div class="card">
                    <form class="form-horizontal" action="{{ route('hero.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body">
                            <h4 class="card-title">Edit Hero</h4><hr>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Title 1 <span class="text-danger"> *</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="title1" value="{{ $hero->title1 }}" class="form-control" placeholder="Title 1 Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Title 2  <span class="text-danger"> *</span></label>
                                <div class="col-sm-9">
                                    <input type="text" name="title2" value="{{ $hero->title2 }}" class="form-control" placeholder="Title 2 Here" required>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Get Start URL</label>
                                <div class="col-sm-9">
                                    <input type="text" name="url" value="{{ $hero->url }}" class="form-control" placeholder="Enter url here">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Background Image  <span class="text-danger"> *</span></label>
                                <div class="col-sm-9">
                                    <input type="file" name="image" class="form-control" required >
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="" class="col-sm-3 text-end control-label col-form-label">Description</label>
                                <div class="col-sm-9">
                                    <textarea class="form-control" name="description">{{ $hero->description }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="border-top">
                            <div class="card-body">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
