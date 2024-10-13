@extends('admin.master')

@section('body')
    <!-- PAGE-HEADER -->
    <div class="page-header">
        <div>
            <h1 class="page-title">Product Module</h1>
        </div>
        <div class="ms-auto pageheader-btn">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0);">Product</a></li>
                <li class="breadcrumb-item active" aria-current="page">Edit Product</li>
            </ol>
        </div>
    </div>
    <!-- PAGE-HEADER END -->
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header border-bottom">
                    <h3 class="card-title">Edit Product Form</h3>
                </div>
                <div class="card-body">
                    <p class="text-muted text-success">{{session('message')}}</p>
                    <form class="form-horizontal"action="{{route('product.update', $product->id )}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="category_id" onchange="getSubCategoryByCategory(this.value)">
                                    <option value="">--Select Category--</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}" @selected($product->category_id == $category->id) >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Sub Category Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="sub_category_id" id="subCategory">
                                    <option value="">--Select Sub Category--</option>
                                    @foreach($sub_categories as $sub_category)
                                        <option value="{{$sub_category->id}}" @selected($product->sub_category_id == $sub_category->id) >{{$sub_category->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Brand Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="brand_id">
                                    <option value="">--Select Brand--</option>
                                    @foreach($brands as $brand)
                                        <option value="{{$brand->id}}"@selected($product->brand_id == $brand->id) >{{$brand->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Unit Name</label>
                            <div class="col-md-9">
                                <select class="form-control" name="unit_id">
                                    <option value="">--Select Unit--</option>
                                    @foreach($units as $unit)
                                        <option value="{{$unit->id}}" @selected($product->unit_id == $unit->id) >{{$unit->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="name" class="col-md-3 form-label">Product Name</label>
                            <div class="col-md-9">
                                <input class="form-control" name="name" value="{{$product->name}}" id="name" placeholder="Enter Product Name" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="code" class="col-md-3 form-label">Product Code</label>
                            <div class="col-md-9">
                                <input class="form-control" name="code" value="{{$product->code}}" id="code" placeholder="Enter Product Code" type="text">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="shortDescription" class="col-md-3 form-label">Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="short_description" id="shortDescription" placeholder="Enter Short Description" >{{$product->short_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="summernote" class="col-md-3 form-label">Long Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="long_description" id="summernote" placeholder="Enter Long Description" >{{$product->long_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Product Price</label>
                            <div class="col-md-9">
                                <div class="input-group">
                                    <input class="form-control" name="regular_price" value="{{$product->regular_price}}" placeholder="Regular Price" type="number">
                                    <input class="form-control" name="selling_price" value="{{$product->selling_price}}" placeholder="Selling Price" type="number">
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <label for="stockAmount" class="col-md-3 form-label">Stock Amount</label>
                            <div class="col-md-9">
                                <input class="form-control" id="stockAmount" value="{{$product->stock_amount}}" name="stock_amount" placeholder="Enter Stock Amount" type="number">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="metaTitle" class="col-md-3 form-label">Meta title</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="meta_title" id="metaTitle" placeholder="Enter Meta title" >{{$product->meta_title}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="metaDescription" class="col-md-3 form-label">Meta Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" name="meta_description" id="metaDescription" placeholder="Enter Meta Description" >{{$product->meta_description}}</textarea>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="image" class="col-md-3 form-label">Product Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="image" name="image" type="file">
                                <img src="{{asset($product->image)}}" height="200" width="200" alt="">
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label for="otherImage" class="col-md-3 form-label">Product Other Image</label>
                            <div class="col-md-9">
                                <input class="form-control" id="otherImage" multiple name="other_image[]" type="file">
                                @foreach($product->productImages as $productImage)
                                    <img src="{{asset($productImage->image)}}" height="200" width="200" alt="">
                                @endforeach
                            </div>
                        </div>
                        <div class="row mb-4">
                            <label class="col-md-3 form-label">Publication Status</label>
                            <div class="col-md-9">
                                <label><input type="radio" name="status" {{$product->status == 1 ? 'checked' : ''}}  value="1">Published</label>
                                <label><input type="radio" name="status" {{$product->status == 0 ? 'checked' : ''}} value="0">Unpublished</label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Update Product Info</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
