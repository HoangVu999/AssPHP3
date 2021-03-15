@extends('admin.layouts.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Danh sách bài viết</h4>
            <form action="" method="get">
                <div class="col-sm-3">
                    <div class="input-group">
                        <input type="text" class="form-control" id="exampleInputuname3" name="keyword" value="{{$keyword}}">
                    </div>
                </div>
            </form>
            <div class="table-responsive">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <th>ID</th>
                        <th width="10%">Tiêu đề</th>
                        <th width="10%">Tên danh mục</th>
                        <th>Ảnh</th>
                        <th width="20%">Mô tả ngắn</th>
                        <th>Tác giả</th>
                        {{-- <th>Lượt xem</th> --}}
                        <th>
                            <a href="{{route('post.add')}}" class="btn btn-primary">Tạo mới</a>
                        </th>
                    </thead>
                    <tbody>
                        @foreach($post as $item)
                            <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>
                                    {{$item->title}}
                                </td>
                                <td>{{$item->category->name}}</td>
                                <td>
                                    <img src="{{asset('storage/postImage/'. $item->image)}}" width="100">
                                </td>
                                <td>{{$item->short_desc}}</td>
                                <td>{{$item->author}}</td>
                                {{-- <td>0</td> --}}
                                <td> 
                                    <a href="{{route('post.edit', ['id' => $item->id])}}" class="btn btn-sm btn-info">Sửa</a>
                                    <a href="{{route('post.remove', ['id' => $item->id])}}" class="btn btn-sm btn-danger">Xóa</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="col-xs-4 offset-xs-8 pull-right">
                    {{$post->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

