@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Dashboard
       </h1>
      <ol class="breadcrumb">
        <li><a href="{{url('/')}}"><i class="fa fa-dashboard"></i>Home</a></li>
        <li><a href="{{url('admin')}}"><i class="active">Dashboard</a></li>
      </ol>
    </section>
     <!-- Main content -->
    <section class="content">

<div class="row">
 <div class="col-md-12">
          <div class="card">
            <div class="card-header">
              <div class="row">
                    <div class="col-md-8 card_header_title">
                        <h4><i class="fa fa-gg-circle"></i> All User Information</h4>
                    </div>
                    <div class="col-md-4 card_header_btn text-right">
                        <a href="{{url('admin/user/add')}}" class="btn btn-primary card_btn"><i class="fa fa-plus-circle"></i> Add User</a>
                    </div>
                    <div class="clr"></div>
              </div>
            </div>
            <div class="card-body">
              @if(Session::has('success'))
              <script> swal({title: "Suceess!",text: "Suceessfully created user!",icon: "success",timer: 5000});</script>
              @endif

              <table class="table table-bordered table-hover table-striped custom_table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Name</th>
                      <th>Phone</th>
                      <th>Email</th>
                      <th>Designation</th>
                      <th>User Role</th>
                      <th>Photo</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($allUser as $data)
                    <tr>
                      <td>{{$data->name}}</td>
                      <td>----</td>
                      <td>{{$data->email}}</td>
                      <td>??</td>
                      <td>{{$data->userRole->role_name}}</td>
                      <td>.</td>
                      <td>
                          <a href="#"><i class="fa fa-plus-square fa-lg"></i></a>
                          <a href="#"><i class="fa fa-pencil-square fa-lg"></i></a>
                          <a href="#"><i class="fa fa-trash fa-lg"></i></a>
                      </td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
            </div>
            <div class="card-footer">
                <a href="#" class="btn btn-sm btn-primary">Print</a>
                <a href="#" class="btn btn-sm btn-info">Excel</a>
                <a href="#" class="btn btn-sm btn-success">CSV</a>
            </div>
          </div>
        </div>
    </div>
     </section>
    <!-- /.content -->
  </div>
@endsection
