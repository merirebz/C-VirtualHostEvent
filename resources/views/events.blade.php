<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('styles/services.css') }}">
    <title>Document</title>
    <style>
        .j{
            justify-content: center;
            display: flex;
            margin-top: 6%;
            font-weight: lighter;
            margin-bottom: 5%;
            
        }
      
        .title{
            font-family: 'Courier New', Courier, monospace;
        }
       
    </style>
</head>

<body>
    <h1 class="j">OurEvents</h1>
    <section class="articles">
        <article>



            <div class="article-wrapper">
                <figure>
                   <img src="{{ asset('images/ica5.png') }}" alt="story" />
                </figure>
                <div class="article-body">
                    <h2 class="title">Webinars</h2>
                    <p class="pacard">
                        Create a formally arranged Webinars, appointed participants and/or registration, published
                        thematic agenda, and speaker
                    </p>
                   
                </div>
            </div>
        </article>
        <article>

            <div class="article-wrapper">
                <figure>
                    <img src="{{ asset('images/ica6.png') }}" alt="story" />
                </figure>
                <div class="article-body">
                    <h2 class="title">Conference</h2>
                    <p class="pacard">
                    Create a conference with people and discuss matters related to your joint work
                    </p>
                 
                </div>
            </div>
        </article>
        <article>

            <div class="article-wrapper">
                <figure>
                <img src="{{ asset('images/ica7.png') }}" alt="story" />
                </figure>
                <div class="article-body">
                    <h2 class="title">Training</h2>
                    <p class="pacard">
                    Create with ease and browse formation in order to increase your education, knowledge and
                        experience
                    </p>
                 
                </div>
            </div>
        </article>
    </section>
</body>

</html>
