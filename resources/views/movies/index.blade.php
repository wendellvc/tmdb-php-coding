
@extends('layout.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12 movie-wrapper">
            <h2>Popular Movies</h2>

            @if( count($movies) > 0 )

            <div class="row">

              @foreach($movies as $idx => $movie)

              <div class="col-xs-6 col-sm-4 col-md-3">
                <div class="card movie">
                  <div class="poster">
                    <a href="{{ route('movies.show', [$movie->getID()]) }}">
                      <img src="https://image.tmdb.org/t/p/w500/{{$movie->getPoster()}}" alt="">
                    </a>
                  </div>
                  <div class="details">
                    <div class="vote-average">
                      <div class="circle">
                        {{$movie->getVoteAverage()}}
                      </div>
                    </div>
                    <h5><a href="{{ route('movies.show', [$movie->getID()]) }}">{{$movie->getTitle()}}</a></h5>
                    <div class="release-date">{{$movie->get('release_date')}}</div>
                  </div>
                </div>
              </div>

              @endforeach

            </div>

            @else

                <div id="notify">
                    <strong>No popular movies as of this time.</strong>
                </div>

            @endif

        </div>
    </div>
</div>

@endsection
