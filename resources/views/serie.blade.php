@extends('layouts.base')

@section('title', 'Serie')
@section('main')
  <h1>Our Series</h1>


  <form action="/create_serie" method="GET" class="btn pull-top-right">
    <button type="submit" class="btn btn-outline-info delete-btn">
      Add a new serie
    </button>
  </form>
  <table class="table table-responsive">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Seasons</th>
        <th scope="col">Episodes</th>
        <th scope="col">Categories</th>
        <th scope="col">Release Date</th>
        <th scope="col">Price</th>
        <th scope="col">Stocks</th>
        <th scope="col">Delete</th>
        <th scope="col">Update</th>


      </tr>
    </thead>
    <tbody>
      @foreach ($series->sortBy('name') as $serie)
        <tr>
          <td>{{ $serie->name }}</td>
          <td>{{ $serie->nb_seasons }}</td>
          <td>{{ $serie->episodes }}</td>
          @if ($serie->categories)
            <td>
              @foreach ($serie->categories as $category)
                {{{ $category->category }}}
              @endforeach
            </td>
          @else
            <td>Inconnu</td>
          @endif
          <td>{{ $serie->release_date }}</td>
          <td>{{ $serie->price }}</td>
          <td>{{ $serie->stock }}</td>

          <td>
            <form action="/serie/delete/{{$serie->id}}" method="GET">
              {{ csrf_field() }}
              <button type="submit" class="btn btn-outline-danger delete-btn">
                <i class="fa fa-times" aria-hidden="true"></i>
              </button>
            </form>
          </td>
          <td>
            <form action="/serie/update/{{$serie->id}}" method="GET">
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

@endsection
