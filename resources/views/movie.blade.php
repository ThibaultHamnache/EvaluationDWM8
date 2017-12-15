@extends('layouts.base')

@section('title', 'movie')
@section('main')
  <div class="container">
    <br>
    <h1>Our Movies</h1>
    <br>
    <form action="/create_movie" method="GET" class="btn pull-right">
      <button type="submit" class="btn btn-outline-info delete-btn">
        <i class="fa fa-plus" aria-hidden="true"></i> Add a new movie
      </button>
    </form>
    <table class="table table-responsive table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Categories</th>
          <th scope="col">Release Date</th>
          <th scope="col">Price</th>
          <th scope="col">Stocks</th>
          <th scope="col">Delete</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($movies->sortBy('name') as $movie)
          <tr>
            <td class="align-middle">{{ $movie->name }}</td>
            @if ($movie->categories)
              <td class="align-middle">
                @foreach ($movie->categories as $category)
                  {{{ $category->category }}}
                @endforeach
              </td>
            @else
              <td class="align-middle">Inconnu</td>
            @endif
            <td class="align-middle">{{ $movie->release_date }}</td>
            <td class="align-middle">{{ $movie->price }}$</td>
            <td class="align-middle">{{ $movie->stock }}</td>
            <td class="align-middle">
              <form action="/movie/delete/{{$movie->id}}" method="GET">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-outline-danger delete-btn">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </button>
              </form>
            </td>
            <td class="align-middle">
              <form action="/movie/update_movie/{{$movie->id}}" method="GET">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-outline-info delete-btn">
                  <i class="fa fa-pencil" aria-hidden="true"></i>
                </button>
              </form>
            </td>
          </tr>
        @endforeach
      </tbody>
    </table>
    {!! $movies->render() !!}
  </div>
@endsection
