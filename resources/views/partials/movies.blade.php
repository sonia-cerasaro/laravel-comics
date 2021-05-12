@extends('layouts.app')

@section('main')
<table>
  <thead>
    <tr>
      <th>
        titolo
      </th>
    </tr>
  </thead>
  <tbody>
    
    @foreach ($movies as $movie)
    <tr>
      <td>{{ $movie['title'] }}</td>
    </tr>
    @endforeach

  </tbody>
</table>

@endsection
