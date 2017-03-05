@extends('layouts.app')
@section('content')
  <h1><i class="fa fa-user"></i> Parrainages pour {{$prenom}} {{ $nom }} </h1>
  <hr>
    @if (count($parrains) == 0)
    <div class="alert alert-warning">
      <i class="fa fa-warning"></i> Aucun parrainage pour le moment
    </div>
    @else
    <ul class="list-group">
      @foreach ($parrains as $parrain)
        <li class="list-group-item">
          <i class="fa fa-user-o fa-fw"></i>
          {{ $parrain->civilite }}. {{ $parrain->nom }} {{ $parrain->prenom }}
          - {{ $parrain->mandat }} - {{ $parrain->departement }} 
        </li>
      @endforeach
    </ul>
    @endif
@endsection
