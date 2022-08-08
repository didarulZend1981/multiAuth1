
@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
      <!-- vendor css -->
     <link href="{{ asset('backend') }}/lib/morris.js/morris.css" rel="stylesheet">

    <!-- Starlight CSS -->
    
    
@endpush
@section('sl-mainpanel')
            <nav class="breadcrumb sl-breadcrumb">
              <a class="breadcrumb-item" href="index.html">Starlight</a>
              <a class="breadcrumb-item" href="index.html">Charts</a>
              <span class="breadcrumb-item active">Morris Charts</span>
            </nav>

            <div class="sl-pagebody">

              <div class="sl-page-title">
                <h5>Morris Charts</h5>
                <p>Good-looking charts shouldn't be difficult </p>
              </div><!-- sl-page-title -->

              <div class="row row-sm">
                <div class="col-xl-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Bar Chart</h6>
                    <p>A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
                    <div id="morrisBar1" class="ht-200 ht-sm-300"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-xl-6 mg-t-25 mg-xl-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Stacked Bar Chart</h6>
                    <p>The stacked charts are used when data sets have to be broken down into their constituents.</p>
                    <div id="morrisBar2" class="ht-200 ht-sm-300"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
              <pre><code class="javascript pd-20">new Morris.Bar({
      element: 'morrisBar1',
      data: [
        { y: '2006', a: 100, b: 90 },
        { y: '2007', a: 75,  b: 65 },
        { y: '2008', a: 50,  b: 40 },
        { y: '2009', a: 75,  b: 65 },
        { y: '2010', a: 50,  b: 40 },
      ],
      xkey: 'y',
      ykeys: ['a', 'b'],
      labels: ['Series A', 'Series B'],
      barColors: ['#5058AB', '#14A0C1'],
      gridTextSize: 11,
      hideHover: 'auto',
      resize: true
      });</code></pre>

      <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">For stacked bar, just add</p>
      <pre><code class="javascript pd-20">stacked: true</code></pre>

              <div class="row row-sm mg-t-50">
                <div class="col-xl-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Bar Chart</h6>
                    <p>A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
                    <div id="morrisBar3" class="ht-200 ht-sm-300"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-xl-6 mg-t-25 mg-xl-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Stacked Bar Chart</h6>
                    <p>The stacked charts are used when data sets have to be broken down into their constituents.</p>
                    <div id="morrisBar4" class="ht-200 ht-sm-300"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">For additional data</p>
              <pre><code class="javascript pd-20">data: [
      { y: '2006', a: 100, b: 90, c: 80 },
      { y: '2007', a: 75,  b: 65, c: 75 },
      { y: '2008', a: 50,  b: 40, c: 45 },
      { y: '2009', a: 75,  b: 65, c: 85 },
      ],
      ykeys: ['a', 'b', 'c'],
      labels: ['Series A', 'Series B', 'Series C'],
      barColors: ['#5058AB', '#14A0C1','#01CB99']</code></pre>


              <div class="row row-sm mg-t-50">
                <div class="col-xl-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Line Chart</h6>
                    <p>A line graph is a type of chart which displays information as a series of data points connected by straight line segments.</p>
                    <div id="morrisLine1" class="ht-200 ht-sm-300"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-xl-6 mg-t-25 mg-xl-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Line Chart</h6>
                    <p>A line graph is a type of chart which displays information as a series of data points connected by straight line segments.</p>
                    <div id="morrisLine2" class="ht-200 ht-sm-300"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
              <pre><code class="javascript pd-20">new Morris.Line({ ... );</code></pre>

              <div class="row row-sm mg-t-50">
                <div class="col-xl-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Area Chart</h6>
                    <p>A line graph is a type of chart which displays information as a series of data points connected by straight line segments.</p>
                    <div id="morrisArea1" class="ht-200 ht-sm-300"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-xl-6 mg-t-25 mg-xl-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Area Chart</h6>
                    <p>Area charts are used to represent cumulated totals using numbers or percentages (stacked area charts in this case) over time.</p>
                    <div id="morrisArea2" class="ht-200 ht-sm-300"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
              <pre><code class="javascript pd-20">new Morris.Area({ ... );</code></pre>

              <div class="row row-sm mg-t-50">
                <div class="col-xl-6">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Donut Chart</h6>
                    <p>A donut chart, or doughnut chart, functions precisely like a pie chart. The only difference is that the center is blank.</p>
                    <div id="morrisDonut1" class="ht-200 ht-sm-250"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
                <div class="col-xl-6 mg-t-25 mg-sm-t-0">
                  <div class="card pd-20 pd-sm-40">
                    <h6 class="card-body-title">Donut Chart</h6>
                    <p>A donut chart, or doughnut chart, functions precisely like a pie chart. The only difference is that the center is blank.</p>
                    <div id="morrisDonut2" class="ht-200 ht-sm-250"></div>
                  </div><!-- card -->
                </div><!-- col-6 -->
              </div><!-- row -->

              <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
              <pre class="mg-b-0"><code class="javascript pd-20">new Morris.Donut({
      element: 'morrisDonut1',
      data: [
        {label: "Men", value: 12},
        {label: "Women", value: 30},
        {label: "Kids", value: 20}
      ],
      colors: ['#3D449C','#268FB2','#74DE00'],
      resize: true
      });</code></pre>

            </div><!-- sl-pagebody -->
          @endsection

@push('js')
 <!-- test -->
    
    <script src="{{ asset('backend') }}/lib/raphael/raphael.min.js"></script>
    <script src="{{ asset('backend') }}/lib/morris.js/morris.js"></script>

    <script src="{{ asset('backend') }}/js/chart.morris.js"></script>

@endpush
