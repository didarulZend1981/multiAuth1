@extends('layouts.admin.layout')
@section('title','Vector')


@push('css')

    
@endpush
@section('sl-mainpanel')
<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Maps</a>
        <span class="breadcrumb-item active">Vector Maps</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Vector Maps</h5>
          <p>JQVMap is a jQuery plugin that renders Vector Maps.  It uses resizable Scalable Vector Graphics (SVG) for modern browsers.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Vector World Map</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of displaying the world map.</p>

          <div id="vmap" class="ht-250 ht-sm-350 ht-md-450 bg-gray-300"></div>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Vector Map: USA</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of displaying the usa map.</p>

          <div id="vmap2" class="ht-250 ht-sm-350 ht-md-450 bg-gray-300"></div>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Vector Map: Canada</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of displaying the canada map.</p>

          <div id="vmap3" class="ht-250 ht-sm-350 ht-md-450 bg-gray-300"></div>
        </div><!-- card -->

      </div><!-- sl-pagebody -->
      
      

@endsection

@push('js')
<script src="{{ asset('backend') }}/lib/jqvmap/jquery.vmap.min.js"></script>
    <script src="{{ asset('backend') }}/lib/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="{{ asset('backend') }}/lib/jqvmap/maps/jquery.vmap.usa.js"></script>
    <script src="{{ asset('backend') }}/lib/jqvmap/maps/jquery.vmap.canada.js"></script>


     <script src="{{ asset('backend') }}/js/jquery.vmap.sampledata.js"></script> 

    <script>
      $(function(){
        'use strict';

        $('#vmap').vectorMap({
          map: 'world_en',
          backgroundColor: '#E9ECEF',
          color: '#ffffff',
          hoverOpacity: 0.7,
          selectedColor: '#666666',
          enableZoom: true,
          showTooltip: true,
          scaleColors: ['#17A2B8', '#006491'],
          values: sample_data,
          normalizeFunction: 'polynomial'
        });

        $('#vmap2').vectorMap({
          map: 'usa_en',
          showTooltip: true,
          backgroundColor: '#17A2B9',
          hoverColor: '#DC3545'
        });

        $('#vmap3').vectorMap({
          map: 'canada_en',
          color: '#fff',
          borderColor: '#fff',
          backgroundColor: '#384250',
          hoverColor: '#5B93D3',
          showLabels: true
        });

      });
    </script>
		

@endpush