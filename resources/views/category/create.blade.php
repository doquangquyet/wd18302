@extends('layoutadmin')
@section('title')
    Thêm mới dang muc
@endsection
@section('content')
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif   --}}
@endsection
    <form action="{{ route('category.store')}}" method="POST" enctype="multipart/form-data">

      
    @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text"
                   class="form-control"
                   id="exampleFormControlInput1"
                   name="name"
                   placeholder="Bánh Gạo">
        </div>
        @error('name')
        <div class="alert alert-danger"> {{$message}} </div>
        @enderror
     
        <button type="submit" class="btn btn-success">Gửi</button>
        {{-- <a href="{{route('products.index')}}"  class="btn btn-light"> Quay lại trang chủ</a> --}}
    </form>
{{-- @endsection --}}