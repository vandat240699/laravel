@extends('admin.layoutAdmin.main')

@section('title', 'Products')

@section('chart')
    <a class="btn btn-primary" href="/admin/products/add">Thêm sản phẩm mới</a>
    <table style="width: 100%; margin-top: 20px" border="1">
        <thead>
          <tr>
            <th>Name</th>
            <th>Image</th>
            <th>Category</th>
            <th>Price</th>
            <th>Status</th>
            <th>Số lượng</th>
            <th>Slug</th>
            <th style="width:50px;">Chức năng</th>
            <th style="width:50px;">chức năng</th>
        </tr>
        </thead>
        <tbody>
          @foreach($product as $pro)
          <tr>
            <td style="width: 120px;">{{$pro->name}}</td>
            <td style="width: 120px;"><img style = "width: 80px;"src="{{asset('storage/'.$pro->image)}}" alt=""></td>
            <td style="width: 120px;">{{$pro->category1->name}}</td>
            <td style="width: 120px;">{{number_format(($pro->price))}} đ</td>
            <td style="width: 120px;">{{$pro->status}}</td>
            <td style="width: 120px;">{{$pro->sl}}</td>
            <td style="width: 120px;">{{$pro->slug}}</td>
            <td><a href="{{url('/admin/products/edit/'.$pro->id)}}" class="btn btn-danger">Edit</a></td>
            <td><form class="delete-form" action="{{route('deletepro',$pro->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button onclick="return false" class="btn btn-danger delete-cate">Delete</button>
                </form>
            </td>
          </tr>
          @endforeach
        </tbody>
    </table>
    <div class="row justify-content-center">
      {{$product->links()}}
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