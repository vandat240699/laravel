@extends('admin.layoutAdmin.main')

@section('title', 'Thêm sản phẩm')

@section('chart')
<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên sản phẩm</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('name')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Ảnh sản phẩm</label>
        <input type="file" class="form-control" name="image" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('image')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Danh mục sản phẩm</label>
        <select name="category" id="">
          @foreach($category as $cate)
            <option value="">{{$cate->name}}</option>
          @endforeach
        </select>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Số lượng sản phẩm</label>
        <input type="number" class="form-control" name="sl" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('sl')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Mô tả sản phẩm</label>
        <textarea name="status" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      @error('status')
          <div class="alert alert-danger">{{$message}}</div>
      @enderror
      <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>
@endsection