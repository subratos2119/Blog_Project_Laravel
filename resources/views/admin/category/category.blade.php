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
              <h3 class="box-title">Title</h3>
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
            <form role="form" action="{{ route('category.store') }}" method="post">
              @csrf
              <div class="box-body">
              	<div class="col-lg-6 col-lg-offset-3">
              		<div class="form-group">
                  <label for="name">Category Title</label>
                  <input type="text" class="form-control" id="name" name="name" placeholder="Category Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputSlug1">Category Slug</label>
                  <input type="text" class="form-control" id="exampleInputSlug1" name="slug" placeholder="Category Slug">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <a href="{{ route('category.index') }}" class="btn btn-warning">Back</a>
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