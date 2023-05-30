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
                        <h4><i class="fa fa-gg-circle"></i> View Banner Information</h4>
                    </div>
                    <div class="col-md-4 card_header_btn text-right">
                        <a href="{{url('admin/banner')}}" class="btn btn-primary card_btn"><i class="fa fa-th"></i> All Bnaner</a>
                    </div>
                    <div class="clr"></div>
              </div>
            </div>
           <div class="card-body">
              <div class="row">
                  <div class="col-md-1"></div>
                  <div class="col-md-10">
                    <table class="table table-bordered table-striped table-hover view_table">
                        <tr>
                            <td>Banner Title</td>
                            <td>:</td>
                            <td>{{$data->ban_title}}</td>
                        </tr>
                        <tr>
                            <td>Banner Subtitle</td>
                            <td>:</td>
                            <td>{{$data->ban_subtitle}}</td>
                        </tr>
                        <tr>
                            <td>Banner Button</td>
                            <td>:</td>
                            <td>{{$data->ban_btn}}</td>
                        </tr>
                        <tr>
                            <td>Banner URL</td>
                            <td>:</td>
                            <td>{{$data->ban_url}}</td>
                        </tr>
                        <tr>
                            <td>Banner Creator</td>
                            <td>:</td>
                            <td>{{$data->creator->name}}</td>
                        </tr>
                    </table>
                  </div>
                  <div class="col-md-1"></div>
              </div>
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