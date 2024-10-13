@extends('admin.master')

@section('body')

    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Unit Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Unit</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Unit</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Unit Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted">{{session('message')}}</p>
                    <form class="form-horizontal" action="{{route('unit.update',['id'=>$unit->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{$unit->name}}" id="name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="code" class="col-md-3 form-label">Unit Code</label>
                            <div class="col-md-9">
                                <input class="form-control" name="code" value="{{$unit->code}}" id="code" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="description" class="col-md-3 form-label">Unit Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="description" id="description" >{{$unit->description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$unit->status == 1 ? 'checked' : ''}} value="1">Published</label>
                                <label><input type="radio" name="status" {{$unit->status == 0 ? 'checked' : ''}} value="0">Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Unit Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
