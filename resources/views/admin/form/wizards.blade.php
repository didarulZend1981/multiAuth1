@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')
   <!-- test -->
       <link href="{{ asset('backend') }}/lib/jquery.steps/jquery.steps.css" rel="stylesheet">
       <link href="{{ asset('backend') }}/css/starlight.css" rel="stylesheet">
    
@endpush
@section('sl-mainpanel')
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Wizards</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Form Wizards</h5>
          <p>jQuery Steps, an all-in-one wizard plugin that is extremely flexible, compact and feature-rich.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Basic Content Wizard</h6>
          <p class="mg-b-20 mg-sm-b-30">Below is an example of a basic horizontal form wizard.</p>

          <div id="wizard1">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">HTML Code</p>
        <pre><code class="html pd-20">&lt;div id=&quot;wizard1&quot;&gt;
  &lt;h3&gt;Personal Information&lt;/h3&gt;
  &lt;section&gt;
    &lt;p&gt;Try the keyboard navigation by clicking arrow left or right!&lt;/p&gt;
  &lt;/section&gt;
  &lt;h3&gt;Billing Information&lt;/h3&gt;
  &lt;section&gt;
    &lt;p&gt;Wonderful transition effects.&lt;/p&gt;
  &lt;/section&gt;
  &lt;h3&gt;Payment Details&lt;/h3&gt;
  &lt;section&gt;
    &lt;p&gt;The next and previous buttons help you to navigate through your content.&lt;/p&gt;
  &lt;/section&gt;
&lt;/div&gt;</code></pre>

<p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Javascript Code</p>
<pre><code class="javascript pd-20">$('#wizard1').steps({
  headerTag: 'h3',
  bodyTag: 'section',
  autoFocus: true,
  titleTemplate: '<span class="number">#index#</span> #title#'
});</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Basic Form Wizard with Validation</h6>
          <p class="mg-b-20 mg-sm-b-30">A basic form wizard with form validation using Parsley js form validation plugin.</p>

          <div id="wizard2">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Firstname: <span class="tx-danger">*</span></label>
                <input id="firstname" class="form-control" name="firstname" placeholder="Enter firstname" type="text" required>
              </div><!-- form-group -->
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Lastname: <span class="tx-danger">*</span></label>
                <input id="lastname" class="form-control" name="lastname" placeholder="Enter lastname" type="text" required>
              </div><!-- form-group -->
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
              <div class="form-group wd-xs-300">
                <label class="form-control-label">Email: <span class="tx-danger">*</span></label>
                <input id="email" class="form-control" name="email" placeholder="Enter email address" type="email" required>
              </div><!-- form-group -->
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Additional Option Code</p>
        <pre><code class="javascript pd-20">onStepChanging: function (event, currentIndex, newIndex) {
  if(currentIndex &lt; newIndex) {
    // Step 1 form validation
    if(currentIndex === 0) {
      var fname = $('#firstname').parsley();
      var lname = $('#lastname').parsley();

      if(fname.isValid() &amp;&amp; lname.isValid()) {
        return true;
      } else {
        fname.validate();
        lname.validate();
      }
    }

    // Step 2 form validation
    if(currentIndex === 1) {
      var email = $('#email').parsley();
      if(email.isValid()) {
        return true;
      } else { email.validate(); }
    }
  // Always allow step back to the previous step even if the current step is not valid.
  } else { return true; }
}</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Vertical Orientation Wizard</h6>
          <p class="mg-b-20 mg-sm-b-30">A basic content wizard with vertical orientation.</p>

          <div id="wizard3">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Additional Option Code</p>
        <pre><code class="javascript pd-20">stepsOrientation: 1</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Step Indicator Auto Equal Width</h6>
          <p class="mg-b-20 mg-sm-b-30">A basic wizard that adds a custom style to make the step indicator equal width.</p>

          <div id="wizard4">
            <h3>Personal Information</h3>
            <section>
              <p>Try the keyboard navigation by clicking arrow left or right!</p>
            </section>
            <h3>Billing Information</h3>
            <section>
              <p>Wonderful transition effects.</p>
            </section>
            <h3>Payment Details</h3>
            <section>
              <p>The next and previous buttons help you to navigate through your content.</p>
            </section>
          </div>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Additional Option Code</p>
        <pre class="mg-b-0"><code class="javascript pd-20">cssClass: 'wizard step-equal-width'</code></pre>

      </div><!-- sl-pagebody -->
      









@endsection

@push('js')
 
<!-- test -->
     <script src="{{ asset('backend') }}/lib/jquery-ui/jquery-ui.js"></script>
    <script src="{{ asset('backend') }}/lib/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="{{ asset('backend') }}/lib/jquery.steps/jquery.steps.js"></script>
    <script src="{{ asset('backend') }}/lib/parsleyjs/parsley.js"></script>

    
    <script>
      $(document).ready(function(){
        'use strict';

        $('#wizard1').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>'
        });

        $('#wizard2').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          onStepChanging: function (event, currentIndex, newIndex) {
            if(currentIndex < newIndex) {
              // Step 1 form validation
              if(currentIndex === 0) {
                var fname = $('#firstname').parsley();
                var lname = $('#lastname').parsley();

                if(fname.isValid() && lname.isValid()) {
                  return true;
                } else {
                  fname.validate();
                  lname.validate();
                }
              }

              // Step 2 form validation
              if(currentIndex === 1) {
                var email = $('#email').parsley();
                if(email.isValid()) {
                  return true;
                } else { email.validate(); }
              }
            // Always allow step back to the previous step even if the current step is not valid.
            } else { return true; }
          }
        });

        $('#wizard3').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          stepsOrientation: 1
        });

        $('#wizard4').steps({
          headerTag: 'h3',
          bodyTag: 'section',
          autoFocus: true,
          titleTemplate: '<span class="number">#index#</span> <span class="title">#title#</span>',
          cssClass: 'wizard step-equal-width'
        });


      });
    </script>

@endpush