@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    
@endpush
@section('sl-mainpanel')
      
<nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Cards</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Cards</h5>
          <p>A card is a flexible and extensible content container that includes options for headers and footers, etc.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Card Body</h6>
          <p class="mg-b-20 mg-sm-b-30">An example some text within a card body.</p>

          <div class="row mg-b-20">
            <div class="col-md">
              <div class="card card-body bg-gray-200">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card card-body bg-primary tx-white bd-0">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card card-body bg-dark tx-white bd-0">
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;card card-body&quot;&gt;
  &lt;p class=&quot;card-text&quot;&gt;...&lt;/p&gt;
&lt;/div&gt;&lt;!-- card --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Card Titles, Text and Links</h6>
          <p class="mg-b-20 mg-sm-b-30">An example of using card title. In the same way, links are added and placed next to each other by adding link tag.</p>

          <div class="row">
            <div class="col-md">
              <div class="card bg-gray-200">
                <div class="card-body">
                  <h5 class="card-body-title">The Card Title</h5>
                  <p class="card-subtitle tx-normal mg-b-15">This is the card subtitle</p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link">Card link</a>
                  <a href="#" class="card-link">Another link</a>
                </div>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bg-info tx-white bd-0">
                <div class="card-body">
                  <h5 class="card-body-title tx-white">The Card Title</h5>
                  <p class="card-subtitle tx-normal mg-b-15 tx-white-8">This is the card subtitle</p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link tx-white-7 hover-white">Card link</a>
                  <a href="#" class="card-link tx-white-7 hover-white">Another link</a>
                </div>
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bg-dark tx-white bd-0">
                <div class="card-body">
                  <h5 class="card-body-title tx-white">The Card Title</h5>
                  <p class="card-subtitle tx-normal tx-white-8 mg-b-15">This is the card subtitle</p>
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                  <a href="#" class="card-link tx-white-7 hover-white">Card link</a>
                  <a href="#" class="card-link tx-white-7 hover-white">Another link</a>
                </div>
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body&quot;&gt;
    &lt;h5 class=&quot;card-title&quot;&gt;The Card Title&lt;/h5&gt;
    &lt;p class=&quot;card-subtitle&quot;&gt;This is the card subtitle&lt;/p&gt;
    &lt;p class=&quot;card-text&quot;&gt;...&lt;/p&gt;
    &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Card link&lt;/a&gt;
    &lt;a href=&quot;#&quot; class=&quot;card-link&quot;&gt;Another link&lt;/a&gt;
  &lt;/div&gt;
&lt;/div&gt;&lt;!-- card --&gt;</code></pre>

        <div class="row row-sm mg-t-50">
          <div class="col-lg-6">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Card Image Top</h6>
              <p class="mg-b-20 mg-sm-b-30">Places an image to the top of the card.</p>

              <div class="card bd-0 wd-xs-300">
                <img class="card-img-top img-fluid" src="{{ asset('backend') }}/img/img12.jpg" alt="Image">
                <div class="card-body bd bd-t-0">
                  <h6 class="mg-b-3"><a href="" class="tx-dark">How to Be a Good Leader</a></h6>
                  <span class="tx-12">March 21, 2017 8:30pm</span>
                </div>
              </div>
            </div><!-- card -->
          </div><!-- col-6 -->
          <div class="col-lg-6 mg-t-25 mg-lg-t-0">
            <div class="card pd-20 pd-sm-40">
              <h6 class="card-body-title">Card Image Bottom</h6>
              <p class="mg-b-20 mg-sm-b-30">Places an image to the bottom of the card.</p>
              <div class="card wd-xs-300">
                <div class="card-body bd bd-b-0">
                  <h6 class="mg-b-3"><a href="" class="tx-dark">How to Be a Good Leader</a></h6>
                  <span class="tx-12">March 21, 2017 8:30pm</span>
                </div><!-- card-body -->
                <img class="card-img-bottom img-fluid" src="{{ asset('backend') }}/img/img12.jpg" alt="Image">
              </div><!-- card -->
            </div><!-- card -->
          </div><!-- col-6 -->
        </div><!-- row -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Image Overlays</h6>
          <p class="mg-b-20 mg-sm-b-30">Turn an image into a card background and overlay your card’s text.</p>

          <div class="row">
            <div class="col-md">
              <div class="card bd-0">
                <img class="card-img img-fluid" src="{{ asset('backend') }}/img/img11.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">The Cat Prisoner</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                  <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <img class="card-img img-fluid" src="{{ asset('backend') }}/img/img11.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">The Ghost Town</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                  <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <img class="card-img img-fluid" src="{{ asset('backend') }}/img/img11.jpg" alt="Image">
                <div class="card-img-overlay pd-30 d-flex align-items-start flex-column">
                  <h6 class="tx-white mg-b-15">The Green Leaves</h6>
                  <p class="tx-white tx-white-7 mg-b-auto">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                  <p class="mg-b-0"><a href="" class="tx-white">Read more</a></p>
                </div><!-- card-img-overlay -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;card bd-0&quot;&gt;
  &lt;img class=&quot;card-img img-fluid&quot; src=&quot;{{ asset('backend') }}/img/img11.jpg&quot; alt=&quot;Image&quot;&gt;
  &lt;div class=&quot;card-img-overlay pd-30 d-flex align-items-start flex-column&quot;&gt;
    &lt;h6 class=&quot;tx-white mg-b-15&quot;&gt;The Green Leaves&lt;/h6&gt;
    &lt;p class=&quot;tx-white tx-white-7 mg-b-auto&quot;&gt;...&lt;/p&gt;
    &lt;p class=&quot;mg-b-0&quot;&gt;&lt;a href=&quot;&quot; class=&quot;tx-white&quot;&gt;Read more&lt;/a&gt;&lt;/p&gt;
  &lt;/div&gt;&lt;!-- card-img-overlay --&gt;
&lt;/div&gt;&lt;!-- card --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Card Header With Color Variations</h6>
          <p class="mg-b-20 mg-sm-b-30">Add an optional header within a card.</p>

          <div class="row">
            <div class="col-md-4">
              <div class="card rounded-0">
                <div class="card-header card-header-default">
                  Description
                </div><!-- card-header -->
                <div class="card-body bg-gray-200">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-primary">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-success">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-warning">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-danger">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-info">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-indigo">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-purple">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-pink">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-orange">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-teal">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->

            <div class="col-md-4 mg-t-20">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-dark">
                  Description
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;card bd-0&quot;&gt;
  &lt;div class=&quot;card-header card-header-default bg-primary&quot;&gt;
    Description
  &lt;/div&gt;&lt;!-- card-header --&gt;
  &lt;div class=&quot;card-body bd bd-t-0 rounded-bottom&quot;&gt;
    ...
  &lt;/div&gt;&lt;!-- card-body --&gt;
&lt;/div&gt;&lt;!-- card --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Card With Footer</h6>
          <p class="mg-b-20 mg-sm-b-30">Add an optional footer within a card.</p>

          <div class="row">
            <div class="col-md">
              <div class="card bg-gray-200">
                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bg-gray-400">
                  January, 20, 2017 4:30am
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bg-gray-200">
                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bg-gray-400 tx-center">
                  <a href="">Read more</a>
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bg-gray-200">
                <div class="card-body">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bg-gray-400 tx-right">
                  Share
                  <i class="fa fa-facebook-official mg-l-5 mg-r-5"></i>
                  <i class="fa fa-twitter"></i>
                </div><!-- card-footer -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;card&quot;&gt;
  &lt;div class=&quot;card-body color-gray-lighter&quot;&gt;...&lt;/div&gt;
  &lt;div class=&quot;card-footer&quot;&gt;
    ...
  &lt;/div&gt;&lt;!-- card-footer --&gt;
&lt;/div&gt;&lt;!-- card --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Card With Navigation</h6>
          <p class="mg-b-20 mg-sm-b-30">Add a navigation in header of a card.</p>

          <div class="row">
            <div class="col-md">
              <div class="card bd">
                <div class="card-header bd-b">
                  <ul class="nav nav-tabs card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link active" href="#">Popular</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#">Recent</a>
                    </li>
                  </ul>
                </div><!-- card-header -->
                <div class="card-body color-gray-lighter">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header bg-dark">
                  <ul class="nav nav-tabs nav-tabs-for-dark card-header-tabs">
                    <li class="nav-item">
                      <a class="nav-link bd-0 active pd-y-8" href="#">Popular</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link bd-0 tx-gray-light" href="#">Recent</a>
                    </li>
                  </ul>
                </div><!-- card-header -->
                <div class="card-body bd bd-t-0">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;card bd-0&quot;&gt;
  &lt;div class=&quot;card-header bg-dark&quot;&gt;
    &lt;ul class=&quot;nav nav-tabs nav-tabs-for-dark card-header-tabs&quot;&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link bd-0 active pd-y-8&quot; href=&quot;#&quot;&gt;Popular&lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;nav-item&quot;&gt;
        &lt;a class=&quot;nav-link bd-0 tx-gray-light&quot; href=&quot;#&quot;&gt;Recent&lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/div&gt;&lt;!-- card-header --&gt;
  &lt;div class=&quot;card-body&quot;&gt;...&lt;/div&gt;
&lt;/div&gt;&lt;!-- card --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Background Variants</h6>
          <p class="mg-b-20 mg-sm-b-30">Cards include their own variant classes for quickly changing card background.</p>

          <div class="row">
            <div class="col-md">
              <div class="card card-body tx-white-8 bg-primary bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card card-body tx-white-8 bg-success bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md mg-t-20 mg-md-t-0">
              <div class="card card-body tx-white-8 bg-warning bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->

          <div class="row mg-t-20">
            <div class="col-md-4">
              <div class="card card-body tx-white-8 bg-danger bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card card-body tx-white-8 bg-info bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
            <div class="col-md-4 mg-t-20 mg-md-t-0">
              <div class="card card-body tx-white-8 bg-dark bd-0">
                Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur.
              </div><!-- card -->
            </div><!-- col -->
          </div><!-- row -->
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;card card-body tx-white bg-dark bd-0&quot;&gt;
  Some quick example text to build on the card title...
&lt;/div&gt;&lt;!-- card --&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Card with Buttons &amp; Options</h6>
          <p class="mg-b-20 mg-sm-b-30">Cards with some options in the right corner of header of card.</p>

          <div class="row">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-default justify-content-between bg-gray-400">
                  <h6 class="mg-b-0 tx-14 tx-inverse">Some Information</h6>
                  <div class="card-option tx-24">
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
                  </div><!-- card-option -->
                </div><!-- card-header -->
                <div class="card-body bg-gray-200">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-30 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header card-header-default justify-content-between">
                  <h6 class="mg-b-0 tx-14 tx-white tx-normal">Some Information</h6>
                  <div class="card-option tx-24">
                    <a href="" class="tx-gray-600 hover-white mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
                    <a href="" class="tx-gray-600 hover-white mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
                    <a href="" class="tx-gray-600 hover-white mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
                  </div><!-- card-option -->
                </div><!-- card-header -->
                <div class="card-body bg-gray-200">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
              </div><!-- card -->
            </div><!-- col-6 -->
          </div><!-- row -->

          <div class="row mg-t-30">
            <div class="col-md-6">
              <div class="card">
                <div class="card-header card-header-default bg-gray-400 justify-content-between">
                  <h6 class="mg-b-0 tx-14 tx-inverse">Some Information</h6>
                  <div class="card-option tx-24">
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
                    <a href="" class="tx-gray-600 mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
                  </div><!-- card-option -->
                </div><!-- card-header -->
                <div class="card-body bg-gray-200">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer tx-center bg-gray-300">
                  <a href="" class="btn btn-info">Continue</a>
                  <a href="" class="btn btn-secondary">Cancel</a>
                </div>
              </div><!-- card -->
            </div><!-- col-6 -->
            <div class="col-md-6 mg-t-30 mg-md-t-0">
              <div class="card bd-0">
                <div class="card-header card-header-default bg-info justify-content-between">
                  <h6 class="mg-b-0 tx-14 tx-white tx-normal">Some Information</h6>
                  <div class="card-option tx-24">
                    <a href="" class="tx-white-8 hover-white mg-l-10"><i class="icon ion-ios-refresh-empty lh-0"></i></a>
                    <a href="" class="tx-white-8 hover-white mg-l-10"><i class="icon ion-ios-arrow-down lh-0"></i></a>
                    <a href="" class="tx-white-8 hover-white mg-l-10"><i class="icon ion-android-more-vertical lh-0"></i></a>
                  </div><!-- card-option -->
                </div><!-- card-header -->
                <div class="card-body bg-gray-200">
                  <p class="mg-b-0">Some quick example text to build on the card title and make up the bulk of the card's content. Lorem ipsum dolor sit amet consictetur...</p>
                </div><!-- card-body -->
                <div class="card-footer bg-gray-300 d-flex justify-content-between">
                  <a href="" class="btn btn-info">Continue</a>
                  <a href="" class="btn btn-secondary">Cancel</a>
                </div>
              </div><!-- card -->
            </div><!-- col-6 -->
          </div><!-- row -->
        </div><!-- card -->

      </div><!-- sl-pagebody -->








@endsection

@push('js')
 
	<script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>

@endpush