@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   	<link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    
@endpush
@section('sl-mainpanel')
      
 <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">UI Elements</a>
        <span class="breadcrumb-item active">Typography</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Typography</h5>
          <p>Bootstrap sets basic global display, typography, and link styles.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Font Family</h6>
          <p class="mg-b-20 mg-sm-b-30">The base font family we used in this template.</p>

          <div class="row tx-roboto">
            <div class="col-sm-4">
              <span class="tx-uppercase tx-12 tx-medium d-block mg-b-15">Primary</span>
              <h1 class="display-1 pd-30 bg-gray-200 tx-inverse tx-center mg-b-15">Rr</h1>
              <h4 class="tx-inverse tx-normal">Roboto, sans-serif; </h4>
            </div><!-- col-4 -->
            <div class="col-sm offset-sm-1">
              <span class="tx-uppercase tx-medium tx-12 d-block mg-b-15">Styles</span>
              <h1 class="tx-inverse mg-b-0 tx-light">Light</h1>
              <h1 class="tx-inverse mg-b-0 tx-normal">Regular</h1>
              <h1 class="tx-inverse mg-b-0 tx-medium">Medium</h1>
              <h1 class="tx-inverse mg-b-0 tx-bold">Bold</h1>
            </div>
          </div><!-- row -->
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Headings</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of a single media object. </p>

          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 1 - 2.5rem/40px</span>
          <h1 class="tx-inverse ">Blockbox Multi-Purpose HTML5 Template</h1>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 2 - 2rem/32px</span>
          <h2 class="tx-inverse ">Blockbox Multi-Purpose HTML5 Template</h2>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 3 - 1.75rem/28px</span>
          <h3 class="tx-inverse ">Blockbox Multi-Purpose HTML5 Template</h3>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 4 - 1.5rem/24px</span>
          <h4 class="tx-inverse ">Blockbox Multi-Purpose HTML5 Template</h4>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 5 - 1.25rem/20px</span>
          <h5 class="tx-inverse ">Blockbox Multi-Purpose HTML5 Template</h5>
          <hr>
          <span class="tx-12 tx-uppercase d-block mg-b-5">Heading 6 - 1rem/16px</span>
          <h6 class="tx-inverse mg-b-0">Blockbox Multi-Purpose HTML5 Template</h6>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Lead</h6>
          <p class="mg-b-20 mg-sm-b-30">Make a paragraph stand out by adding <code class="code-base">.lead</code> class</p>
          <p class="lead pd-30 bg-primary tx-white mg-b-0">Be who you are and say what you feel, because those who mind don't matter, and those who matter don't mind.</p>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Inline Elements</h6>
          <p class="mg-b-20 mg-sm-b-30">Styling for common inline elements.</p>
          <p>You can use the mark tag to <mark>highlight</mark> text.</p>
          <p><s>This line of text is meant to be treated as no longer accurate.</s></p>
          <p><u>This line of text will render as underlined</u></p>
          <p><small>This line of text is meant to be treated as fine print.</small></p>
          <p><strong>This line rendered as bold text.</strong></p>
          <p class="mg-b-0"><em>This line rendered as italicized text.</em></p>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Blockquotes</h6>
          <p class="mg-b-20 mg-sm-b-30">For quoting blocks of content from another source within your document.</p>
          <blockquote class="blockquote bd-l bd-5 pd-l-20">
            <p class="mg-b-5 tx-inverse">Two things are infinite: the universe and human stupidity; and I'm not sure about the universe.</p>
            <footer class="blockquote-footer tx-14">Albert Einstein</footer>
          </blockquote>
        </div><!-- card -->

        <div class="card pd-20 pd-sm-40 mg-t-25">
          <h6 class="card-body-title">Description List Alignment</h6>
          <p class="mg-b-20 mg-sm-b-30">Align terms and descriptions horizontally by using our grid system’s predefined classes.</p>

          <dl class="row">
            <dt class="col-sm-3 tx-inverse">Description lists</dt>
            <dd class="col-sm-9">A description list is perfect for defining terms.</dd>

            <dt class="col-sm-3 tx-inverse">Euismod</dt>
            <dd class="col-sm-9">
              <p class="mg-b-10">Vestibulum id ligula porta felis euismod semper eget lacinia odio sem nec elit.</p>
              <p>Donec id elit non mi porta gravida at eget metus.</p>
            </dd>

            <dt class="col-sm-3 tx-inverse">Malesuada porta</dt>
            <dd class="col-sm-9">Etiam porta sem malesuada magna mollis euismod.</dd>

            <dt class="col-sm-3 text-truncate tx-inverse">Truncated term is truncated</dt>
            <dd class="col-sm-9">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</dd>

            <dt class="col-sm-3 tx-inverse">Nesting</dt>
            <dd class="col-sm-9">
              <dl class="row">
                <dt class="col-sm-4 tx-inverse">Nested definition list</dt>
                <dd class="col-sm-8">Aenean posuere, tortor sed cursus feugiat, nunc augue blandit nunc.</dd>
              </dl>
            </dd>
          </dl>
        </div><!-- card -->

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