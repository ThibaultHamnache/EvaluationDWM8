<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Project
  I choose to create a laravel app about series and movies (a mediatheque).


## Fonctionalities and ressources

  - I used a template for my pages by using the @yield, @include, @extends, @section, @endsection.

  ### DATABASE :
   - I created 6 table (series / movies / categories / states / category_movie / category_serie ). The series table contain 
     id, name, nb_seasons, episodes, release_date, state_id, price, stock. The movies table contain id, name, release_date, 
     state_id, price, stock. The categories table contain id, category. The states table contain id, state. category_movie and 
     category_serie are relational table between categories and respectively movies and series.

  ### CRUD :
   - Create : I had to create 2 forms one for series and one for movies because they don't have the same table and the same  
     informations, the table series is more completed than movies. I use the function insertOne.
   - Read : I created 2 view : serie.blade.php and movie.blade.php. I used an orderBy name ASC for the read.
   - Update : I create 2 view : update_movie.blade.php and update_serie.blade.php. I used the id to update. I created 2 Routes 
     by pages. I use the function updateOne and updateOneAction.
   - Delete : I created 1 Routes by pages. I use the function deleteOne.
   - I first create the READ then the CREATE
   - I used Laravel Collective and the language blade for my forms in create and update.

  ### PAGINATION :
  - I use a pagination system with 5 results by pages (define in SerieController and MovieController) that i found on W3S 
    website and that I adjusted to my site.

  ### SEARCHBAR :
  - I also found a SearchBar code on W3S but I had some trouble to adjust this one. And it's one of my remaining problem. I had 
    to create 2 function for the search one for each page that i used on a script.js. In the script my variables are table, td 
    etc because I used a table in my views.

  ### BOOTSTRAP :
    I tried to use only BOOTSTRAP and no flex-box to get a responsive app.

  ### UX DESIGN :
    I tried to stay simple in my css and the colors to make it easy to look.

## Difficulties and remaining problem(s)
  Difficulties :
    - It was difficult to have 2 different CRUD to do because when I changed something in one form I had to changed it in 3 other views
  Remaining problem :
    - SearchBar is effective page by page, I tried to figure this out but no way to find where the problem come from. It still                   
      work in one page of the table.

## What I'm proud of
  My pages Serie and Movie with the table order by name ASC and the home page because I'm a huge fan of GOT
