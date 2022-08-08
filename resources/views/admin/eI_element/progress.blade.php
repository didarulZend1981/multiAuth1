@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    
@endpush
@section('sl-mainpanel')
      
	<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Progress</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Progress</h5>
          <p>Stylize progress element with a few extra classes and some crafty browser-specific css.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Progress</h6>
          <p class="mg-b-20 mg-sm-b-30">A basic progress in all different colors.</p>

          <div class="progress mg-b-20">
            <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress">
            <div class="progress-bar bg-indigo wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;progress mg-b-20&quot;&gt;
  &lt;div class=&quot;progress-bar bg-success wd-35p&quot; role=&quot;progressbar&quot; aria-valuenow=&quot;35&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Striped Progress</h6>
          <p class="mg-b-20 mg-sm-b-30">A striped progress in all different colors.</p>

          <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped bg-warning wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress mg-b-20">
            <div class="progress-bar progress-bar-striped bg-danger wd-65p" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <div class="progress">
            <div class="progress-bar progress-bar-striped bg-info wd-75p" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;progress mg-b-20&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-striped wd-35p&quot;
  role=&quot;progressbar&quot; aria-valuenow=&quot;35&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Progress Sizes</h6>
          <p class="mg-b-20 mg-sm-b-30">A basic progress in different sizes.</p>


          <span class="tx-uppercase tx-11 d-block mg-b-5">Size Super Extra Small</span>
          <div class="progress mg-b-10">
            <div class="progress-bar ht-2 wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success ht-2 wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger ht-2 wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Extra Small</span>
          <div class="progress mg-b-10">
            <div class="progress-bar progress-bar-xs wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success progress-bar-xs wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger progress-bar-xs wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Small</span>
          <div class="progress mg-b-10">
            <div class="progress-bar progress-bar-sm wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success progress-bar-sm wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger progress-bar-sm wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Normal</span>
          <div class="progress mg-b-10">
            <div class="progress-bar wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>

          <span class="tx-uppercase tx-11 d-block mg-t-20 mg-b-5">Size Large</span>
          <div class="progress mg-b-10">
            <div class="progress-bar progress-bar-lg wd-25p" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success progress-bar-lg wd-35p" role="progressbar" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger progress-bar-lg wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;progress mg-b-20&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-lg wd-35p&quot;
  role=&quot;progressbar&quot; aria-valuenow=&quot;35&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;&lt;/div&gt;
&lt;/div&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Progress Labels</h6>
          <p class="mg-b-20 mg-sm-b-30">A basic progress with labels centered.</p>

          <div class="progress mg-b-10">
            <div class="progress-bar wd-50p" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">50%</div>
          </div>
          <div class="progress mg-b-10">
            <div class="progress-bar bg-success wd-60p" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%</div>
          </div>
          <div class="progress">
            <div class="progress-bar bg-danger wd-95p" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">95%</div>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre class="mg-b-0"><code class="html pd-20">&lt;div class=&quot;progress mg-b-20&quot;&gt;
  &lt;div class=&quot;progress-bar progress-bar-lg wd-35p&quot;
  role=&quot;progressbar&quot; aria-valuenow=&quot;35&quot; aria-valuemin=&quot;0&quot; aria-valuemax=&quot;100&quot;&gt;35%&lt;/div&gt;
&lt;/div&gt;</code></pre>

      </div><!-- sl-pagebody -->
      
    <!-- ########## END: MAIN PANEL ########## -->

    <!-- BASIC MODAL -->
    <div id="modaldemo1" class="modal fade">
      <div class="modal-dialog modal-dialog-vertical-center" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-y-20 pd-x-25">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Message Preview</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-25">
            <h4 class="lh-3 mg-b-20"><a href="" class="tx-inverse hover-primary">Why We Use Electoral College, Not Popular Vote</a></h4>
            <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. </p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-info pd-x-20">Save changes</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->

    <!-- SMALL MODAL -->
    <div id="modaldemo2" class="modal fade">
      <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content bd-0 tx-14">
          <div class="modal-header pd-x-20">
            <h6 class="tx-14 mg-b-0 tx-uppercase tx-inverse tx-bold">Notice</h6>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body pd-20">
            <p class="mg-b-5">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
          </div>
          <div class="modal-footer justify-content-center">
            <button type="button" class="btn btn-info pd-x-20">Save changes</button>
            <button type="button" class="btn btn-secondary pd-x-20" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div><!-- modal-dialog -->
    </div><!-- modal -->








@endsection

@push('js')
 
<script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

@endpush