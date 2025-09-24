@extends('events.layout')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edit Event</div>
  <div class="card-body">
       
      <form action="{{ url('evenement/' .$events->idE) }}" method="post">
        {!! csrf_field() !!}
        @method("PATCH")
        <input type="hidden" name="idE" id="idE" value="{{$events->idE}}" id="idE" />
        <label>Eventname</label></br>
        <input type="text" name="Eventname" id="Eventname" value="{{$events->Eventname}}" class="form-control"></br>
        <label>Organisatorname</label></br>
        <input type="text" name="Organisatorname" id="Organisatorname" value="{{$events->Organisatorname}}" class="form-control"></br>
        <label>heureD</label></br>
        <input type="time" name="heureD" id="heureD" value="{{$events->heureD}}" class="form-control"></br>
        <label>heureF</label></br>
        <input type="time" name="heureF" id="heureF" value="{{$events->heureF}}" class="form-control"></br>
        <label>dateDebut</label></br>
        <input type="date" name="dateDebut" id="dateDebut" value="{{$events->dateDebut}}" class="form-control"></br>
        <label>dateFin</label></br>
        <input type="date" name="dateFin" id="dateFin" value="{{$events->dateFin}}" class="form-control"></br>
        <label>payement</label></br>
        <input type="text" name="payement" id="payement" value="{{$events->payement}}" class="form-control"></br>
        <label>linkeEvent</label></br>
        <input type="url" name="linkeEvent" id="linkeEvent" value="{{$events->linkeEvent}}" class="form-control"></br>
        <label>details</label></br>
        <textarea  name="details" id="details" value="" class="form-control">{{$events->details}}</textarea></br>
        <label>type</label></br>
        <input type="text" name="type" id="type" value="{{$events->type}}" class="form-control"></br>
        <input type="submit" value="Update" class="btn btn-success"></br>
    </form>
    
  </div>
</div>
  
@stop