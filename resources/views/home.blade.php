@extends('layout/app')

@section('content')

    <div class="container-fluid">

        <div class="container text-center py-4">
            {{-- <h2 class="my-4 display-3 fw-bolder text-success-emphasis ">Scegli dalla nostra lista</h2>
             --}}
             <div class="lightning py-4 w-75 mx-auto">
                <div class="noisy">
                  <span> for you</span>
                  the
                </div>
                <div class="noisy">
                  movie
                  <span>with Love by Roberto</span>
                </div>
              </div>
            
            <div class="mycard-container row mx-auto gap-5 justify-content-center  ">
                
                @foreach ($movies as $movie)
                <div class="card col-5 p-0  shadow  border-0 ">
                    <img src="{{$movie->poster}}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h3 class="card-title fw-bolder ">{{$movie->title}}</h3>
                      <p class="card-text fw-bold ">{{$movie->original_title}}</p>
                      <p class="card-text fw-light">{{$movie->nationality}}</p>
                      <p class="card-text fw-lighter ">{{$movie->vote}}</p>


                      
                    </div>
                  </div>
                    
                @endforeach

            </div>
            

        </div>
    </div>

@endsection