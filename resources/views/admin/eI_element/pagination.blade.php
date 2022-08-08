@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   
     <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
@endpush
@section('sl-mainpanel')
      
 <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Pagination</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Pagination</h5>
          <p>Documentation and examples for showing pagination to indicate a series of related content exists across multiple pages.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Pagination</h6>
          <p class="mg-b-20 mg-sm-b-30">Below are basic pagination navigation.</p>

          <div class="ht-80 bd d-flex align-items-center justify-content-center">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-basic mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item"><a class="page-link" href="#">4</a></li>
                <li class="page-item"><a class="page-link" href="#">5</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;ht-80 bd d-flex align-items-center justify-content-center&quot;&gt;
  &lt;nav aria-label=&quot;Page navigation&quot;&gt;
    &lt;ul class=&quot;pagination pagination-basic mg-b-0&quot;&gt;
      &lt;li class=&quot;page-item active&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item disabled&quot;&gt;&lt;span class=&quot;page-link&quot;&gt;...&lt;/span&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;&lt;a class=&quot;page-link&quot; href=&quot;#&quot;&gt;10&lt;/a&gt;&lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Next&quot;&gt;
          &lt;i class=&quot;fa fa-angle-right&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
      &lt;/li&gt;
      &lt;li class=&quot;page-item&quot;&gt;
        &lt;a class=&quot;page-link&quot; href=&quot;#&quot; aria-label=&quot;Last&quot;&gt;
          &lt;i class=&quot;fa fa-angle-double-right&quot;&gt;&lt;/i&gt;
        &lt;/a&gt;
      &lt;/li&gt;
    &lt;/ul&gt;
  &lt;/nav&gt;
&lt;/div&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Pagination for Dark Background</h6>
          <p class="mg-b-20 mg-sm-b-30">Below are basic pagination navigation for dark background.</p>

          <div class="ht-80 bg-gray-800 d-flex align-items-center justify-content-center">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-dark mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item hidden-xs-down"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Last">
                    <i class="fa fa-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="ht-80 bg-info d-flex align-items-center justify-content-center mg-t-20">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-dark mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item hidden-xs-down"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Last">
                    <i class="fa fa-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;div class=&quot;ht-80 bd bg-dark d-flex align-items-center justify-content-center&quot;&gt;
  &lt;ul class=&quot;pagination pagination-dark mg-b-0&quot;&gt;
    ...
  &lt;/ul&gt;
&lt;/div&gt;</code></pre>


        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Colored Pagination</h6>
          <p class="mg-b-20 mg-sm-b-30">Below are the available colored pagination variants.</p>

          <div class="ht-80 bd d-flex align-items-center justify-content-center">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-basic pagination-primary mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item hidden-xs-down"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Last">
                    <i class="fa fa-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>

          <div class="ht-80 bg-gray-800 d-flex align-items-center justify-content-center mg-t-20">
            <nav aria-label="Page navigation">
              <ul class="pagination pagination-dark pagination-danger mg-b-0">
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item hidden-xs-down"><a class="page-link" href="#">3</a></li>
                <li class="page-item disabled"><span class="page-link">...</span></li>
                <li class="page-item"><a class="page-link" href="#">10</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <i class="fa fa-angle-right"></i>
                  </a>
                </li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Last">
                    <i class="fa fa-angle-double-right"></i>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre class="mg-b-0"><code class="html pd-20">&lt;div class=&quot;ht-80 bd d-flex align-items-center justify-content-center&quot;&gt;
  &lt;ul class=&quot;pagination pagination-basic pagination-primary mg-b-0&quot;&gt;
    ...
  &lt;/ul&gt;
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