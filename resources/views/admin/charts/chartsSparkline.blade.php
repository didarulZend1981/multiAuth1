
@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   
   <link href="{{ asset('backend') }}/lib/rickshaw/rickshaw.min.css" rel="stylesheet">
    
@endpush
@section('sl-mainpanel')

            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="index.html">Starlight</a>
              <a class="breadcrumb-item" href="index.html">Charts</a>
              <span class="breadcrumb-item active">Sparkline Charts test</span>
            </nav>

            <div class="sl-pagebody">

              <div class="sl-page-title">
                <h5>Sparkline Charts</h5>
                <p>This jQuery plugin generates sparklines (small inline charts) directly in the browser using data supplied either inline in the HTML, or via javascript. </p>
              </div><!-- sl-page-title -->

              <div class="row row-sm">
                <div class="col-md-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Line Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">A line chart or line graph is a type of chart which displays information as a series of data points called markers.</p>
                    <span id="sparkline1">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-md-6 mg-t-25 mg-md-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Line Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">A line chart or line graph is a type of chart which displays information as a series of data points called markers.</p>
                    <span id="sparkline2">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">HTML Code</p>
              <pre><code class="javascript pd-20">&lt;span id="sparkline1"&gt;1,4,4,7,5,9,10,1,4,4,7,5,9,10&lt;/span&gt;</code></pre>

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
              <pre>
                  <code class="javascript pd-20">$('#sparkline1').sparkline('html', {
                      width: '100%',
                      height: 70,
                      lineColor: '#0083CD',
                      fillColor: false
                      });
                  </code>
              </pre>


              <div class="row row-sm mg-t-50">
                <div class="col-md-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Area Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">An area chart or area graph displays graphically quantitative data. It is based on the line chart.</p>
                    <span id="sparkline3">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-md-6 mg-t-25 mg-md-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Area Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">An area chart or area graph displays graphically quantitative data. It is based on the line chart.</p>
                    <span id="sparkline4">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Option Code</p>
              <pre>
                <code class="javascript pd-20">lineColor: '#0083CD',
                  fillColor: 'rgba(0,131,205,0.2)'
                 </code> 
             </pre>


              <div class="row row-sm mg-t-50">
                <div class="col-md-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Bar Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
                    <span id="sparkline5">3,4,4,7,5,9,10,6,4,4,7,5,9,10</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-md-6 mg-t-25 mg-md-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Bar Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
                    <span id="sparkline6">1,4,4,7,5,9,10,1,4,4,7,5,9,10</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
              <pre><code class="javascript pd-20">$('#sparkline5').sparkline('html', {
                type: 'bar',
                barWidth: 10,
                height: 70,
                barColor: '#0083CD',
                chartRangeMax: 12
              });</code></pre>

              <div class="row row-sm mg-t-50">
                <div class="col-md-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Stacked Bar Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">A stacked bar chart, also known as a stacked bar graph, is a graph that is used to break down and compare parts of a whole.</p>
                    <span id="sparkline7">7,8,10,7,5,9,10,6,9,4,7,5,9,10,8</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-md-6 mg-t-25 mg-md-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Stacked Bar Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">A stacked bar chart, also known as a stacked bar graph, is a graph that is used to break down and compare parts of a whole.</p>
                    <span id="sparkline8">3,4,4,7,5,9,10,6,4,4,7,5,9,10,8</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
              <pre><code class="javascript pd-20">$('#sparkline7').sparkline('html', {
                  type: 'bar',
                  barWidth: 10,
                  height: 70,
                  barColor: '#0083CD',
                  chartRangeMax: 12
                  });

                  $('#sparkline7').sparkline([4,5,6,7,4,5,8,7,6,6,4,7,6,4,7], {
                  composite: true,
                  type: 'bar',
                  barWidth: 10,
                  height: 70,
                  barColor: '#11546F',
                  chartRangeMax: 12
                });</code></pre>


              <div class="row row-sm mg-t-50">
                <div class="col-md-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Pie Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">A pie chart (or a circle chart) is a circular statistical graphic which is divided into slices to illustrate numerical proportion.</p>
                    <span id="sparkline9">7,8,10</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-md-6 mg-t-25 mg-md-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Pie Chart</h6>
                    <p class="mg-b-20 mg-sm-b-30">A pie chart (or a circle chart) is a circular statistical graphic which is divided into slices to illustrate numerical proportion.</p>
                    <span id="sparkline10">3,4,4,7,5,9,10,6</span>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
              <pre class="mg-b-0"><code class="javascript pd-20">$('#sparkline9').sparkline('html', {
        type: 'pie',
        height: 70,
        sliceColors: ['#F4C62B', '#F6931E', '#8CC63E']
      });</code></pre>

            </div><!-- sl-pagebody -->
      @endsection

@push('js')
 
    <script src="{{ asset('backend') }}/lib/d3/d3.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery.sparkline.bower/jquery.sparkline.min.js"></script>

     <script src="{{ asset('backend') }}/js/chart.sparkline.js"></script>

@endpush

