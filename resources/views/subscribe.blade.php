@extends('master')

@section('title')
    create user
@endsection

@section('main')



<form class="mt-5" method="POST" action="{{route("subscribe")}}" enctype="multipart/form-data" >
    @csrf
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">name</label>
      <input type="text" class="form-control"  value="{{old("titre")}}" name="name"  aria-describedby="emailHelp">
    </div>
    @error('name')
        <span class="text-danger">
          {{$message}}
        </span>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">email</label>
      <input type="eamil" class="form-control"  value="{{old("slug")}}" name="email"  aria-describedby="emailHelp">
    </div>
    @error('email')
    <span class="text-danger">
      {{$message}}
    </span>
    @enderror
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">password</label>
      <input type="password" class="form-control"  value="{{old("content")}}" name="password"  aria-describedby="emailHelp">
      {{-- <textarea name="content" class="form-control"   cols="30" rows="10">{{old("content")}}</textarea> --}}
      @error('password')
      <span class="text-danger">
        {{$message}}
      </span>
      @enderror
    </div>


    <button type="submit" class="btn btn-primary w-100 ">subscribe</button>
  </form>

@endsection
