@extends('layouts.admin')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      @include('partials.content-header', ['name' => 'Thêm', 'key' => 'Sản phẩm'])      
  
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-10">
                <form action="{{ route('category.store') }}" method="POST">
                  @csrf
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Tên danh mục</label>
                      <input type="text" 
                      class="form-control" 
                      name="name" 
                      placeholder="Nhập tên danh mục" 
                      required>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">ID danh mục cha</label>
                        <div class="form-group">
                          <select class="custom-select" name="parent_id" required>
                            <option value="0">Chọn ID danh mục cha</option>
                            {!! $htmlOption !!}
                          </select>
                          <div class="invalid-feedback">Example invalid custom select feedback</div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Hoàn tất</button>
                  </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  

  
@endsection
