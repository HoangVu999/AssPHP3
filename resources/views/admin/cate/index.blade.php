@extends('admin.layouts.main')
@section('content')
<div class="col-md-12">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Danh sách danh mục</h4>
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
                    <tr>
                        <th>Stt</th>
                        <th>Tên</th>
                        <th>Logo</th>
                        <th>Số lượng bài viết</th>
                        <th>
                            <a href="{{route('cate.add')}}" class="btn btn-primary">Thêm mới</a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($cates as $item)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                                <img src="{{asset('storage/cateImage/'. $item->logo)}}" width="70">
                            </td>
                            <td>{{count($item->posts)}}</td>
                            <td>
                                <a href="{{route('cate.edit', ['id' => $item->id])}}" class="btn btn-info">Sửa</a>
                                <a href="{{route('cate.remove', ['id' => $item->id])}}" class="btn btn-danger delete" onclick="false">Xóa</a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="col-xs-4 offset-xs-8 pull-right">
                    {{$cates->links()}}
                </div>
            </div>
        </div>
    </div>
@endsection

