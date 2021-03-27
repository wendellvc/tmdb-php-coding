## PHP Coding Challenge
This is a laravel web application which uses the from themoviedb API that displays the following:
- List of popular movies which return at least the title, vote average, poster, and release date
- Show the movie details by ID which return at least the title, overview, poster, vote average, and release date

**themoviedb API**
https://www.themoviedb.org/documentation/api

**TMDB Library**
https://github.com/deso85/TMDB-PHP-API

**TMDB PHP API Documentation**
https://code.octal.es/php/tmdb-api/index.html

**UI/Display**
Utilized the bootstrap framework
with minimal responsiveness

**Movies Controller**
- The functionality normally revolves within the Movies controller
- where the library was included/require

**Modified/added files with Laravel**

**- .env **

**- config/app.php **
    to update the app name
    
**- routes/web.php**
    web routes
    
**- public/css**

**- public/js**

**- resource/views**

    **/views/layout**, holds the site view layout blade template
    **/views/movies**, holds the display/view when displaying movies
    
**- app/Http/Controllers**

    **MoviesController.php**
    **tmdb-php-api/tmdb-api.php**
    
**TMDB API**
**https://www.themoviedb.org/settings/api**
where I obtain the API key for this laravel application.
