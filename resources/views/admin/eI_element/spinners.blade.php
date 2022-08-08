@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/SpinKit/spinkit.css" rel="stylesheet">

@endpush
@section('sl-mainpanel')
      
	
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Spinners</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Spinners</h5>
          <p>A collection of loading indicators animated with CSS.</p>
        </div><!-- sl-page-title -->

        <div class="row">
          <div class="col-md-6 col-xl-4">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-rotating-plane bg-gray-800"></div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-xl-4 mg-t-30 mg-sm-t-0">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-double-bounce">
                <div class="sk-child sk-double-bounce1 bg-gray-800"></div>
                <div class="sk-child sk-double-bounce2 bg-gray-800"></div>
              </div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-xl-4 mg-t-30 mg-xl-t-0">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-wave">
                <div class="sk-rect sk-rect1 bg-gray-800"></div>
                <div class="sk-rect sk-rect2 bg-gray-800"></div>
                <div class="sk-rect sk-rect3 bg-gray-800"></div>
                <div class="sk-rect sk-rect4 bg-gray-800"></div>
                <div class="sk-rect sk-rect5 bg-gray-800"></div>
              </div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-xl-4 mg-t-30">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-spinner sk-spinner-pulse bg-gray-800"></div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-xl-4 mg-t-30">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-chasing-dots">
                <div class="sk-child sk-dot1 bg-gray-800"></div>
                <div class="sk-child sk-dot2 bg-gray-800"></div>
              </div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-xl-4 mg-t-30">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-circle">
                <div class="sk-circle1 sk-child"></div>
                <div class="sk-circle2 sk-child"></div>
                <div class="sk-circle3 sk-child"></div>
                <div class="sk-circle4 sk-child"></div>
                <div class="sk-circle5 sk-child"></div>
                <div class="sk-circle6 sk-child"></div>
                <div class="sk-circle7 sk-child"></div>
                <div class="sk-circle8 sk-child"></div>
                <div class="sk-circle9 sk-child"></div>
                <div class="sk-circle10 sk-child"></div>
                <div class="sk-circle11 sk-child"></div>
                <div class="sk-circle12 sk-child"></div>
              </div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-xl-4 mg-t-30">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-three-bounce">
                <div class="sk-child sk-bounce1 bg-gray-800"></div>
                <div class="sk-child sk-bounce2 bg-gray-800"></div>
                <div class="sk-child sk-bounce3 bg-gray-800"></div>
              </div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-xl-4 mg-t-30">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-cube-grid">
                <div class="sk-cube sk-cube1"></div>
                <div class="sk-cube sk-cube2"></div>
                <div class="sk-cube sk-cube3"></div>
                <div class="sk-cube sk-cube4"></div>
                <div class="sk-cube sk-cube5"></div>
                <div class="sk-cube sk-cube6"></div>
                <div class="sk-cube sk-cube7"></div>
                <div class="sk-cube sk-cube8"></div>
                <div class="sk-cube sk-cube9"></div>
              </div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
          <div class="col-md-6 col-xl-4 mg-t-30">
            <div class="d-flex bg-gray-200 ht-300 pos-relative align-items-center">
              <div class="sk-folding-cube">
                <div class="sk-cube1 sk-cube"></div>
                <div class="sk-cube2 sk-cube"></div>
                <div class="sk-cube4 sk-cube"></div>
                <div class="sk-cube3 sk-cube"></div>
              </div>
            </div><!-- d-flex -->
          </div><!-- col-4 -->
        </div><!-- row -->

      </div><!-- sl-pagebody -->
      

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