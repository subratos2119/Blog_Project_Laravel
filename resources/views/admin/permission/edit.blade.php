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
              <h3 class="box-title">Edit Permission</h3>
            </div>
            <!-- /.box-header -->
            @include('includes.messege')
            <!-- form start -->
            <form role="form" action="{{ route('permission.update',$permissions->id) }}" method="post">
              @csrf
              @method('PUT')
              <div class="box-body">
              	<div class="col-lg-6 col-lg-offset-3">
              		<div class="form-group">
                  <label for="exampleInputName1">Tag Title</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Tag Title" value="{{$permissions->name}}">
                </div>
                <div class="form-group">
              <button type="submit" class="btn btn-primary">Update</button>
              <a href="{{ route('permission.index') }}" class="btn btn-warning">Back</a>
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