@extends('layouts.admin')
@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Banner Dashboard
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
                        <h4><i class="fa fa-gg-circle"></i> All Banner Information</h4>
                    </div>
                    <div class="col-md-4 card_header_btn text-right">
                        <a href="{{url('admin/banner/add')}}" class="btn btn-primary card_btn"><i class="fa fa-plus-circle"></i> Add Bnaner</a>
                    </div>
                    <div class="clr"></div>
              </div>
            </div>
            <div class="card-body">
              <table class="table table-bordered table-hover table-striped custom_table">
                  <thead class="thead-dark">
                    <tr>
                      <th>Banner Title</th>
                      <th>Subtitle</th>
                      <th>Button</th>
                     
                      <th>Creator</th>
                      <th>Upload</th>
                      <th>Manage</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($all as $data)
                    <tr>
                      <td>{{$data->ban_title}}</td>
                      <td>{{$data->ban_subtitle}}</td>
                      <td>{{$data->ban_btn}}</td>
                      
                      <td>{{$data->creator->name}}</td>
                      <td>{{$data->created_at->format('d-m-Y | h:i:s')}}</td>
                      <td>
                          <a href="{{url('admin/banner/view/'.$data->ban_slug)}}"><i class="fa fa-plus-square fa-lg"></i></a>
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