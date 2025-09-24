<!DOCTYPE html>

<html lang="en">

<head>

    
    <meta charset="UTF-8">

    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/styles/creatorform.css') }}">

    <title>Document</title>

</head>

<body>

    <div class='container'>
    
        <form method='POST' action='/saveModif',$event>

            <h1>Update your Event</h1>

            {{ csrf_field() }}

            <div class="form-group">

                <label class='form-label' for='eventname'>Event name:</label>

                <input type='text' name='Eventname' id='Eventname'
                    class='form-control'value='{{ $evenements[0]->Eventname }}'>




                <label class='form-label' for='dateDebut'>Date debut:</label>

                <input type='date' name='dateDebut' id='dateDebut'
                    class='form-control'value='{{ $evenements[0]->dateDebut }}'>




                <label class='form-label' for='dateFin'>Date fin:</label>

                <input type='date' name='dateFin'id='dateFin'
                    class='form-control'value='{{ $evenements[0]->dateFin }}'>

                

                <label class='form-label' for='heureD'>Heure debut:</label>

                <input type='time' name='heureD'id='heureD'
                    class='form-control'value='{{ $evenements[0]->heureD }}'>

                

                <label class='form-label' for='heureF'>Heure fin:</label>

                <input type='time' name='heureF'id='heureF'
                    class='form-control'value='{{ $evenements[0]->heureF }}'>




                <label class='form-label' for='details'>Details:</label>

                
                <!-- <input type='textarea' name='details'id='details' class='form-control'value='{{ $evenements[0]->details }}'> -->

                
                <textarea class="form-control"  name='details'id="details" rows="3" value='{{ $evenements[0]->details }}'></textarea>





                <label class='form-label' for='link'>Link:</label>

                <input type='text' name='linkEvent'id='linkEvent'
                    class='form-control'value='{{ $evenements[0]->linkEvent }}'>

                

                <label class='form-label' for='payement'>Payement:</label>

                <input type='text' name='payement'id='payement'
                    class='form-control'value='{{ $evenements[0]->payement }}'>




                

                
            </div>

            <button>Modifier</button>




            </form>

        </div>

</body>

</html>
