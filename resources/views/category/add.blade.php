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
                <form>
                    <div class="mb-3">
                      <label for="exampleInputEmail1" class="form-label" >Tên danh mục</label>
                      <input type="input" class="form-control" aria-describedby="emailHelp" placeholder="Nhập tên danh mục" required>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1" class="form-label">ID danh mục cha</label>
                        <div class="form-group">
                          <select class="custom-select" required>
                            <option value="">Chọn ID danh mục cha</option>
                            <option value="0">0</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
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
