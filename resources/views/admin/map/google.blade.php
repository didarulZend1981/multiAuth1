@extends('layouts.admin.layout')
@section('title','Google')


@push('css')

    
@endpush
@section('sl-mainpanel')
		<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Maps</a>
        <span class="breadcrumb-item active">Google Maps</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Google Maps</h5>
          <p>Allows you to use the potential of Google Maps in a simple way.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Map</h6>
          <p class="mg-b-20 mg-sm-b-30">A default map style by Google Maps</p>
          <div id="map1" class="ht-300 ht-sm-400 bd bg-gray-100"></div>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Map Style: Shift Worker</h6>
          <p class="mg-b-20 mg-sm-b-30">Based on <a href="https://snazzymaps.com/style/27/shift-worker" target="_blank">Shift Worker</a> style. Almost grey scale, uses subdued tones to display streets.</p>
          <div id="mapShiftWorker" class="ht-300 ht-sm-400 bd bg-gray-100"></div>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Map Style: Blue Water</h6>
          <p class="mg-b-20 mg-sm-b-30">Based on <a href="https://snazzymaps.com/style/25/blue-water" target="_blank">Blue Water</a>. A simple map with blue water and roads/landscape in grayscale.</p>

          <div id="mapBlueWater" class="ht-300 ht-sm-400 bd bg-gray-100"></div>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Map Style: Shades of Gray</h6>
          <p class="mg-b-20 mg-sm-b-30">Based on <a href="https://snazzymaps.com/style/38/shades-of-grey" target="_blank">Shades of Grey</a>. A map with various shades of grey. Great for dark theme.</p>

          <div id="mapShadesOfGrey" class="ht-300 ht-sm-400 bd bg-gray-100"></div>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Map Style: Apple Like</h6>
          <p class="mg-b-20 mg-sm-b-30">Based on <a href="https://snazzymaps.com/style/42/apple-maps-esque" target="_blank">Apple Maps-esque</a>. A theme that largely resembles the Apple Maps theme.</p>

          <div id="mapApple" class="ht-300 ht-sm-400 bd bg-gray-100"></div>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Map Style: MapBox Like</h6>
          <p class="mg-b-20 mg-sm-b-30">Based on <a href="https://snazzymaps.com/style/44/mapbox" target="_blank">MapBox</a>. Light blue and grey color inspired by MapBox's default map color.</p>

          <div id="mapMapBox" class="ht-300 ht-sm-400 bd bg-gray-100"></div>
        </div><!-- card -->




      </div><!-- sl-pagebody -->
     



@endsection

@push('js')
  
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyCuWEQWfVkWfcUoSIZeGw5JioT9LVCwYkE"></script>
    <script src="{{ asset('backend') }}/lib/gmaps/gmaps.js"></script>

    <script src="{{ asset('backend') }}/js/map.shiftworker.js"></script>
    <script src="{{ asset('backend') }}/js/map.bluewater.js"></script>
    <script src="{{ asset('backend') }}/js/map.shadesofgray.js"></script>
    <script src="{{ asset('backend') }}/js/map.apple.js"></script>
    <script src="{{ asset('backend') }}/js/map.mapbox.js"></script>
    <script>
      $(function(){
        'use strict';

        var map = new GMaps({
          el: '#map1',
          lat: -12.043333,
          lng: -77.028333
        });

      });
    </script>
         

@endpush