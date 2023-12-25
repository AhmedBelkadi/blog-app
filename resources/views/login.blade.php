@extends('master')

@section('title')
    login
@endsection

@section('main')



    <form class="mt-5" method="POST" action="{{route("login")}}">
        @if( session()->has("error") )
            <div class="alert alert-danger" role="alert">
                {{session()->get("error")}}
            </div>
        @endif
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Email</label>
            <input type="email" class="form-control"  value="{{old("email")}}" name="email"  aria-describedby="emailHelp">
        </div>
        @error('email')
        <span class="text-danger">
          {{$message}}
        </span>
        @enderror
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Password</label>
            <input type="password" class="form-control"  value="{{old("password")}}" name="password"  >
        </div>
        @error('password')
        <span class="text-danger">
      {{$message}}
    </span>
        @enderror


        <button type="submit" class="btn btn-primary w-100 ">login</button>
    </form>

@endsection

