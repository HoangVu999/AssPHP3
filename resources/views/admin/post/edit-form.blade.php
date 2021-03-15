@extends('admin.layouts.main')
@section('title', 'Tạo mới bài viết')
@section('content')
    <div class="col-12">
        <form action="{{route('post.edit.post')}}" method="post" enctype="multipart/form-data">
            @csrf
            <input type="hidden" name="id" value="{{old('id', $model->id)}}">
            <div class="row">
                <div class="col-4">
                    <div class="form-group">
                        <label for="">Tiêu đề</label>
                        <input type="text" name="title" class="form-control" value="{{old('title', $model->title)}}" placeholder="Tiêu đề">
                        @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="cate_id">Danh mục: </label>
                        <select name="cate_id" id="cate_id" class="form-control">
                            @foreach($category as $cate)
                                @if($cate->id == $model->cate_id)
                                    <option value="{{$cate->id}}" selected>{{$cate->name}}</option>
                                @else
                                    <option value="{{$cate->id}}">{{$cate->name}}</option>
                                @endif
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Miêu tả ngắn</label>
                        <input type="text" class="form-control" name="short_desc" placeholder="Mô tả ngắn" value="{{old('short_desc', $model->short_desc)}}">
                        @if ($errors->has('short_desc'))
                            <span class="text-danger">{{ $errors->first('short_desc') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Tác giả</label>
                        <input type="text" class="form-control" name="author" placeholder="Tác giả" value="{{old('author', $model->author)}}">
                        @if ($errors->has('author'))
                            <span class="text-danger">{{ $errors->first('author') }}</span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh</label>
                       <input type="file" name="image" class="form-control" value="{{old('image', $model->image)}}" >
                       <img src="{{asset('storage/postImage/'. $model->image)}}" alt="" width="300">
                    </div>
                </div>
                <div class="col-8">
                    <label for="">Nội dung</label>
                    <textarea rows="17" name="content" class="form-control my-editor"> {!! old('content', $model->content) !!}</textarea>                
                </div>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Cập nhật</button>
                <a href="" class="btn btn-warning">Hủy</a>
            </div>
        </form>
    </div>
@endsection
