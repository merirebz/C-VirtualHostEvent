@extends('events.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Event Page</div>
  <div class="card-body">
        <div class="card-body">
        <h5 class="card-title">Eventname : {{ $events->Eventname }}</h5>
        <p class="card-text">Organisatorname : {{ $events->Organisatorname }}</p>
        <p class="card-text">type : {{ $events->type }}</p>
        <p class="card-text">heureD : {{ $events->heureD }}</p>
        <p class="card-text">heureF : {{ $events->heureF }}</p>
        <p class="card-text">dateDebut : {{ $events->dateDebut }}</p>
        <p class="card-text">dateFin : {{ $events->dateFin }}</p>
        <p class="card-text">payement : {{ $events->payement }}</p>
        <p class="card-text">linkEvent : {{ $events->linkEvent }}</p>
        <p class="card-text">details : {{ $events->details }}</p>
        <p class="card-text">details : {{ $events->src }}</p>
       
  </div>
    </hr>
  </div>
</div>