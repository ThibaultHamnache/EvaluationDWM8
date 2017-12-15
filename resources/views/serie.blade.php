@extends('layouts.base')

@section('title', 'Serie')
@section('main')
  <div class="container">
    <br>
    <h1>Our Series</h1>
    <br>
    <button class="btn btn-info pull-left" type="button" data-toggle="collapse" data-target="#collapseSearch" aria-expanded="false" aria-controls="collapseSearch">
      <i class="fa fa-search fa-lg" aria-hidden="true"></i> Search
    </button>

      <form action="/create_serie" method="GET" class="btn pull-right">
        <button type="submit" class="btn btn-outline-info delete-btn">
          <i class="fa fa-plus" aria-hidden="true"></i> Add a new serie
        </button>
      </form>

    <div class="collapse" id="collapseSearch">
      <div class="card card-body">
        <input type="text" id="myInput" onkeyup="searchFunction()" placeholder="Search for series">
      </div>
    </div>
    <table id="myTable" class="table table-responsive table-striped">
      <thead>
        <tr>
          <th scope="col">Name</th>
          <th scope="col">Seasons</th>
          <th scope="col">Episodes</th>
          <th scope="col">Categories</th>
          <th scope="col">Release Date</th>
          <th scope="col">State</th>
          <th scope="col">Price</th>
          <th scope="col">Stocks</th>
          <th scope="col">Delete</th>
          <th scope="col">Update</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($series->sortBy('name') as $serie)
          <tr>
            <td class="align-middle">{{ $serie->name }}</td>
            <td class="align-middle">{{ $serie->nb_seasons }}</td>
            <td class="align-middle">{{ $serie->episodes }}</td>
            @if ($serie->categories)
              <td class="align-middle">
                @foreach ($serie->categories as $category)
                  {{{ $category->category }}}
                @endforeach
              </td>
            @else
              <td class="align-middle">Inconnu</td>
            @endif
            <td class="align-middle">{{ $serie->release_date }}</td>
            @if ($serie->state)
              <td class="align-middle">{{ $serie->state->state }}</td>
            @else
              <td class="align-middle">Inconnu</td>
            @endif
            <td class="align-middle">{{ $serie->price }}$</td>
            <td class="align-middle">{{ $serie->stock }}</td>

            <td class="align-middle">
              <form action="/serie/delete/{{$serie->id}}" method="GET">
                {{ csrf_field() }}
                <button type="submit" class="btn btn-outline-danger delete-btn">
                  <i class="fa fa-times" aria-hidden="true"></i>
                </button>
              </form>
            </td>
            <td class="align-middle">
              <form action="/serie/update_serie/{{$serie->id}}" method="GET">
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
    {!! $series->render() !!}
  </div>
@endsection
