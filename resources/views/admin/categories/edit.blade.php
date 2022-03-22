@extends('admin.layoutAdmin.main')

@section('title', 'Sửa danh mục')

@section('chart')
<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" value="{{$cate->name}}" name="name" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('name')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      {{-- <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
        <input type="file" name="images" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div> --}}
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Decription (Mô tả)</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$cate->description}}</textarea>
      </div>
      @error('description')
        <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <button type="SUBMIT" class="btn btn-primary">Update</button>
</form>
@endsection