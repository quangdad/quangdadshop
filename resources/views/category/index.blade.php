@extends('layouts.admin')
@section('title')
    <title>Trang chủ</title>
@endsection
@section('content')
<body class="hold-transition sidebar-mini">
  <div class="wrapper">
  
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      @include('partials.content-header', ['name' => 'Danh mục sản phẩm', 'key' => 'Sản phẩm'])      
  
      <div class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-11 ">
              <a href="{{ route('categories.create') }}" class="btn btn-success float-right m-2">Add</a>
            </div>
            <table class="table table-light table-hover">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  

  
@endsection
