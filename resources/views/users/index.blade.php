@extends('layouts.app')


@section('content')
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1>Tutti gli Utenti</h1>

        {{ $users->links() }}

        <a href="{{ route('users.create')}}" class="btn btn-primary">Aggiungi nuovo utente</a>
        <table class="table">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nome</th>
              <th>Cognome</th>
              <th>Età</th>
              <th>Codice Fiscale</th>
              <th>Visualizza</th>
              <th>Aggiorna</th>
              <th>Elimina</th>
            </tr>
          </thead>
          <tbody>

            @foreach ($users as $user)
              <tr>
                <td>{{ $user->id }}</td>
                <td>{{ $user->name }}</td>
                <td>{{ $user->lastname }}</td>
                <td>{{ $user->age }}</td>
                <td>{{ $user->cf }}</td>
                <td>
                  <a href="{{ route('users.show', $user->id) }}" class="btn btn-primary">Visualizza</a>
                </td>
                <td>
                  <a href="{{ route('users.edit', $user->id) }}" class="btn btn-success">Aggiorna</a>
                </td>
                <td>
                  <form action="{{ route('users.destroy', $user->id) }}" method="post">
                    @method('DELETE')
                    @csrf
                    <input class="btn btn-danger" type="submit" value="Cancella">
                  </form>
                </td>
              </tr>
            @endforeach
          </tbody>
        </table>

        {{ $users->links() }}

      </div>
    </div>
  </div>
@endsection
