@extends('master')

@section('title')
    home
@endsection

@section('main')

<div class="row">
            <h1 class="text-center" >articles</h1>
                @auth()
                    <a class="btn btn-primary" href="{{ route("createArticle") }}" >ajouter article</a>
                @endauth
            <div class="col-9">

                @foreach ($articles as $article)
{{--                    {{dd($article->image)}}--}}


                  <div class="card w-100 my-4" style="width: 18rem;">
                    <img src="{{asset('storage/'.$article->image)}}" class="card-img-top">
                    <div class="card-body ">

                        <h5 class="card-title">{{$article->titre}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->slug}}</h6>
                        <p class="card-text">
                              {{$article->content}}...
                        </p>
                        <a class="link-opacity-15" href="{{route("article", $article->id  )}}">lire plus</a>
{{--                        <a class="btn btn-success" href="{{route("articles.edit", $article->id  )}}">update</a>--}}
{{--                        <form method="POST" action="{{route("articles.destroy",$article->id)}}" >--}}
{{--                            @csrf--}}
{{--                            @method("DELETE")--}}
{{--                            --}}{{-- <a type="submit" class="btn btn-danger" value="supprimer">--}}
{{--                                <a href=""></a> --}}
{{--                                --}}{{-- <input type="submit" class="btn btn-danger" value="effacer"> --}}
{{--                                <button type="submit" class="btn btn-danger" >efa</button>--}}

{{--                        </form>--}}
                    </div>
                </div>

                @endforeach
                <div class="d-block" >
                    {{$articles->links()}}
                </div>
            </div>



            <div class="col-3 ">
                <h1 class="text-center" >last articles</h1>
                @foreach ($lastFourArticles as $article)


                  <div class="card w-100 my-4" style="width: 18rem;">
                      <img src="{{asset('storage/'.$article->image)}}" class="card-img-top">
                      <div class="card-body ">
                        <h5 class="card-title">{{$article->titre}}</h5>
                        <h6 class="card-subtitle mb-2 text-body-secondary">{{$article->slug}}</h6>
                        <p class="card-text">
                              {{$article->content}}...
                        </p>
                        <a class="link-opacity-15" href="{{route("article", $article->id  )}}">lire plus</a>
                    </div>
                </div>

                @endforeach
        </div>
    </div>

</div>






@endsection
