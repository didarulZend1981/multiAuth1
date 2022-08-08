
@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   
   
@endpush
@section('sl-mainpanel')
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Charts</a>
        <span class="breadcrumb-item active">Chart JS Charts</span>
      </nav>

      <div class="sl-pagebody">

        <div class="sl-page-title">
          <h5>Chart JS Charts</h5>
          <p>Simple, clean and engaging HTML5 based JavaScript charts. An easy way to include animated, interactive graphs on your website.</p>
        </div><!-- sl-page-title -->

        <div class="row row-sm">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartBar1" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Multiple Color Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartBar2" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre><code class="javascript pd-20">var ctx = document.getElementById('chartBar1').getContext('2d');
        new Chart(ctx, {
        type: 'bar',
        data: {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
          datasets: [{
            label: '# of Votes',
            data: [12, 39, 20, 10, 25, 18],
            backgroundColor: '#27AAC8'
          }]
        },
        options: {
          legend: {
            display: false,
              labels: {
                display: false
              }
          },
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero:true,
                fontSize: 10,
                max: 80
              }
            }],
            xAxes: [{
              ticks: {
                beginAtZero:true,
                fontSize: 11
              }
            }]
          }
        }
        });</code></pre>

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Multiple Color Code</p>
        <pre><code class="javascript pd-20">backgroundColor: [
          '#29B0D0',
          '#2A516E',
          '#F07124',
          '#CBE0E3',
          '#979193'
        ]</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Horizontal Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartBar3" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Horizontal Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartBar4" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Horizontal Type Code</p>
        <pre><code class="javascript pd-20">type: 'horizontalBar'</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Stacked Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartStacked1" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Stacked Bar Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A bar chart or bar graph is a chart with rectangular bars with lengths proportional to the values that they represent.</p>
              <canvas id="chartStacked2" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
                <pre><code class="javascript pd-20">scales: {
          yAxes: [{
            stacked: true
          }],
          xAxes: [{
            stacked: true
          }]
        }</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Line Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A line graph is a type of chart which displays information as a series of data points connected by straight line segments.</p>
              <canvas id="chartLine1" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Line Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A line graph is a type of chart which displays information as a series of data points connected by straight line segments.</p>
              <canvas id="chartLine2" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="javascript pd-20">type: 'line'</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Area Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">An area chart or area graph displays graphically quantitative data. It is based on the line chart.</p>
              <canvas id="chartArea1" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Area Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">An area chart or area graph displays graphically quantitative data. It is based on the line chart.</p>
              <canvas id="chartArea2" height="300"></canvas>
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
                  <pre><code class="javascript pd-20">datasets: [{
            data: [12, 39, 20, 10, 25, 18],
            fill: true,
          }]</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-xl-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Pie Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A pie chart (or a circle chart) is a circular statistical graphic which is divided into slices to illustrate numerical proportion.</p>
              <canvas id="chartPie" height="300"></canvas>
            </div><!-- card -->

            <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
            <pre class="mg-b-0"><code class="javascript pd-20">var pie = document.getElementById('chartDonut');
                  var myPieChart = new Chart(pie, {
                  type: 'pie',
                  data: data,
                  options: option
                });</code></pre>
                          </div><!-- col-6 -->
          <div class="col-xl-6 mg-t-25 mg-xl-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Donut Chart</h6>
              <p class="mg-b-20 mg-sm-b-30">A pie chart (or a circle chart) is a circular statistical graphic which is divided into slices to illustrate numerical proportion.</p>
              <canvas id="chartDonut" height="300"></canvas>
            </div><!-- card -->

            <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
            <pre class="mg-b-0"><code class="javascript pd-20">var pie = document.getElementById('chartDonut');
          var myPieChart = new Chart(pie, {
          type: 'doughnut',
          data: data,
          options: option
          });</code></pre>
          </div><!-- col-6 -->
        </div><!-- row -->



        </div><!-- sl-pagebody -->



        
        @endsection

@push('js')
    
    <script src="{{ asset('backend') }}/lib/chart.js/Chart.js"></script>
    <script src="{{ asset('backend') }}/js/chart.chartjs.js"></script>


@endpush
