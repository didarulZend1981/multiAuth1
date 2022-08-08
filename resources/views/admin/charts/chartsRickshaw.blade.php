
@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   
     <!-- vendor css -->
    <link href="{{ asset('backend') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">

 
    
@endpush
@section('sl-mainpanel')
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Charts</a>
        <span class="breadcrumb-item active">Rickshaw Charts</span>
      </nav>

      <div class="sl-pagebody">

        <div class="sl-page-title">
          <h5>Rickshaw Charts</h5>
          <p>A powerful, interactive charting and visualization library for browser.</p>
        </div><!-- sl-page-title -->

        <div class="row row-sm">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Bar Chart</h6>
              <p class="mg-b-0">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <div id="chartBar1" class="wd-100p ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Bar Chart</h6>
              <p class="mg-b-0">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <div id="chartBar2" class="wd-100p ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="javascript pd-20">var bar1 = new Rickshaw.Graph({
  element: document.querySelector('#chartBar1'),
  renderer: 'bar',
  max: 80,
  series: [{
  data: [
    { x: 0, y: 40 },
    { x: 1, y: 49 },
    { x: 2, y: 38 },
    { x: 3, y: 30 },
    { x: 4, y: 32 }
  ],
  color: '#26A2E2'
  }]
});
bar1.render();</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Stacked Bar Chart</h6>
              <p class="mg-b-0">A stacked bar chart, also known as a stacked bar graph, is a graph that is used to break down and compare parts of a whole.</p>
              <div id="chartStackedBar1" class="wd-100p ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Stacked Bar Chart</h6>
              <p class="mg-b-0">A stacked bar chart, also known as a stacked bar graph, is a graph that is used to break down and compare parts of a whole.</p>
              <div id="chartStackedBar2" class="wd-100p ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="javascript pd-20">series: [{
  data: [
    { x: 0, y: 20 },
    { x: 1, y: 30 },
    { x: 2, y: 10 },
    { x: 3, y: 15 },
    { x: 4, y: 10 }
  ],
  color: '#466C79'
  },
  {
  data: [
    { x: 0, y: 10 },
    { x: 1, y: 10 },
    { x: 2, y: 15 },
    { x: 3, y: 20 },
    { x: 4, y: 12 }
  ],
  color: '#26A2E2'
}</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Multiple Bar Chart</h6>
              <p class="mg-b-0">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <div id="chartMultiBar1" class="wd-100p ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Multiple Bar Chart</h6>
              <p class="mg-b-0">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <div id="chartMultiBar2" class="wd-100p ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Additional Option Code</p>
        <pre><code class="javascript pd-20">stack: false</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Line Chart</h6>
              <p class="mg-b-0">A line chart or line graph is a type of chart which displays information as a series of data points called markers.</p>
              <div id="chartLine1" class="wd-100p ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Line Chart</h6>
              <p class="mg-b-0">A line chart or line graph is a type of chart which displays information as a series of data points called markers.</p>
              <div id="chartLine2" class="wd-100p ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Option Code</p>
        <pre><code class="javascript pd-20">rendered: 'line'</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Area Chart</h6>
              <p class="mg-b-0">An area chart or area graph displays graphically quantitative data. It is based on the line chart.</p>
              <div id="chartArea1" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Area Chart</h6>
              <p class="mg-b-0">An area chart or area graph displays graphically quantitative data. It is based on the line chart.</p>
              <div id="chartArea2" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Option Code</p>
        <pre class="mg-b-0"><code class="javascript pd-20">renderer: 'area'</code></pre>


      </div><!-- sl-pagebody -->
      @endsection

@push('js')
 
<!-- only rickshaw -->
   
    <script src="{{ asset('backend') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('backend') }}/lib/rickshaw/rickshaw.min.js"></script>

    <script src="{{ asset('backend') }}/js/ResizeSensor.js"></script>
    <script src="{{ asset('backend') }}/js/chart.rickshaw.js"></script>


@endpush
