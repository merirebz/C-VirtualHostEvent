<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title></title>

    <meta name="viewport" content="width=device-width,
      initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('/styles/form.css') }}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>


<body>
     

    <div class="container">
   
        @if (Session::has('success'))
        <div class="alert alert-success" role="alert">
            {{Session::get('success')}}
        </div>
    @endif
    
   
        <h1 class="form-title">The basics Infos:</h1>

        @if ($message = Session::get('success'))
            <div class="alert alert-success alert-block">
                <strong>{{$message}}</strong>
            </div>

            <img src="{{ asset('images/'.Session::get('src')) }}" />
        @endif

        <section>  
                  <form method="post" action="{{url('hh/save') }}" enctype="multipart/form-data">
            @csrf
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="fullName">Event Name</label>
                    <input type="text" id="fullName" name="Eventname" required placeholder="Event name" />
                </div>
                <div class="user-input-box">
                    <label for="username">Organisator name:</label>
                    <input type="text" id="Organisatorname" name="Organisatorname" placeholder="Enter your name" />
                </div>
                <div class="user-input-box">
                    <label for="date">Starts at:</label>
                    <input type="date" id="date" rows=10 name="dateDebut" />

                    <label for="date">End at:</label>
                    <input type="date" id="date" name="dateFin" rows=10 />
                </div>
                <!-- Time -->


                <div class="user-input-box">
                    <label for="heure">Starts at:</label>
                    <input type="time" id="heure" rows=10 name="heureD" />

                    <label for="heure">End at:</label>
                    <input type="time" id="heure" rows=10 name="heureF" />
                </div>

                <div class="user-input-box">
                    <label for="image">Image:</label>
                    <input type="file" id="image" name="src" placeholder="Choose ...." />
                  
                </div>

            </div>
            <div class="gender-details-box">
                <span class="gender-title">Payement</span>
                <!-- <div class="gender-category">
                    <input type="text" name="payement" id="payement" placeholder="free or paid">
                </div> -->
                <select name="payement" id="payement" value="{{old ('payement')}}">
                    <option value="payed">payed</option>
                    <option value="payed">free</option>
                </select>


                <div class="gender-details-box">
                    <span class="gender-title">Type</span>
                    <!-- <div class="gender-category">
                        <input type="text" name="type" id="type" placeholder="conference or webinar">
                    </div> -->
                    <select name="type" id="type" value="{{old ('type')}}">
                    <option value="conference">conference</option>
                    <option value="webinaire">webinaire</option>
                    <option value="traning">traning</option>
                </select>


                    <div class="user-input-box">
                        <label for="">Event description</label>
                        <textarea name="details" id="eventD" cols="30" rows="10" placeholder="Descripe your event" ></textarea>
                        
                    </div>
                    <div class="user-input-box">
                        <label for="">Link</label>
                        <input type="url" id="link" name="linkEvent" placeholder="Paste link" />
                    </div>

                </div>
                <div class="form-submit-btn">
                    <button type="submit" class="btn">Ajouter</button>
                    <a href="{{ url('profilcreator') }}"  class="btn">Back</a>
                </div>
        </form>
        </section>

    </div>
</body>

</html>
