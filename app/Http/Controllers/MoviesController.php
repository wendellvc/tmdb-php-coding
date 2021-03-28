<?php

namespace App\Http\Controllers;

use App\Movie;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

require_once dirname(__DIR__).'/Controllers/tmdb-php-api/tmdb-api.php';

use TMDB;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
     {
        $tmdb = $this->api_settings();

        // get list of popular movies
        $movies = $tmdb->getPopularMovies('sort_by=popularity.desc');

        return view('movies.index', compact('movies'));
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Movie  $movie
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tmdb = $this->api_settings();

        // get movie details by ID
        $movie = $tmdb->getMovie($id);

        // Pass current movie details to view
        return view('movies.show', compact('movie'));
    }

    public function api_settings(){

      // initialize the TMDB class
      $tmdb = new TMDB();
      /*
        Insert API key
        Generate API Key - https://www.themoviedb.org/settings/api
      */
      $tmdb->setAPIKey('719791a81d8142cc0a14f4516a52a59f');

      return $tmdb;
    }

}
