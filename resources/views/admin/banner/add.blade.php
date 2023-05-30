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
            <form method="POST" action="{{url('admin/banner/submit')}}">
              @csrf
              <div class="card-header">
                <div class="row">
                      <div class="col-md-8 card_header_title">
                          <h4><i class="fa fa-gg-circle"></i> New Create Banner</h4>
                      </div>
                      <div class="col-md-4 card_header_btn text-right">
                          <a href="{{url('admin/banner')}}" class="btn btn-primary card_btn"><i class="fa fa-th"></i> All Banner</a>
                      </div>
                      <div class="clr"></div>
                </div>
              </div>
              <div class="card-body">
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Banner Title:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="title">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Banner Subtitle:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="subtitle">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Button:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="btn">
                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Button Url:</label>
                  <div class="col-sm-7">
                    <input type="url" class="form-control form_control" name="url">
                  </div>
                </div>
              </div>
              <div class="card-footer text-center card_footer_btn">
                  <button type="submit" class="btn btn-primary">UPLOAD</button>
              </div>
            </form>
          </div>
        </div>
    </div>






    </section>
    <!-- /.content -->
  </div>
@endsection