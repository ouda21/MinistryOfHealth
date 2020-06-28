@extends('includes.navbar')

@section('content')
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h1 class="display-6">Healthcare Locations</h1>
  </div>
<br>
      
<div class="ui grid" style="height:600px">
  <div class="six wide column">
    
    <div class="ui segment " style="max-height:600px;overflow:scroll">
      <h3 class="display-6 text-info">Health Location Results</h3>
      <div class="ui divided items items" id="places">
        <div class="list-group" id="item">
            <br>
          
        </div>
      </div>
    
      <button class="ui button blue" id="more">Contact health centre</button>
    </div>
  </div>
  <div class="ten wide column segment ui" id="map">
  </div>
</div>
    @endsection