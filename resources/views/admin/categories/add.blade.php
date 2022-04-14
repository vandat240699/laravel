@extends('admin.layoutAdmin.main')

@section('title', 'Thêm danh mục')

@section('chart')
<form action="" method="post">
    @csrf
    <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" placeholder="">
      </div>
      @error('name')
          <div class="alert alert-danger">Bạn chưa nhập tên danh mục</div>
      @enderror
      {{-- <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
        <input type="file" name="images" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div> --}}
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Decription (Mô tả)</label>
        <textarea name="description" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
      </div>
      @error('description')
      <div class="alert alert-danger">Bạ chưa nhập mô tả danh mục</div>
  @enderror
      <button type="SUBMIT" class="btn btn-primary">Thêm mới</button>
</form>
@endsection