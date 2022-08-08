@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
       <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">

    
@endpush
@section('sl-mainpanel')
      

<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Buttons</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Buttons</h5>
          <p>Button styles for actions in forms, dialogs, and more with a handful of variations, sizes, states, and more.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Buttons</h6>
          <p class="mg-b-20 mg-sm-b-30">Twelve predefined button styles, each serving its own semantic purpose.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-primary btn-block mg-b-10">Primary</button>
                <button class="btn btn-primary active btn-block mg-b-10">Active</button>
                <button class="btn btn-primary disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-secondary btn-block mg-b-10">Secondary</button>
                <button class="btn btn-secondary active btn-block mg-b-10">Active</button>
                <button class="btn btn-secondary disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-success btn-block mg-b-10">Success</button>
                <button class="btn btn-success active btn-block mg-b-10">Active</button>
                <button class="btn btn-success disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-warning btn-block mg-b-10">Warning</button>
                <button class="btn btn-warning active btn-block mg-b-10">Active</button>
                <button class="btn btn-warning disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-50">
              <div class="btn-demo">
                <button class="btn btn-danger btn-block mg-b-10">Danger</button>
                <button class="btn btn-danger active btn-block mg-b-10">Active</button>
                <button class="btn btn-danger disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-50">
              <button class="btn btn-info btn-block mg-b-10">Info</button>
              <button class="btn btn-info active btn-block mg-b-10">Active</button>
              <button class="btn btn-info disabled btn-block mg-b-10">Disabled</button>
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-50">
              <button class="btn btn-indigo btn-block mg-b-10">Indigo</button>
              <button class="btn btn-indigo active btn-block mg-b-10">Active</button>
              <button class="btn btn-indigo disabled btn-block mg-b-10">Disabled</button>
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-50">
              <button class="btn btn-purple btn-block mg-b-10">Purple</button>
              <button class="btn btn-purple active btn-block mg-b-10">Active</button>
              <button class="btn btn-purple disabled btn-block mg-b-10">Disabled</button>
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-50">
              <button class="btn btn-pink btn-block mg-b-10">Pink</button>
              <button class="btn btn-pink active btn-block mg-b-10">Active</button>
              <button class="btn btn-pink disabled btn-block mg-b-10">Disabled</button>
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-50">
              <button class="btn btn-teal btn-block mg-b-10">Teal</button>
              <button class="btn btn-teal active btn-block mg-b-10">Active</button>
              <button class="btn btn-teal disabled btn-block mg-b-10">Disabled</button>
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-50">
              <button class="btn btn-dark btn-block mg-b-10">Dark</button>
              <button class="btn btn-dark active btn-block mg-b-10">Active</button>
              <button class="btn btn-dark disabled btn-block mg-b-10">Disabled</button>
            </div><!-- col-sm-3 -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;button class=&quot;btn btn-primary&quot;&gt;Primary&lt;/button&gt;
&lt;button class=&quot;btn btn-primary active&quot;&gt;Active&lt;/button&gt;
&lt;button class=&quot;btn btn-primary disabled&quot;&gt;Disabled&lt;/button&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Outline Buttons</h6>
          <p class="mg-b-20 mg-sm-b-30">Twelve predefined outline button styles, each serving its own semantic purpose.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <div class="btn-demo">
                <button class="btn btn-outline-primary btn-block mg-b-10">Primary</button>
                <button class="btn btn-outline-primary active btn-block mg-b-10">Active</button>
                <button class="btn btn-outline-primary disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <div class="btn-demo">
                <button class="btn btn-outline-secondary btn-block mg-b-10">Secondary</button>
                <button class="btn btn-outline-secondary active btn-block mg-b-10">Active</button>
                <button class="btn btn-outline-secondary disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-outline-success btn-block mg-b-10">Success</button>
                <button class="btn btn-outline-success active btn-block mg-b-10">Active</button>
                <button class="btn btn-outline-success disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->

            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <div class="btn-demo">
                <button class="btn btn-outline-warning btn-block mg-b-10">Warning</button>
                <button class="btn btn-outline-warning active btn-block mg-b-10">Active</button>
                <button class="btn btn-outline-warning disabled btn-block mg-b-10">Disabled</button>
              </div><!-- btn-demo -->
            </div><!-- col-sm-3 -->
          </div><!-- row -->
          <p class="mg-t-20 mg-b-0">Available in all colors same with the button above.</p>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Buttons With Icons</h6>
          <p class="mg-b-20 mg-sm-b-30">A button variant for basic and outline buttons with additional icons.</p>

          <div class="row">
            <div class="col-sm-6 col-md-3">
              <button class="btn btn-primary btn-block mg-b-10"><i class="fa fa-send mg-r-10"></i> Send Message</button>
              <button class="btn btn-outline-primary btn-block"><i class="fa fa-send mg-r-10"></i> Send Message</button>
            </div><!-- col-sm -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-sm-t-0">
              <button class="btn btn-warning btn-block mg-b-10"><i class="fa fa-shopping-cart mg-r-10"></i> Add to Cart</button>
              <button class="btn btn-outline-warning btn-block"><i class="fa fa-shopping-cart mg-r-10"></i> Add to Cart</button>
            </div><!-- col-sm -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <button class="btn btn-success btn-block mg-b-10"><i class="fa fa-download mg-r-10"></i> Download</button>
              <button class="btn btn-outline-success btn-block"><i class="fa fa-download mg-r-10"></i> Download</button>
            </div><!-- col-sm -->
            <div class="col-sm-6 col-md-3 mg-t-20 mg-md-t-0">
              <button class="btn btn-danger btn-block mg-b-10"><i class="fa fa-envelope mg-r-10"></i> Compose</button>
              <button class="btn btn-outline-danger btn-block"><i class="fa fa-envelope mg-r-10"></i> Compose</button>
            </div><!-- col-sm -->
          </div><!-- row -->
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Icon Only Buttons</h6>
          <p class="mg-b-20 mg-sm-b-30">A button variant for using only icons.</p>

          <div class="row">
            <div class="col-md-6">
              <a href="#" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-send"></i></div></a>
              <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-envelope-o"></i></div></a>
              <a href="#" class="btn btn-dark btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-cog"></i></div></a>
              <a href="#" class="btn btn-warning btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-feed"></i></div></a>
              <a href="#" class="btn btn-success btn-icon mg-b-10"><div><i class="fa fa-share-alt"></i></div></a>
              <br>
              <a href="#" class="btn btn-outline-primary btn-icon mg-r-5"><div><i class="fa fa-send"></i></div></a>
              <a href="#" class="btn btn-outline-danger btn-icon mg-r-5"><div><i class="fa fa-envelope-o"></i></div></a>
              <a href="#" class="btn btn-outline-dark btn-icon mg-r-5"><div><i class="fa fa-cog"></i></div></a>
              <a href="#" class="btn btn-outline-warning btn-icon mg-r-5"><div><i class="fa fa-feed"></i></div></a>
              <a href="#" class="btn btn-outline-success btn-icon"><div><i class="fa fa-share-alt"></i></div></a>
            </div>
            <div class="col-md-6 mg-t-10 mg-md-t-0">
              <a href="#" class="btn btn-primary btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-facebook"></i></div></a>
              <a href="#" class="btn btn-info btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-twitter"></i></div></a>
              <a href="#" class="btn btn-danger btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-google-plus"></i></div></a>
              <a href="#" class="btn btn-dark btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-codepen"></i></div></a>
              <a href="#" class="btn btn-warning btn-icon mg-r-5 mg-b-10"><div><i class="fa fa-stack-overflow"></i></div></a>
              <br>
              <a href="#" class="btn btn-outline-primary btn-icon mg-r-5"><div><i class="fa fa-facebook"></i></div></a>
              <a href="#" class="btn btn-outline-info btn-icon mg-r-5"><div><i class="fa fa-twitter"></i></div></a>
              <a href="#" class="btn btn-outline-danger btn-icon mg-r-5"><div><i class="fa fa-google-plus"></i></div></a>
              <a href="#" class="btn btn-outline-dark btn-icon mg-r-5"><div><i class="fa fa-codepen"></i></div></a>
              <a href="#" class="btn btn-outline-warning btn-icon mg-r-5"><div><i class="fa fa-stack-overflow"></i></div></a>
            </div>
          </div><!-- row -->

          <div class="row mg-t-40">
            <div class="col-md-6">
              <a href="#" class="btn btn-primary btn-icon rounded-circle mg-r-5 mg-b-10">
                <div><i class="fa fa-send"></i></div>
              </a>
              <a href="#" class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-envelope-o"></i></div></a>
              <a href="#" class="btn btn-dark btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-cog"></i></div></a>
              <a href="#" class="btn btn-warning btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-feed"></i></div></a>
              <a href="#" class="btn btn-success btn-icon rounded-circle mg-b-10"><div><i class="fa fa-share-alt"></i></div></a>
              <br>
              <a href="#" class="btn btn-outline-primary btn-icon rounded-circle mg-r-5"><div><i class="fa fa-send"></i></div></a>
              <a href="#" class="btn btn-outline-danger btn-icon rounded-circle mg-r-5"><div><i class="fa fa-envelope-o"></i></div></a>
              <a href="#" class="btn btn-outline-dark btn-icon rounded-circle mg-r-5"><div><i class="fa fa-cog"></i></div></a>
              <a href="#" class="btn btn-outline-warning btn-icon rounded-circle mg-r-5"><div><i class="fa fa-feed"></i></div></a>
              <a href="#" class="btn btn-outline-success btn-icon rounded-circle"><div><i class="fa fa-share-alt"></i></div></a>
            </div>
            <div class="col-md-6 mg-t-10 mg-md-t-0">
              <a href="#" class="btn btn-primary btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-facebook"></i></div></a>
              <a href="#" class="btn btn-info btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-twitter"></i></div></a>
              <a href="#" class="btn btn-danger btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-google-plus"></i></div></a>
              <a href="#" class="btn btn-dark btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-codepen"></i></div></a>
              <a href="#" class="btn btn-warning btn-icon rounded-circle mg-r-5 mg-b-10"><div><i class="fa fa-stack-overflow"></i></div></a>
              <br>
              <a href="#" class="btn btn-outline-primary btn-icon rounded-circle mg-r-5"><div><i class="fa fa-facebook"></i></div></a>
              <a href="#" class="btn btn-outline-info btn-icon rounded-circle mg-r-5"><div><i class="fa fa-twitter"></i></div></a>
              <a href="#" class="btn btn-outline-danger btn-icon rounded-circle mg-r-5"><div><i class="fa fa-google-plus"></i></div></a>
              <a href="#" class="btn btn-outline-dark btn-icon rounded-circle mg-r-5"><div><i class="fa fa-codepen"></i></div></a>
              <a href="#" class="btn btn-outline-warning btn-icon rounded-circle mg-r-5"><div><i class="fa fa-stack-overflow"></i></div></a>
            </div>
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;a href=&quot;#&quot; class=&quot;btn btn-primary btn-icon&quot;&gt;
  &lt;div&gt;&lt;i class=&quot;fa fa-send&quot;&gt;&lt;/i&gt;&lt;/div&gt;
&lt;/a&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Button Groups</h6>
          <p class="mg-b-20 mg-sm-b-30">Group a series of buttons together on a single line with the button group.</p>

          <div class="row">
            <div class="col-lg-5">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary pd-x-25 active">General</button>
                <button type="button" class="btn btn-secondary pd-x-25">Privacy</button>
                <button type="button" class="btn btn-secondary pd-x-25">Account</button>
              </div>
            </div><!-- col-7 -->
            <div class="col-lg-5 mg-t-20 mg-lg-t-0">
              <div class="btn-group" role="group" aria-label="Basic example">
                <button type="button" class="btn btn-secondary active"><i class="fa fa-home"></i></button>
                <button type="button" class="btn btn-secondary"><i class="fa fa-envelope"></i></button>
                <button type="button" class="btn btn-secondary"><i class="fa fa-cog"></i></button>
              </div>
            </div><!-- col-5 -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre class="mg-b-0"><code class="html pd-20">&lt;div class=&quot;btn-group&quot; role=&quot;group&quot; aria-label=&quot;Basic example&quot;&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary pd-x-25 active&quot;&gt;General Settings&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary pd-x-25&quot;&gt;Privacy Settings&lt;/button&gt;
  &lt;button type=&quot;button&quot; class=&quot;btn btn-secondary pd-x-25&quot;&gt;Account Settings&lt;/button&gt;
&lt;/div&gt;</code></pre>

      </div><!-- sl-pagebody -->







@endsection

@push('js')
 
	 <script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script

@endpush