{{-- @extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
        <div class="col-12">
          @include('partials.errors')
          <h1>Aggiorna {{ $user->name }} {{ $user->lastname }} con Id: {{ $user->id }}</h1>
          <form class="form-group" action="{{ route('users.update', $user->id) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-group">
              <label for="name">Nome</label>
              <input type="text" name="name" class="form-control" placeholder="Inserisci la nome" value="{{ $user->name }}">
            </div>
            <div class="form-group">
              <label for="lastname">Cognome</label>
              <input type="text" name="lastname" class="form-control" placeholder="Inserisci il cognome" value="{{ $user->lastname }}">
            </div>
            <div class="form-group">
              <label for="age">Età</label>
              <input type="number" name="age" class="form-control" placeholder="Inserisci età" value="{{ $user->age }}">
            </div>
            <div class="form-group">
              <label for="cf">CF</label>
              <input type="text" name="cf" class="form-control" placeholder="Inserisci codice fiscale" value="{{ $user->cf }}">
            </div>

            <div class="form-group">
                <input type="submit" class="form-control" value="Salva Utente">
            </div>
          </form>
        </div>
      </div>
    </div>

@endsection --}}
