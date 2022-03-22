@extends('admin.layoutAdmin.main')

@section('title', 'Sửa sản phẩm')

@section('chart')
<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" value="{{$pro->name}}" name="name" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('name')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ảnh sản phẩm</label>
        <input type="text" class="form-control" value="{{$pro->image}}" name="image" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('image')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Danh mục sản phẩm</label>
        <input type="text" class="form-control" value="{{$pro->category}}" name="category" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('category')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Số lượng sản phẩm</label>
        <input type="number" class="form-control" value="{{$pro->sl}}" name="sl" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('sl')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả sản phẩm</label>
        <textarea name="status" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$pro->status}}</textarea>
      </div>
      @error('status')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <button type="submit" class="btn btn-primary">Update</button>
</form>
@endsection