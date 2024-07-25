@extends('layoutadmin')
@section('title')
    Danh mục sản phẩm
@endsection
@section('content')
    <a href="{{ route('category.create')}}" class="btn btn-primary">Thêm mới danh muc</a>
    <table class="table">
        <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th>ac</th>
         
        </tr>
        </thead>

        <tbody>
        @foreach($listCate as $item)
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
            
                <td>
                    <button type="button" class="btn btn-danger">Xóa</button>
                    <button type="button" class="btn btn-warning">Sửa</button>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    {{-- {{$listPro->links()}} --}}
@endsection
