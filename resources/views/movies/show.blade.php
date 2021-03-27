@section('title', $movie->getTitle())
@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
          <div class="row movie_details">
            <div class="col-md-4">
              <div class="poster_wrapper">
                <img src="https://image.tmdb.org/t/p/w500/{{$movie->getPoster()}}" alt="">
              </div>
            </div>
            <div class="col-md-8">
              <div class="movie_details_wrapper">
                <h2>{{$movie->getTitle()}}</h2>

                <h6>OVERVIEW</h6>
                <p>{{$movie->get('overview')}}</p>
                <div class="vote-average">
                  <div class="vote-label">RATING</div>
                  <div class="circle">
                    {{$movie->getVoteAverage()}}
                  </div>
                </div>
                <div class="release-date">RELEASE DATE: <span>{{$movie->get('release_date')}}</span></div>
              </div>
            </div>

          </div>

            <?php // echo '<pre>'. print_r($movie) .'</pre>' ?>
        </div>
    </div>
</div>

@endsection
