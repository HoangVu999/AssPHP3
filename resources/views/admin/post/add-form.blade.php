@extends('admin.layouts.main')
@section('title', 'Tạo mới bài viết')
@section('content')

    <div class="col-12">
        <form action="{{ route('post.add') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Tiêu đề">
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục</label>
                        <select class="form-control" name="cate_id">
                            @foreach ($category as $cate)
                                <option value="{{ $cate->id }}">
                                    {{ $cate->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Miêu tả ngắn</label>
                        <input type="text" class="form-control" name="short_desc" placeholder="Mô tả ngắn" value="{{old('title')}}">
                        @if ($errors->has('short_desc'))
                            <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Tác giả</label>
                        <input type="text" class="form-control" name="author" placeholder="Tác giả" value="{{old('author')}}">
                        @if ($errors->has('author'))
                            <span class="text-danger">{{ $errors->first('author') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                       <input type="file" name="image" class="form-control">
                       @if ($errors->has('image'))
                           <span class="text-danger">{{$errors->first('image')}}</span>
                       @endif
                    </div>
                </div>
                <div class="col-8">
                    <label for="">Nội dung</label>
                    <textarea rows="17" name="content" class="form-control my-editor">{!! old('content') !!}</textarea>                
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Tạo mới</button>
                <a href="" class="btn btn-warning">Hủy</a>
            </div>
        </form>
    </div>
@endsection
