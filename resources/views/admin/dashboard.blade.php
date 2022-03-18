@extends('admin.layoutAdmin.main')

@section('title', 'Dashboard')

@section('chart')
    <table style="width: 100%;" border="1">
        <thead>
          <tr>
            <th>name</th>
            <th>description</th>
            <th>status</th>
            <th>slug</th>
        </tr>
        </thead>
        <tbody>
          @foreach($category as $cate)
            <tr>
              <td style="width: 120px;">{{$cate->name}}</td>
              <td style="width: 120px;">{{$cate->description}}</td>
              <td style="width: 120px;">{{$cate->status}}</td>
              <td style="width: 120px;">{{$cate->slug}}</td>
            </tr>
          @endforeach
        </tbody>
    </table>
@endsection