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
            <form method="post" action="{{url('admin/user/submit')}}">
              @csrf
              <div class="card-header">
                <div class="row">
                      <div class="col-md-8 card_header_title">
                          <h4><i class="fa fa-gg-circle"></i> User Registration</h4>
                      </div>
                      <div class="col-md-4 card_header_btn text-right">
                          <a href="{{url('admin/user')}}" class="btn btn-primary card_btn"><i class="fa fa-th"></i> All User</a>
                      </div>
                      <div class="clr"></div>
                </div>
              </div>
              <div class="card-body">

                @if(Session::has('error'))
                <script> swal({title: "Opps!",text: "Please try again!",icon: "error",});</script>
                @endif

                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Name:</label>
                  <div class="col-sm-7">
                    <input type="text" class="form-control form_control" name="name" value="{{old('name')}}">

                    <!-- @error('name')
                    <span class="invalide feedback"role="alart">
                      <strong class="error">{{ $message }}</strong>
                    </span>
                    @enderror -->
                    @if($errors->has('name'))
                    <span class="invalide feedback"role="alart">
                      <strong>{{$errors->first('name')}}</strong>
                    </span>
                    @endif

                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Email Address:</label>
                  <div class="col-sm-7">
                    <input type="email" class="form-control form_control" name="email" value="{{old('email')}}">
                    <!-- @error('email')
                    <span class="invalide feedback"role="alart">
                      <strong class="error">{{ $message }}</strong>
                    </span>
                    @enderror -->

                    @if($errors->has('email'))
                    <span class="invalide feedback"role="alart">
                      <strong>{{$errors->first('email')}}</strong>
                    </span>
                    @endif

                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Password:</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control form_control" name="password">

                    <!-- @error('password')
                    <span class="invalide feedback"role="alart">
                      <strong class="error">{{ $message }}</strong>
                    </span>
                    @enderror -->
                    @if($errors->has('password'))
                    <span class="invalide feedback"role="alart">
                      <strong>{{$errors->first('password')}}</strong>
                    </span>
                    @endif



                  </div>
                </div>
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">Confirm-Password:</label>
                  <div class="col-sm-7">
                    <input type="password" class="form-control form_control" name="password_confirmation">
                  </div>
                </div>
                @php
                $allRole=App\Models\Role::where('role_status',1)->orderBy('role_id','ASC')->get();
                @endphp
                <div class="form-group row custom_form_group">
                  <label class="col-sm-3 col-form-label col_form_label">User Role:</label>
                <div class="col-sm-4">
                      <select class="form-control form_control" name="role_id">
                        <option value="">Select User Role</option>
                        @foreach($allRole as $urole)
                        <option value="{{$urole->role_id}}">{{$urole->role_name}}</option>
                        @endforeach
                      </select>

                    <!-- @error('password')
                    <span class="invalide feedback"role="alart">
                      <strong class="error">{{ $message }}</strong>
                    </span>
                    @enderror -->
                    @if($errors->has('role'))
                    <span class="invalide feedback"role="alart">
                      <strong>{{$errors->first('role')}}</strong>
                    </span>
                    @endif



                  </div>
                </div>


              </div>
              <div class="card-footer text-center card_footer_btn">
                  <button type="submit" class="btn btn-primary">REGISTRATION</button>
              </div>
            </form>
          </div>
        </div>
    </div>
</section>
    <!-- /.content -->
  </div>
@endsection
