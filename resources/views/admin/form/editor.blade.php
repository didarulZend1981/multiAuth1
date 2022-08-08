@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
  
    <!-- <link href="{{ asset('backend') }}/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/Ionicons/css/ionicons.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/highlightjs/github.css" rel="stylesheet"> -->
    <link href="{{ asset('backend') }}/lib/medium-editor/medium-editor.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/medium-editor/default.css" rel="stylesheet">
    <link href="{{ asset('backend') }}/lib/summernote/summernote-bs4.css" rel="stylesheet">


    <!-- Starlight CSS -->
    <!-- <link rel="stylesheet" href="{{ asset('backend') }}/css/starlight.css"> -->
  </head>
    
    
@endpush
@section('sl-mainpanel')
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Text Editor</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Text Editor</h5>
          <p>A WYSIWYG is one that allows a developer to see what the end result will look like while the interface or document is being created.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Medium Editor Plugin</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of a basic inline editing using medium-editor.</p>

          <p>Try highlighting some of the text below.</p>
          <div class="editable tx-16 bd pd-30 tx-inverse">One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided by arches into stiff sections.</div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">HTML Code</p>
        <pre><code class="html pd-20">&lt;div class="editable"&gt;One morning, when...&lt;/div&gt;</code></pre>

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre><code class="javascript pd-20">var editor = new MediumEditor('.editable');</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Summernote Editor</h6>
          <p class="mg-b-20 mg-sm-b-30">A super simple WYSIWYG editor on Bootstrap.</p>
          <div id="summernote">Hello, universe!</div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">HTML Code</p>
        <pre><code class="html pd-20">&lt;div id="summernote"&gt;Hello, universe!&lt;/div&gt;</code></pre>

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
        <pre class="mg-b-0"><code class="javascript pd-20">$('#summernote').summernote({
height: 150
})</code></pre>

      </div><!-- sl-pagebody -->
      
  

@endsection

@push('js')
<!-- test -->

  <script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
  <script src="{{ asset('backend') }}/lib/medium-editor/medium-editor.js"></script>
  <script src="{{ asset('backend') }}/lib/summernote/summernote-bs4.min.js"></script>

 


<script>
      $(function(){
        'use strict';

        // Inline editor
        var editor = new MediumEditor('.editable');


        // Summernote editor
        $('#summernote').summernote({
          height: 150,
          tooltip: false
        })
      });
    </script>

@endpush
