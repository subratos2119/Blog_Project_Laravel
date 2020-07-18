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
            <h3 class="box-title">Roles</h3>
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
          <form role="form" action="{{ route('role.store') }}" method="post">
            @csrf
            <div class="box-body">
            	<div class="col-lg-6 col-lg-offset-3">
            		<div class="form-group">
                  <label for="exampleInputRoleName1">Role Title</label>
                  <input type="text" class="form-control" id="exampleInputRoleName1" name="name" placeholder="Role Title">
                </div>
                <div class="row">
                <div class="col-md-4">
                  <label for="name">Post Permission</label>
                  @foreach ($permissions as $permission)
                    @if ($permission->for == 'post')
                      <div class="checkbox">
                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                      </div>
                    @endif
                  @endforeach
                </div>
                <div class="col-md-4">
                  <label for="name">User Permission</label>
                  @foreach ($permissions as $permission)
                    @if ($permission->for == 'user')
                      <div class="checkbox">
                        <label><input type="checkbox" name="role[]" value="{{$permission->id}}">{{$permission->name}}</label>
                      </div>
                    @endif
                  @endforeach
                </div>
                <div class="col-md-4">
                  <label for="name">Other Permission</label>
                  @foreach ($permissions as $permission)
                    @if ($permission->for == 'other')
                      <div class="checkbox">
                        <label><input type="checkbox" name="role[]" value="{{$permission->id}}">{{$permission->name}}</label>
                      </div>
                    @endif
                  @endforeach
                </div>
              </div>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary">Submit</button>
                  <a href="{{ route('role.index') }}" class="btn btn-warning">Back</a>
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