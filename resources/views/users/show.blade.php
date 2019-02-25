@extends('layouts.app')

@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Utente: {{ $user->name }} {{ $user->lastname }}</h1>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Cognome</th>
              <th>Età</th>
              <th>Codice Fiscale</th>
            </tr>
          </thead>
          <tbody>
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->cf }}</td>
              </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
@endsection
