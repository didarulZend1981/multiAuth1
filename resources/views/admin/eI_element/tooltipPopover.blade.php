@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
    <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    
@endpush
@section('sl-mainpanel')
      

	<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Tooltip &amp; Popover</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Tooltip &amp; Popover</h5>
          <p>Documentation and examples for adding tooltips &amp; popovers, like those found in iOS, to any element on your site.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Tooltip</h6>
          <p class="mg-b-20 mg-sm-b-30">Four options are available: top, right, bottom, and left aligned.</p>

          <p class="tx-11 tx-uppercase tx-spacing-2 mg-b-10 tx-gray-600">Static Demo</p>
          <div class="bd pd-20">
            <div class="row tooltip-static-demo tx-center">
              <div class="col-sm-6 col-lg-3">
                <div class="tooltip bs-tooltip-top" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the top
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <div class="tooltip bs-tooltip-bottom" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the bottom
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <div class="tooltip bs-tooltip-left" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the left
                  </div>
                </div>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <div class="tooltip bs-tooltip-right" role="tooltip">
                  <div class="arrow"></div>
                  <div class="tooltip-inner">
                    Tooltip on the right
                  </div>
                </div>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- bd -->

          <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Live Demo</p>
          <div class="bd pd-20">
            <div class="row tx-center">
              <div class="col-sm-6 col-lg-3">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="top" title="Tooltip on top">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="bottom" title="Tooltip on top">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="left" title="Tooltip on left">
  Hover me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-toggle="tooltip" data-placement="right" title="Tooltip on right">
                  Hover me
</button>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- bd -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot; data-toggle=&quot;tooltip&quot; data-placement=&quot;top&quot; title=&quot;Tooltip on top&quot;&gt;
  Hover me
&lt;/button&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Default Popover</h6>
          <p class="mg-b-20 mg-sm-b-30">Documentation and examples for adding Bootstrap popovers, like those found in iOS, to any element on your site.</p>

          <p class="tx-11 tx-uppercase tx-spacing-2 mg-b-10 tx-gray-600">Static Demo</p>
          <div class="bg-gray-300 pd-y-40">
            <div class="row popover-static-demo tx-center">
              <div class="col-md-6">
                <div class="popover bs-popover-top">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover top</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30 mg-md-t-0">
                <div class="popover bs-popover-bottom">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Bottom</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30">
                <div class="popover bs-popover-left">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Left</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
              <div class="col-md-6 mg-t-30">
                <div class="popover bs-popover-right">
                  <div class="arrow"></div>
                  <h3 class="popover-header">Popover Right</h3>
                  <div class="popover-body">
                    <p>Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum.</p>
                  </div>
                </div><!-- popover -->
              </div><!-- col-6 -->
            </div><!-- row -->
          </div>

          <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Live Demo</p>
          <div class="bd pd-20">
            <div class="row tx-center">
              <div class="col-sm-6 col-lg-3">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="top" title="Popover top" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-sm-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="bottom" title="Popover bottom" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="left" title="Popover left" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
              <div class="col-sm-6 col-lg-3 mg-t-30 mg-lg-t-0">
                <button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-popover-color="default" data-placement="right" title="Popover right" data-content="Vivamus sagittis lacus vel augue laoreet rutrum faucibus.">
  Click me
</button>
              </div><!-- col-3 -->
            </div><!-- row -->
          </div><!-- bd -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre class="mg-b-0"><code class="html pd-20">&lt;button type=&quot;button&quot; class=&quot;btn btn-secondary&quot;
  data-container=&quot;body&quot; data-toggle=&quot;popover&quot; data-popover-color=&quot;default&quot; data-placement=&quot;top&quot; title=&quot;Popover top&quot;
data-content=&quot;Vivamus sagittis lacus vel augue laoreet rutrum faucibus.&quot;&gt;Click me&lt;/button&gt;</code></pre>


      </div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
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