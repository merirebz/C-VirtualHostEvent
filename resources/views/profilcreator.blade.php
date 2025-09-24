<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <Link rel="stylesheet" href="{{asset('styles/profil.css')}}" />  

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
@include('nb')
 <h3 class='title'> Your Profil </h3>   
 
 
 
     <section class="hero-section" >
 
     @foreach ($profil as  $p) 
     <div class="wrapper">  
     
     <div class="card front-face">  
     <img src="{{asset('images/'.$p->src)}}" alt="" width="100">
     </div>  
     <div class="card back-face">   
      <div class="info"  >  
       <div class="title">{{$p->Eventname}}</div>  
        
       <p><br />{{$p->dateDebut}} {{$p->dateFin}}</p>  
      </div>  
      <a  type="submit" href='{{url("details" ,["Eventname" => $p->Eventname])}}' class="btn btn-primary">Read More</a>
      <ul>  
       <i class="fab fa-twitter"></i>
       <i class="fab fa-instagram"></i>  
       <i class="fab fa-youtube"></i>  
      </ul>  
     </div>  
    </div>  
   
    
    </div>
    @endforeach
    
    </section>
    
    {{-- Pagination --}}
        <div class="d-flex justify-content-center mx-auto ">
            {!! $profil->links() !!}
        </div>

 </body>
</body>
</html>