@extends('user/app')

 @section('bg-img', asset('public/user/img/'.$post->image))
 @section('head')

 <link rel="stylesheet" type="text/css" href="{{ asset('public/user/css/prism.css') }}">

 @endsection

 @section('title',$post->title)
 @section('sub-heading',$post->subTitle)
 
@section('main-content')

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created At {{ $post->created_at->diffForHumans() }}</small><br>
          @foreach($post->categories as $category)
          <small class="pull-right">
            <a href="">{{ $category->name }}</a>
          </small>
          @endforeach
            {!! htmlspecialchars_decode($post->body) !!}

            <h3>Tag Clouds</h3>
            @foreach($post->tags as $tag)
          <small class="pull-left" style="margin-right: 20px;border-radius: 5px;border: 1px solid gray;padding: 5px;">
            <a href="">{{ $tag->name }}</a>
          </small>
          @endforeach
        </div>
      </div>
    </div>
  </article>

  <hr>

@endsection

 @section('head')
 
 <script src="{{ asset('public/user/js/prism.js') }}"></script>

 @endsection
