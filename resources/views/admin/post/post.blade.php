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
            <!-- /.errors messege -->
            @include('includes.messege')
            <!-- form start -->
            <form role="form" action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
              @csrf
              <div class="box-body">
              	<div class="col-lg-6">
              		<div class="form-group">
                  <label for="exampleInputTitle1">Post Title</label>
                  <input type="text" class="form-control" id="exampleInputTitle1" name="title" placeholder="Title">
                </div>
                <div class="form-group">
                  <label for="exampleInputSubtitle1">Post SubTitle</label>
                  <input type="text" class="form-control" id="exampleInputSubtitle1" name="subtitle" placeholder="SubTitle">
                </div>
                <div class="form-group">
                  <label for="exampleInputSlug1">Post Slug</label>
                  <input type="text" class="form-control" id="exampleInputSlug1" name="slug" placeholder="Slug">
                </div>
                
                <div class="checkbox">
                  <label>
                    <input type="checkbox" name="status" value="1"> Publish
                  </label>
                </div>
				</div>
				<div class="col-lg-6">
					<div class="form-group">
                  <label for="image">File input</label>
                  <input type="file" name="image" id="image">
                </div>
                <div class="form-group">
                <label>Select Tags</label>
                <br>
                <select class="selectpicker" data-style="btn-danger" style="width: 100%" name="tags[]">
                  @foreach($tags as $tag)
                    <option value="{{$tag->id}}">{{ $tag->name }}</option>
                  @endforeach
                </select>
              </div>
              <div class="form-group">
                <label>Select Category</label>
                <br>
                <select class="selectpicker" data-style="btn-danger" style="width: 100%" name="categories[]">
                  @foreach($categories as $category)
                    <option value="{{$category->id}}">{{ $category->name }}</option>
                  @endforeach
                </select>
              </div>
				     </div>
           </div>
              <!-- /.box-body -->
              <div class="box">
            <div class="box-header">
              <h3 class="box-title">Write Post Body Here
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
                <textarea name="body" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" id="editor1"></textarea>
            </div>
          </div>

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a href="{{ route('post.index') }}" class="btn btn-warning">Back</a>
              </div>
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

@section('footerSection')

<script src="{{ asset('public/admin/ckeditor/ckeditor.js') }}"></script>

@endsection