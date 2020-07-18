@extends('admin.layouts.app')

@section('main-content')

 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Text Editors
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <!-- /.box -->
           <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Update Admin</h3>
            </div>
            <!-- /.box-header -->
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <!-- form start -->
            <form role="form" action="{{ route('user.update',$users->id) }}" method="post">
              @csrf
              {{ method_field('PUT') }}
              <div class="box-body">
                <div class="col-lg-6 col-lg-offset-3">
                  <div class="form-group">
                  <label for="exampleInputName1">User Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="User Name" value="@if (old('name')){{old('name')}}@else{{$users->name}}@endif">
                </div>
                <div class="form-group">
                  <label for="exampleInputEmail2">Email</label>
                  <input type="text" class="form-control" id="exampleInputEmail2" name="email" placeholder="Email" value="@if (old('email')){{old('email')}}@else{{$users->email}}@endif">
                </div>
                <div class="form-group">
                  <label for="Phone">Phone</label>
                  <input type="text" class="form-control" id="Phone" name="phone" placeholder="Phone" value="@if (old('phone')){{old('phone')}}@else{{$users->phone}}@endif">
                </div>
                <div class="form-group">
                  <label for="status">Status</label>
                  <div class="checkbox">
                  <label><input type="checkbox" name="status" @if (old('status') == 1 || $users->status == 1)
                    checked
                  @endif value="1">Status</label>
                </div>
                </div>
                <div class="form-group">
                  <label>Assign Role</label>
                  <div class="row">
                    @foreach($roles as $role)
                    <div class="col-md-3">
                    <div class="checkbox">
                      <label><input type="checkbox" name="role[]" value="{{$role->id}}"
                        @foreach ($users->roles as $user_role)
                          @if ($user_role->id == $role->id)
                            checked
                          @endif
                        @endforeach>{{$role->name}}</label>
                    </div>
                  </div>
                  @endforeach
                  </div>
                  
                </div>
                <div class="form-group">
              <button type="submit" class="btn btn-primary">Submit</button>
              <a href="{{ route('user.index') }}" class="btn btn-warning">Back</a>
                </div>
               </div>
              </div>
              <!-- /.box-body -->
              
            
          </form>
        </div>
          <!-- /.box -->

          
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>

@endsection