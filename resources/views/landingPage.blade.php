@extends('includes.navBar')

@section('content')

    <div id="landingPage">
        <h1 class="landingPageTitle text-uppercase align-text-bottom">kenya minstry of health</h1>
   
        <div class="card-deck">
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/landingPage_news3.jpg') }}" alt="News Icon">          
              <div class="card-body">
                <h5 class="card-title">News</h5>
                <p class="card-text">Condimentum mattis pellentesque id nibh. B
                  ibendum enim facilisis gravida neque convallis a cras semper auctor. 
                  Dictumst vestibulum rhoncus.</p>

            </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="{{ asset('images/landingPage_guidelines3.png') }}"  alt="Card image cap">          
              <div class="card-body">
                <h5 class="card-title">Health care guidelines</h5>
                <p class="card-text">Condimentum mattis pellentesque id nibh. 
                  Bibendum enim facilisis gravida neque convallis a cras semper auctor.
                   Dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim cras tincidunt. 
                  Ut faucibus pulvinar elementum integer enim neque</p>
             </div>
            </div>
            <div class="card">
 <img class="card-img-top" src="{{ asset('images/landingPage_location.png') }}"  alt="Card image cap">          
              <div class="card-body">
                <h5 class="card-title">Health care locations</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, 
                  consectetur adipiscing elit, sed do eiusmod tempor incididunt ut 
                  labore et dolore magna aliqua. Enim lobortis scelerisque fermentum dui faucibus in. 
                  Et netus et malesuada fames ac turpis egestas integer.</p>
            </div>
          </div>

          
          <div class="card-deck">
            <div class="card">
 <img class="card-img-top" src="{{ asset('images/landingPage_events.png') }}"  alt="Card image cap">          
              <div class="card-body">
                <h5 class="card-title">Events</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, 
                  sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
                  Enim lobortis scelerisque fermentum dui faucibus in.
                   Et netus et malesuada fames ac turpis egestas integer.</p>
            </div>
            </div>
            <div class="card">
 <img class="card-img-top" src="{{ asset('images/landingPage_aboutUs.png') }}"  alt="Card image cap">          
              <div class="card-body">
                <h5 class="card-title">About us</h5>
                <p class="card-text">Amet mauris commodo quis imperdiet massa. 
                  Egestas diam in arcu cursus. Mi quis hendrerit dolor magna. 
                  Lorem ipsum dolor sit amet. Tortor at auctor urna nunc id cursus. 
                  Est pellentesque elit ullamcorper dignissim cras tincidunt.

                </p>
             </div>
            </div>
            <div class="card">
 <img class="card-img-top" src="{{ asset('images/landingPage_feedback3.png') }}" alt="Card image cap">          
              <div class="card-body">
                <h5 class="card-title">Feedback</h5>
                <p class="card-text">Gravida neque convallis a cras semper auctor. 
                   Dictumst vestibulum rhoncus est pellentesque elit ullamcorper dignissim 
                   cras tincidunt. Ut faucibus pulvinar elementum integer enim neque..</p>
              </div>
            </div>
          </div>
    </div>
@endsection
