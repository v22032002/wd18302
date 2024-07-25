@extends('layoutadmin')
@section('title')
    Danh sách sản phẩm
@endsection
@section('content')
    <a href="{{route('products.create')}}" class="btn btn-primary">Thêm mới sản phẩm</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">image</th>
            <th scope="col">category name</th>
            <th scope="col">Thao tác</th>
        </tr>
        </thead>
        @foreach($listPro as $item)
        <tbody>
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->price}}</td>
            <td>{{$item->quantity}}</td>
            <td>{{$item->image}}</td>
            <td>{{$item->listCate->name}}</td>
            <td>
                <button type="button" class="btn btn-danger">Xóa</button>
                <button type="button" class="btn btn-warning">Sửa</button>
            </td>
        </tr>
        </tbody>
        @endforeach
    </table>
{{$listPro->links()}}
@endsection