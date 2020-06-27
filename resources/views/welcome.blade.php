<html>

<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Slider show</title>
    <style>
        * {box-sizing: border-box}
        body {font-family: Verdana, sans-serif; margin:0}
        .mySlides {display: none}
        img {vertical-align: middle;}

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Next & previous buttons */
        .prev, .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            padding: 16px;
            margin-top: -22px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover, .next:hover {
            background-color: rgba(0,0,0,0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active, .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 10s;
            animation-name: fade;
            animation-duration: 10s;
        }

        @-webkit-keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        @keyframes fade {
            from {opacity: .4}
            to {opacity: 1}
        }

        /* On smaller screens, decrease text size */
        @media only screen and (max-width: 300px) {
            .prev, .next,.text {font-size: 11px}
        }
        img
        {
            max-height: 500px;
        }
    </style>
</head>

{{--<body>--}}
{{--<table class="table" hidden>--}}
{{--    <thead>--}}
{{--    <tr>--}}
{{--        <th scope="col">id</th>--}}
{{--        <th scope="col">Title</th>--}}
{{--        <th scope="col">Link</th>--}}
{{--        <th scope="col">Image</th>--}}
{{--    </tr>--}}
{{--    </thead>--}}
{{--    <tbody>--}}
{{--    @foreach($allnews as $row)--}}
{{--    <tr>--}}
{{--        --}}
{{--        <th scope="row">{{$row->id}}</th>--}}
{{--        <td>{{$row->title}}</td>--}}
{{--        <td>{{$row->link}}</td>--}}
{{--        <td>{{$row->image}}</td>--}}
{{--    </tr>--}}
{{--    @endforeach--}}
{{--    </tbody>--}}

{{--</table>--}}

{{--<div class="slideshow-container">--}}

{{--    @foreach($allnews as $news)--}}
{{--    <div class="mySlides fade">--}}
{{--        <div class="numbertext">{{$news->id}}</div>--}}
{{--       <a href="{{$news->link}}" target="_blank"> <img src="{{$news->image}}" style="width:100%"></a>--}}
{{--        <div class="text">{{$news->title}}</div>--}}
{{--    </div>--}}
{{--    @endforeach--}}

{{--    <div class="mySlides fade">--}}
{{--        <div class="numbertext">2 / 3</div>--}}
{{--        <img src="img_snow_wide.jpg" style="width:100%">--}}
{{--        <div class="text">Caption Two</div>--}}
{{--    </div>--}}

{{--    <div class="mySlides fade">--}}
{{--        <div class="numbertext">3 / 3</div>--}}
{{--        <img src="img_mountains_wide.jpg" style="width:100%">--}}
{{--        <div class="text">Caption Three</div>--}}
{{--    </div>--}}

{{--    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>--}}
{{--    <a class="next" onclick="plusSlides(1)">&#10095;</a>--}}

{{--</div>--}}
{{--<br>--}}

{{--<div style="text-align:center">--}}
{{--    <span class="dot" onclick="currentSlide({{}})"></span>--}}

{{--</div>--}}

{{--<script>--}}

{{--    var slideIndex = 1;--}}
{{--    showSlides(slideIndex);--}}

{{--    function plusSlides(n) {--}}
{{--        showSlides(slideIndex += n);--}}
{{--    }--}}

{{--    function currentSlide(n) {--}}
{{--        showSlides(slideIndex = n);--}}
{{--    }--}}

{{--    var slideIndex = 0;--}}
{{--    showSlides();--}}

{{--    function showSlides() {--}}
{{--        var i;--}}
{{--        var slides = document.getElementsByClassName("mySlides");--}}
{{--        for (i = 0; i < slides.length; i++) {--}}
{{--            slides[i].style.display = "none";--}}
{{--        }--}}
{{--        slideIndex++;--}}
{{--        if (slideIndex > slides.length) {slideIndex = 1}--}}
{{--        slides[slideIndex-1].style.display = "block";--}}
{{--        setTimeout(showSlides, 10000); // Change image every 2 seconds--}}
{{--    }--}}
{{--</script>--}}

{{--</body>--}}

<body>
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
    <div class="carousel-inner">
        @foreach($allnews as $news)
        <div class="text-center carousel-item @if($loop->first)active @endif">
            <a href="{{$news->link}}" target="_blank"><img class="d-block mx-auto img-fluid" src={{$news->image}}></a>
                        <div class="carousel-caption d-none d-md-block">
                            <h5>{{$news->title}}</h5>
                        </div>
        </div>

        @endforeach
    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>

<script>
    $('.carousel').carousel({
        interval: 5000
    })
</script>
</body>

</html>
