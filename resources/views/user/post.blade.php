@extends('user/app')

 @section('bg-img',asset('public/user/img/post-bg.jpg'))
 @section('title',$post->title)
 @section('sub-heading',$post->subtitle)
 
@section('main-content')

  <!-- Post Content -->
  <article>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <small>Created At {{ $post->created_at->diffForHumans() }}</small><br>
          @foreach($post->categories as $category)
          <small class="pull-right">
            {{ $category->name }}
          </small>
          @endforeach
            {!! htmlspecialchars_decode($post->body) !!}

            {{-- tag clouds --}}
            @foreach($post->tags as $tag)
          <small class="pull-right" style="margin-right: 20px;border-radius: 5px;">
            {{ $tag->name }}
          </small>
          @endforeach
        </div>
      </div>
    </div>
  </article>

  <hr>

@endsection