@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Sub Category Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Sub Category</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edir Sub Category</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Sub Category Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-success">{{session('message')}}</p>
                    <form class="form-horizontal"action="{{route('sub-category.update',$sub_category->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id">
                                    <option value="">--Select Category Name--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected($sub_category->category_id == $category->id)>{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <input class="form-control" value="{{$sub_category->name}}" name="name" id="name" placeholder="Enter Sub Category Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label">Sub Category Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description" id="description" placeholder="Enter Category Description" >{{$sub_category->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Sub Category Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" name="image" type="file">
                                <img src="{{asset($sub_category->image)}}" height="80" alt="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$sub_category->status == 1 ? 'checked' : ''}} value="1">Published</label>
                                <label><input type="radio" name="status" {{$sub_category->status == 0 ? 'checked' : ''}} value="0">Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Sub Category</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
