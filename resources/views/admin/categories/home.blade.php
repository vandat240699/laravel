@extends('admin.layoutAdmin.main')

@section('title', 'Categories')

@section('chart')
    <a href="/admin/categories/add"><button type="button" class="btn btn-primary">Thêm danh mục mới</button></a>
    <table style="width: 100%; margin-top: 20px" border="1">
        <thead>
          <tr>
            <th>name</th>
            <th>status</th>
            <th>slug</th>
            <th>description</th>
            <th style="width:50px;">Chức năng</th>
            <th style="width:50px;">chức năng</th>
        </tr>
        </thead>
        <tbody>
          @foreach($category as $cate)
            <tr>
              <td style="width: 120px;">{{$cate->name}}</td>
              <td style="width: 120px;">{{$cate->status ? 'Active' : 'Deactive'}}</td>
              <td style="width: 120px;">{{$cate->slug}}</td>
              <td style="width: 120px;">{{$cate->description}}</td>
              <td><a href="{{url('/admin/categories/edit/'.$cate->id)}}" class="btn btn-danger">Edit</a></td>
              <td><form class="delete-form" action="{{route('deletecate',$cate->id)}}" method="POST">
                @method('DELETE')
                @csrf
                <button onclick="return false" class="btn btn-danger delete-cate">Delete</button>
            </form></td>
            </tr>
          @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center">
      {{$category->links()}}
    </div>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
      document.querySelectorAll('.delete-cate').forEach((e, index) => {
        e.addEventListener('click',function(ee){
          ee.preventDefault();
          Swal.fire({
                title: 'Are you sure ?',
                text: "You won't be able to revert this !",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.querySelectorAll('.delete-form')[index].submit();
                }
            })
        })
      });
    </script>
@endsection