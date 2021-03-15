@extends('admin.layouts.main')
@section('title', 'cập nhật danh mục')
@section('content')
    <div class="col-6 offset-md-3">
        <form action="{{route('cate.edit.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{old('id', $model->id)}}">
            <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" name="name" class="form-control" value="{{old('name', $model->name)}}">
                @if($errors->has('name'))
                    <span class="text-danger">{{$errors->first('name')}}</span>
                @endif
            </div>
            <div class="form-group">
                <label for="">Logo</label>
               <input type="file" name="logo" class="form-control" value="{{old('logo')}}" >
               <img src="{{asset('storage/cateImage/'. $model->logo)}}" alt="" width="300">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Lưu</button>
                <a href="" class="btn btn-warning">Hủy</a>
            </div>
        </form>
    </div>
@endsection

