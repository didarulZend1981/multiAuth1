@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   
   
    
@endpush
@section('sl-mainpanel')
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Charts</a>
        <span class="breadcrumb-item active">Flot Charts</span>
      </nav>

      <div class="sl-pagebody">

        <div class="sl-page-title">
          <h5>Flot Charts</h5>
          <p>Flot is a pure JavaScript plotting library for jQuery, with a focus on simple usage, attractive looks and interactive features.</p>
        </div><!-- sl-page-title -->

        <div class="row row-sm">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <div id="flotBar1" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <div id="flotBar2" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre><code class="javascript pd-20">$.plot("#flotBar1", [{
        data: [[0, 3], [2, 8], [4, 5], [6, 13],[8,5], [10,7],[12,4], [14,6]]
        }], {
        series: {
          bars: {
            show: true,
            lineWidth: 0,
            fillColor: '#4E6577'
          }
        },
        grid: {
          borderWidth: 1,
          borderColor: '#D9D9D9'
        },
        yaxis: {
          tickColor: '#d9d9d9',
          font: {
            color: '#666',
            size: 10
          }
        },
        xaxis: {
          tickColor: '#d9d9d9',
          font: {
            color: '#666',
            size: 10
          }
        }
        });</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Line Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <div id="flotLine1" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Line Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">The stacked charts are used when data sets have to be broken down into their constituents.</p>
              <div id="flotLine2" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre><code class="javascript pd-20">series: {
          bars: { show: false },
          lines: {
            show: true,
            lineWidth: 1
          },
          shadowSize: 0
          }</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Area Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A line graph is a type of chart which displays information as a series of data points connected by straight line segments.</p>
              <div id="flotArea1" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->

            <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
            <pre><code class="javascript pd-20">series: {
            lines: {
              show: true,
              lineWidth: 0,
              fill: 0.8 //making the area chart
            },
            shadowSize: 0
            }</code></pre>
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Area Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">Area charts are used to represent cumulated totals using numbers or percentages (stacked area charts in this case) over time.</p>
              <div id="flotArea2" class="ht-200 ht-sm-300"></div>
            </div><!-- card -->

            <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
            <pre><code class="javascript pd-20">series: {
            lines: { show: false },
            splines: { // this making the smooth line
              show: true,
              lineWidth: 0,
              fill: 0.8 //making the area chart
            },
            shadowSize: 0 }</code></pre>
          </div><!-- col-6 -->
        </div><!-- row -->


        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Real Time Updates</h6>
              <p class="mg-b-20 mg-sm-b-30">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
              <div id="flotRealtime1" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Real Time Updates</h6>
              <p class="mg-b-20 mg-sm-b-30">You can update a chart periodically to get a real-time effect by using a timer to insert the new data in the plot and redraw it.</p>
              <div id="flotRealtime2" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre><code class="javascript pd-20">var plot = $.plot('#flotRealtime', data, option);
          var updateInterval = 1000;

          function update_plot() {
          plot.setData([getRandomData()]);
          plot.draw();
          setTimeout(update_plot, updateInterval);
          }
          update_plot();</code></pre>


        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Pie Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">Labels can be hidden if the slice is less than a given percentage of the pie.</p>
              <div id="flotPie1" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Pie Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">Labels can be hidden if the slice is less than a given percentage of the pie.</p>
              <div id="flotPie2" class="ht-200 ht-sm-250"></div>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre class="mg-b-0"><code class="javascript pd-20">var piedata = [
              { label: "Series 1", data: [[1,10]], color: '#677489'},
              { label: "Series 2", data: [[1,30]], color: '#CAB1D2'},
              { label: "Series 3", data: [[1,90]], color: '#F89D44'},
              { label: "Series 4", data: [[1,70]], color: '#85C441'},
              { label: "Series 5", data: [[1,80]], color: '#36B3E3'}
              ];

              $.plot('#flotPie1', piedata, {
              series: {
                pie: {
                  show: true,
                  radius: 1,
                  label: {
                    show: true,
                    radius: 2/3,
                    formatter: labelFormatter,
                    threshold: 0.1
                  }
                }
              },
              grid: {
                hoverable: true,
                clickable: true
              }
              });</code></pre>

      </div><!-- sl-pagebody -->
    @endsection

@push('js')
 <!-- test -->
    
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.js"></script>
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.pie.js"></script>
    <script src="{{ asset('backend') }}/lib/Flot/jquery.flot.resize.js"></script>
    <script src="{{ asset('backend') }}/lib/flot-spline/jquery.flot.spline.js"></script>

    <script src="{{ asset('backend') }}/js/chart.flot.js"></script>

@endpush

