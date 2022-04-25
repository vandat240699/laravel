@extends('admin.layoutAdmin.main')

@section('title', 'Products')

@section('chart')
    <table style="width: 100%; margin-top: 20px" border="1">
        <thead>
          <tr>
            <th>Name</th>
            <th>Email</th>
            {{-- <th>Password</th> --}}
            {{-- <th style="width:50px;">Chức năng</th> --}}
            <th style="width:50px;">chức năng</th>
        </tr>
        </thead>
        <tbody>
          @foreach($user as $u)
          <tr>
            <td style="width: 120px;">{{$u->name}}</td>
            <td style="width: 120px;">{{$u->email}}</td>
            {{-- <td style="width: 120px;">{{$u->password}}</td> --}}
            {{-- <td><a href="{{url('admin/users/edit/'.$u->id)}}" class="btn btn-danger">Edit</a></td> --}}
            <td><form class="delete-form" action="{{route('deleteuser',$u->id)}}" method="POST">
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
      {{$user->links()}}
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