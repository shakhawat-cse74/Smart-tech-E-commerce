@extends('admin.master')

@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Brand Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Brand</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Brand</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Brand Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('brand.update',['id'=>$brand->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{$brand->name}}" id="name" placeholder="Enter Brand Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label">Brand Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description" id="description" placeholder="Enter Brand Description" >{{$brand->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Brand Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" name="image" type="file">
                                <img src="{{asset($brand->image)}}" height="80" alt="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$brand->status == 1 ? 'checked' : ''}}  value="1">Published</label>
                                <label><input type="radio" name="status" {{$brand->status == 0 ? 'checked' : ''}} value="0">Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Brand Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
