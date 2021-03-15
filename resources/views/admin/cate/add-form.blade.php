@extends('admin.layouts.main')
@section('title', 'Tạo mới danh mục')
@section('content')

    <div class="col-6 offset-md-3">
        <form action="{{route('cate.add')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="name" class="form-control" value="{{old('name')}}">
                @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Logo</label>
               <input type="file" name="logo" class="form-control" value="{{old('logo')}}" >
               @if ($errors->has('logo'))
                   <span class="text-danger">{{$errors->first('logo')}}</span>
               @endif
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Tạo mới</button>
                <a href="" class="btn btn-warning">Hủy</a>
            </div>
        </form>
    </div>
@endsection
