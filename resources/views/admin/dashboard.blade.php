@extends('admin.layoutAdmin.main')

@section('title', 'Dashboard')

@section('chart')
    <button type="button" class="btn btn-primary">Thêm danh mục mới</button>
    <table style="width: 100%; margin-top: 20px" border="1">
        <thead>
          <tr>
            <th>name</th>
            <th>description</th>
            <th>status</th>
            <th>slug</th>
            <th style="width:50px;">Chức năng</th>
            <th style="width:50px;">chức năng</th>
        </tr>
        </thead>
        <tbody>
          @foreach($category as $cate)
            <tr>
              <td style="width: 120px;">{{$cate->name}}</td>
              <td style="width: 120px;">{{$cate->description}}</td>
              <td style="width: 120px;">{{$cate->status}}</td>
              <td style="width: 120px;">{{$cate->slug}}</td>
              <td><button type="button" class="btn btn-danger">Update</button></td>
              <td><button type="button" class="btn btn-danger">Xóa</button></td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection