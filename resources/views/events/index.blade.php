<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@extends('events.layout')
@section('content')
    <div class="container">
        <div class="row" style="margin:20px;">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h2>Laravel 9 CRUD (Create, Read, Update and Delete)</h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/evenement/create') }}"
                         class="btn btn-success btn-sm" title="Add New Event">
                            Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Eventname</th>
                                        <th>Organisatorname</th>
                                        <th>type</th>
                                        <th>payement</th>
                                        <th>heureD</th>
                                        <th>heureF</th>
                                        <th>dateDebut</th>
                                        <th>dateFin</th>
                                        <th>linkEvent</th>
                                        <th>details</th>
                                        <th>Image</th>

                                      


                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($events  as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->Eventname }}</td>
                                        <td>{{ $item->Organisatorname}}</td>
                                        <td>{{ $item->type }}</td>
                                        <td>{{ $item->payement }}</td>
                                        <td>{{ $item->heureD }}</td>
                                        <td>{{ $item->heureF }}</td>
                                        <td>{{ $item->dateDebut }}</td>
                                        <td>{{ $item->dateFin }}</td>
                                        <td>{{ $item->linkEvent }}</td>
                                        <td>{{ $item->details }}</td>
                                        <td>{{ $item->src }}</td>

  
                                        <td>
                             <a href="{{ url('/evenement/' . $item->idE) }}" title="View Event"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                       <a href="{{ url('/evenement/' . $item->idE . '/edit') }}" title="Edit Event"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
  
                                            <form method="POST" action="{{ url('/evenement' . '/' . $item->idE) }}" accept-charset="UTF-8" style="display:inline">
                                       {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('Confirm delete?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
  
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
</body>
</html>