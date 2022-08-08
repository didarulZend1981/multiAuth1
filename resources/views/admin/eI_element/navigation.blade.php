@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    
@endpush
@section('sl-mainpanel')
      
<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Navigation</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Navigation</h5>
          <p>Navigation share general markup and styles, from the base .nav class to the active and disabled states.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Navigation</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of a basic navigation for both light and dark. </p>

          <div class="pd-10 bd">
            <ul class="nav nav-gray-600 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 mg-t-20 bg-gray-300">
            <ul class="nav nav-gray-700 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 mg-t-20 bg-gray-800">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;pd-10 bd&quot;&gt;
  &lt;ul class=&quot;nav nav-gray-600 flex-column flex-sm-row&quot; role=&quot;tablist&quot;&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link active&quot; data-toggle=&quot;tab&quot; href=&quot;#&quot; role=&quot;tab&quot;&gt;Home&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#&quot; role=&quot;tab&quot;&gt;About&lt;/a&gt;&lt;/li&gt;
    &lt;li class=&quot;nav-item&quot;&gt;&lt;a class=&quot;nav-link&quot; data-toggle=&quot;tab&quot; href=&quot;#&quot; role=&quot;tab&quot;&gt;Features&lt;/a&gt;&lt;/li&gt;
    &lt;!-- more menu here --&gt;
  &lt;/ul&gt;
&lt;/div&gt;&lt;!-- pd-10 --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Vertical Navigation</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of a basic navigation in a vertical mode.</p>

          <div class="row">
            <div class="col-md-4 col-xl-3">
              <div class="pd-10 bd">
                <ul class="nav nav-gray-600 flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
            <div class="col-md-4 col-xl-3 mg-t-30 mg-md-t-0">
              <div class="pd-10 bg-gray-300">
                <ul class="nav nav-gray-700 flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
            <div class="col-md-4 col-xl-3 mg-t-30 mg-md-t-0">
              <div class="pd-10 bg-gray-800">
                <ul class="nav nav-white-800 flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;pd-10 bd rounded&quot;&gt;
  &lt;ul class=&quot;nav nav-gray-600 flex-column&quot; role=&quot;tablist&quot;&gt;...&lt;/ul&gt;
&lt;/div&gt;&lt;!-- pd-10 --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Pills Navigation</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of a pill navigation in both light and dark.</p>

          <div class="pd-10 bd">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 bg-gray-300 mg-t-20">
            <ul class="nav nav-pills flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 bg-gray-800 mg-t-20">
            <ul class="nav nav-pills nav-pills-for-dark flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;pd-10 bd&quot;&gt;
  &lt;ul class=&quot;nav nav-pills flex-column flex-md-row&quot; role=&quot;tablist&quot;&gt;...&lt;/ul&gt;
&lt;/div&gt;&lt;!-- pd-10 --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Vertical Pills Navigation</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of a pill navigation in vertical mode.</p>

          <div class="row">
            <div class="col-md-4 col-xl-3">
              <div class="pd-10 bd">
                <ul class="nav nav-pills flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
            <div class="col-md-4 col-xl-3 mg-t-30 mg-md-t-0">
              <div class="pd-10 bg-gray-300">
                <ul class="nav nav-pills flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
            <div class="col-md-4 col-xl-3 mg-t-30 mg-md-t-0">
              <div class="pd-10 bg-gray-900">
                <ul class="nav nav-pills nav-pills-for-dark flex-column" role="tablist">
                  <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
                  <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
                </ul>
              </div><!-- pd-10 -->
            </div><!-- col-3 -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;pd-10&quot;&gt;
&lt;ul class=&quot;nav nav-pills flex-column&quot; role=&quot;tablist&quot;&gt;...&lt;/ul&gt;
&lt;/div&gt;&lt;!-- pd-10 --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Horizontal Alignment</h6>
          <p class="mg-b-20 mg-sm-b-30">A navigation with center and right in which left is the default.</p>

          <div class="pd-10 bd">
            <ul class="nav nav-gray-600 flex-column flex-md-row justify-content-center" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
          <div class="pd-10 bd mg-t-10">
            <ul class="nav nav-pills flex-column flex-md-row justify-content-center" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->

          <div class="pd-10 bd mg-t-30">
            <ul class="nav nav-gray-600 flex-column flex-md-row justify-content-end" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
          <div class="pd-10 bd mg-t-10">
            <ul class="nav nav-pills flex-column flex-md-row justify-content-end" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;pd-10 bd rounded&quot;&gt;
  &lt;ul class=&quot;nav nav-pills flex-column flex-md-row justify-content-center&quot; role=&quot;tablist&quot;&gt;...&lt;/ul&gt;
&lt;/div&gt;&lt;!-- pd-10 --&gt;</code></pre>

        <pre><code class="html pd-20">&lt;div class=&quot;pd-10 bd rounded&quot;&gt;
  &lt;ul class=&quot;nav nav-pills flex-column flex-md-row justify-content-end&quot; role=&quot;tablist&quot;&gt;...&lt;/ul&gt;
&lt;/div&gt;&lt;!-- pd-10 --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Colored Bar Variations</h6>
          <p class="mg-b-20 mg-sm-b-30">A navigation with colored bar that wrapped the navigation.</p>

          <div class="pd-10 bg-purple">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
          <div class="pd-10 mg-t-20 bg-info">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
          <div class="pd-10 mg-t-20 bg-teal">
            <ul class="nav nav-white-800 flex-column flex-md-row" role="tablist">
              <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#" role="tab">Home</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">About</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Features</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Services</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Blog</a></li>
              <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#" role="tab">Contact</a></li>
            </ul>
          </div><!-- pd-10 -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre class="mg-b-0"><code class="html pd-20">&lt;div class=&quot;pd-10 bg-teal&quot;&gt;
  &lt;ul class=&quot;nav nav-pills flex-column flex-md-row&quot; role=&quot;tablist&quot;&gt;...&lt;/ul&gt;
&lt;/div&gt;&lt;!-- pd-10 --&gt;</code></pre>

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