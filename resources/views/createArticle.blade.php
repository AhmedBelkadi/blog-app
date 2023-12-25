@extends('master')

@section('title')
    create article
@endsection

@section('main')



<form class="mt-5" method="POST" action="{{route("storeArticle")}}" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">titre</label>
      <input type="text" class="form-control"  value="{{old("titre")}}" name="titre"  aria-describedby="emailHelp">
    </div>
    @error('titre')
        <span class="text-danger">
          {{$message}}
        </span>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">slug</label>
      <input type="text" class="form-control"  value="{{old("slug")}}" name="slug"  aria-describedby="emailHelp">
    </div>
    @error('slug')
    <span class="text-danger">
      {{$message}}
    </span>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">content</label>
      {{-- <input type="text" class="form-control"  value="{{old("content")}}" name="content"  aria-describedby="emailHelp"> --}}
      <textarea  name="content" class="form-control"   cols="30" rows="10">{{old("content")}}</textarea>
      @error('content')
      <span class="text-danger">
        {{$message}}
      </span>
      @enderror
      </div>
    <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">image</label>
        <input type="file" class="form-control"  value="{{old("image")}}" name="image"  >
        @error('image')
        <span class="text-danger">
        {{$message}}
      </span>
        @enderror
    </div>

    <button type="submit" class="btn btn-primary w-100 ">Ajouter</button>
  </form>

@endsection
