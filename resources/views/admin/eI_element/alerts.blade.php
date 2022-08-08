@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    
@endpush
@section('sl-mainpanel')
      
  <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Alerts</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Alerts</h5>
          <p>Provide contextual feedback messages for typical user actions with the handful of available and flexible alert messages.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Alert</h6>
          <p class="mg-b-20 mg-sm-b-30">Use one of the four required contextual classes</p>

          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">Well done!</strong> You successfully read this important alert message.
          </div><!-- alert -->

          <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">Heads up!</strong> This alert needs your attention, but it's not super important.
          </div><!-- alert -->

          <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">Warning!</strong> Better check yourself, you're not looking too good.
          </div><!-- alert -->

          <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <strong class="d-block d-sm-inline-block-force">Oh snap!</strong> Change a few things up and try submitting again.
          </div><!-- alert -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
  &lt;/button&gt;
  &lt;strong class=&quot;d-block d-sm-inline-block-force&quot;&gt;Well done!&lt;/strong&gt; You successfully read this important alert message.
&lt;/div&gt;&lt;!-- alert --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Alert With Icons</h6>
          <p class="mg-b-20 mg-sm-b-30">Using icons inside an alert box.</p>

          <div class="alert alert-success" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-ios-checkmark alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
              <span><strong>Well done!</strong> Successful alert message.</span>
            </div><!-- d-flex -->
          </div><!-- alert -->

          <div class="alert alert-info" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-ios-information alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
              <span><strong>Heads up!</strong> This alert needs your attention.</span>
            </div><!-- d-flex -->
          </div>

          <div class="alert alert-warning" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-alert-circled alert-icon tx-24 mg-t-5 mg-xs-t-0"></i>
              <span><strong>Warning!</strong> Better check yourself.</span>
            </div><!-- d-flex -->
          </div>

          <div class="alert alert-danger" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-flex align-items-center justify-content-start">
              <i class="icon ion-ios-close alert-icon tx-24"></i>
              <span><strong>Oh snap!</strong> Error alert message.</span>
            </div><!-- d-flex -->
          </div><!-- alert -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;alert alert-success&quot; role=&quot;alert&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
  &lt;/button&gt;
  &lt;div class=&quot;d-flex align-items-center justify-content-start&quot;&gt;
    &lt;i class=&quot;icon ion-ios-checkmark alert-icon tx-32 mg-t-5 mg-xs-t-0&quot;&gt;&lt;/i&gt;
    &lt;span&gt;&lt;strong&gt;Well done!&lt;/strong&gt; Successful alert message.&lt;/span&gt;
  &lt;/div&gt;&lt;!-- d-flex --&gt;
&lt;/div&gt;&lt;!-- alert --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Bigger Alerts</h6>
          <p class="mg-b-20 mg-sm-b-30">Having a bigger size to emphasize an alert</p>

          <div class="alert alert-success pd-y-20" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-sm-flex align-items-center justify-content-start">
              <i class="icon ion-ios-checkmark alert-icon tx-52 mg-r-20 tx-success"></i>
              <div class="mg-t-20 mg-sm-t-0">
                <h5 class="mg-b-2 tx-success">Well done! You successfully read this important alert message.</h5>
                <p class="mg-b-0 tx-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
              </div>
            </div><!-- d-flex -->
          </div><!-- alert -->

          <div class="alert alert-info pd-y-20" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-sm-flex align-items-center justify-content-start">
              <i class="icon ion-ios-information alert-icon tx-52 mg-r-20"></i>
              <div class="mg-t-20 mg-sm-t-0">
                <h5 class="mg-b-2">Heads up! This alert needs your attention, but it's not super important.</h5>
                <p class="mg-b-0 tx-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
              </div>
            </div><!-- d-flex -->
          </div><!-- alert -->

          <div class="alert alert-warning pd-y-20" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-sm-flex align-items-center justify-content-start">
              <i class="icon ion-alert-circled alert-icon tx-52 tx-warning mg-r-20"></i>
              <div class="mg-t-20 mg-sm-t-0">
                <h5 class="mg-b-2 tx-warning">Warning! Better check yourself, you're not looking too good.</h5>
                <p class="mg-b-0 tx-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
              </div>
            </div><!-- d-flex -->
          </div><!-- alert -->

          <div class="alert alert-danger pd-y-20" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            <div class="d-sm-flex align-items-center justify-content-start">
              <i class="icon ion-ios-close alert-icon tx-52 tx-danger mg-r-20"></i>
              <div class="mg-t-20 mg-sm-t-0">
                <h5 class="mg-b-2 tx-danger">Oh snap! Change a few things up and try submitting again.</h5>
                <p class="mg-b-0 tx-gray">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...</p>
              </div>
            </div><!-- d-flex -->
          </div><!-- alert -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre class="mg-b-0"><code class="html pd-20">&lt;div class=&quot;alert alert-danger alert-bordered pd-y-20&quot; role=&quot;alert&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;close&quot; data-dismiss=&quot;alert&quot; aria-label=&quot;Close&quot;&gt;
    &lt;span aria-hidden=&quot;true&quot;&gt;&amp;times;&lt;/span&gt;
  &lt;/button&gt;
  &lt;div class=&quot;d-flex align-items-center justify-content-start&quot;&gt;
    &lt;i class=&quot;icon ion-ios-close alert-icon tx-52 tx-danger mg-r-20&quot;&gt;&lt;/i&gt;
    &lt;div&gt;
      &lt;h5 class=&quot;mg-b-2 tx-danger&quot;&gt;Oh snap! Change a few things up and try submitting again.&lt;/h5&gt;
      &lt;p class=&quot;mg-b-0 tx-gray&quot;&gt;Neque porro quisquam est, qui dolorem ipsum...&lt;/p&gt;
    &lt;/div&gt;
  &lt;/div&gt;&lt;!-- d-flex --&gt;
&lt;/div&gt;&lt;!-- alert --&gt;</code></pre>

      </div><!-- sl-pagebody -->








@endsection

@push('js')
 
<script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

@endpush