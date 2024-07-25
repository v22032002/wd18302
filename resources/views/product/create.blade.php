@extends('layoutadmin')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('content')
@if ($errors->any())
    <div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
    </div>
@endif
<form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label class="form-label" for="productName">Name</label>
        <input type="text" class="form-control" id="productName" name="name" placeholder="Bánh Gạo">
        @error('name')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="productPrice">Price</label>
        <input type="text" class="form-control" id="productPrice" name="price">
        @error('price')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="productQuantity">Quantity</label>
        <input type="text" class="form-control" id="productQuantity" name="quantity">
        @error('quantity')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="productImage">Image</label>
        <input type="file" class="form-control" id="productImage" name="image">
        @error('image')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <div class="mb-3">
        <label class="form-label" for="productCategory">Category</label>
        <select class="form-select" id="productCategory" name="category_id" aria-label="Default select example">
            @foreach($listCate as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
            @endforeach
        </select>
        @error('category_id')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>
    <button type="submit" class="btn btn-success">Gửi</button>
    <a href="{{ route('products.index') }}" class="btn btn-light">Quay lại trang chủ</a>
</form>
@endsection
