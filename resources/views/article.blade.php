@extends('master')

@section('title')
    article
@endsection

@section('main')
<div class="card w-100 mt-4" style="width: 18rem;">
    <img src="{{asset('storage/'.$article->image)}}" class="card-img-top">

    <div class="card-body text-center">
      <h5 class="card-title">{{$article->titre}}</h5>
      <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->slug}}</h6>
      <p class="card-text">{{$article->content}}</p>

    </div>
  </div>
@endsection
