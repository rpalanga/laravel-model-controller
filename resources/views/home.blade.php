@extends('layout/app')

@section('content')

    <div class="container-fluid">

        <div class="container text-center py-4">
            <h2 class="my-4">Scegli dalla nostra lista</h2>

            <div class="mycard-container row mx-auto gap-5 justify-content-center  ">
                
                @foreach ($movies as $movie)
                <div class="card col-5 ">
                    <img src="..." class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">{{$movie->title}}</h5>
                      <p class="card-text">{{$movie->original_title}}</p>
                      
                    </div>
                  </div>
                    
                @endforeach

            </div>
            

        </div>
    </div>

@endsection