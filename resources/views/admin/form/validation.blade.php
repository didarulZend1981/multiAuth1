@extends('layouts.admin.layout')
@section('title','Dashboard-Validation')


@push('css')
   
    <link href="{{ asset('backend') }}/lib/select2/css/select2.min.css" rel="stylesheet">

    
@endpush
@section('sl-mainpanel')
      <nav class="breadcrumb sl-breadcrumb">
        <a class="breadcrumb-item" href="index.html">Starlight</a>
        <a class="breadcrumb-item" href="index.html">Forms</a>
        <span class="breadcrumb-item active">Form Validation</span>
      </nav>

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Form Validation</h5>
          <p>This template uses Parsley for form validation. Parsley is the ultimate javascript form validation library.</p>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
          <h6 class="card-body-title">Required Input Validation</h6>
          <p class="mg-b-20 mg-sm-b-30">This is a demo of a required field that must not leave empty.</p>

          <form action="form-validation.html" data-parsley-validate>
            <div class="wd-300">
              <div class="d-md-flex mg-b-30">
                <div class="form-group mg-b-0">
                  <label>Firstname: <span class="tx-danger">*</span></label>
                  <input type="text" name="firstname" class="form-control wd-200 wd-sm-250" placeholder="Enter firstname" required>
                </div><!-- form-group -->
                <div class="form-group mg-b-0 mg-md-l-20 mg-t-20 mg-md-t-0">
                  <label>Lastname: <span class="tx-danger">*</span></label>
                  <input type="text" name="lastname" class="form-control wd-200 wd-sm-250" placeholder="Enter lastname" required>
                </div><!-- form-group -->
              </div><!-- d-flex -->
              <button type="submit" class="btn btn-info">Validate Form</button>
            </div>
          </form>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;form method=&quot;post&quot; action=&quot;form-validation.html&quot; data-parsley-validate&gt;
&lt;div class=&quot;wd-300&quot;&gt;
  &lt;div class=&quot;d-flex mg-b-30&quot;&gt;
    &lt;div class=&quot;form-group mg-b-0&quot;&gt;
      &lt;label&gt;Firstname: &lt;span class=&quot;tx-danger&quot;&gt;*&lt;/span&gt;&lt;/label&gt;
      &lt;input type=&quot;text&quot; name=&quot;firstname&quot; class=&quot;form-control wd-250&quot; placeholder=&quot;Enter firstname&quot; required&gt;
    &lt;/div&gt;&lt;!-- form-group --&gt;
    &lt;div class=&quot;form-group mg-b-0 mg-l-20&quot;&gt;
      &lt;label&gt;Lastname: &lt;span class=&quot;tx-danger&quot;&gt;*&lt;/span&gt;&lt;/label&gt;
      &lt;input type=&quot;text&quot; name=&quot;lastname&quot; class=&quot;form-control wd-250&quot; placeholder=&quot;Enter lastname&quot; required&gt;
    &lt;/div&gt;&lt;!-- form-group --&gt;
  &lt;/div&gt;&lt;!-- d-flex --&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-info&quot;&gt;Validate Form&lt;/button&gt;
&lt;/div&gt;
&lt;/form&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Email Validation</h6>
          <p class="mg-b-20 mg-sm-b-30">A demo of an email field that is required and must also be a valid email address.<br>It automatically validate an email when the field is in type="email".</p>

          <form action="form-validation.html" data-parsley-validate>
            <div class="d-sm-flex wd-sm-300">
              <div class="form-group mg-b-0">
                <label>Email: <span class="tx-danger">*</span></label>
                <input type="email" name="email" class="form-control wd-200 wd-xs-250" placeholder="Enter email" required>
              </div><!-- form-group -->
              <div class="mg-sm-l-10 mg-t-10 mg-sm-t-25 pd-t-4">
                <button type="submit" class="btn btn-info pd-x-15">Validate Email</button>
              </div>
            </div>
          </form>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;form action=&quot;form-validation.html&quot; data-parsley-validate&gt;
&lt;div class=&quot;d-flex wd-300&quot;&gt;
  &lt;div class=&quot;form-group mg-b-0&quot;&gt;
    &lt;label&gt;Email: &lt;span class=&quot;tx-danger&quot;&gt;*&lt;/span&gt;&lt;/label&gt;
    &lt;input type=&quot;email&quot; name=&quot;email&quot; class=&quot;form-control wd-250&quot; placeholder=&quot;Enter email&quot; required&gt;
  &lt;/div&gt;&lt;!-- form-group --&gt;
  &lt;div class=&quot;mg-l-10 mg-t-25 pd-t-4&quot;&gt;
    &lt;button type=&quot;submit&quot; class=&quot;btn btn-info&quot;&gt;Validate Email&lt;/button&gt;
  &lt;/div&gt;
&lt;/div&gt;
&lt;/form&gt;</code></pre>

        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Checkbox/Radio Validation</h6>
          <p class="mg-b-20 mg-sm-b-30">A demo of checkboxes that must be selected at least two fom any given list.</p>

          <form action="form-validation.html" data-parsley-validate>
            <p class="mg-b-10">What is your favorite browser? <span class="tx-danger">*</span></p>
            <div id="cbWrapper" class="parsley-checkbox">
              <label class="ckbox">
                <input type="checkbox" name="browser[]" value="1" data-parsley-mincheck="2" data-parsley-class-handler="#cbWrapper" data-parsley-errors-container="#cbErrorContainer" required><span>Firefox</span>
              </label>
              <label class="ckbox">
                <input type="checkbox" name="browser[]" value="2"><span>Chrome</span>
              </label>
              <label class="ckbox">
                <input type="checkbox" name="browser[]" value="3"><span>Safari</span>
              </label>
              <label class="ckbox">
                <input type="checkbox" name="browser[]" value="4"><span>Edge</span>
              </label>
            </div><!-- form-group -->
            <div id="cbErrorContainer"></div>
            <div class="mg-t-20">
              <button type="submit" class="btn btn-info pd-x-15" value="5">Validate Form</button>
            </div>
          </form>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre><code class="html pd-20">&lt;form method=&quot;post&quot; action=&quot;form-validation.html&quot; data-parsley-validate&gt;
&lt;p class=&quot;mg-b-10&quot;&gt;What is your favorite browser? &lt;span class=&quot;tx-danger&quot;&gt;*&lt;/span&gt;&lt;/p&gt;
&lt;div id=&quot;cbWrapper&quot; class=&quot;parsley-checkbox mg-b-0&quot;&gt;
  &lt;label class=&quot;ckbox&quot;&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;browser[]&quot; value=&quot;1&quot; data-parsley-mincheck=&quot;2&quot;
    data-parsley-class-handler=&quot;#cbWrapper&quot;
    data-parsley-errors-container=&quot;#cbErrorContainer&quot; required&gt;&lt;span&gt;Firefox&lt;/span&gt;
  &lt;/label&gt;
  &lt;label class=&quot;ckbox&quot;&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;browser[]&quot; value=&quot;2&quot;&gt;&lt;span&gt;Chrome&lt;/span&gt;
  &lt;/label&gt;
  &lt;label class=&quot;ckbox&quot;&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;browser[]&quot; value=&quot;3&quot;&gt;&lt;span&gt;Safari&lt;/span&gt;
  &lt;/label&gt;
  &lt;label class=&quot;ckbox&quot;&gt;
    &lt;input type=&quot;checkbox&quot; name=&quot;browser[]&quot; value=&quot;4&quot;&gt;&lt;span&gt;Edge&lt;/span&gt;
  &lt;/label&gt;
&lt;/div&gt;&lt;!-- parsley-checkbox --&gt;
&lt;div id=&quot;cbErrorContainer&quot;&gt;&lt;/div&gt;
&lt;div class=&quot;mg-t-20&quot;&gt;
  &lt;button type=&quot;submit&quot; class=&quot;btn btn-info&quot; value=&quot;5&quot;&gt;Validate Form&lt;/button&gt;
&lt;/div&gt;
&lt;/form&gt;</code></pre>


        <div class="card pd-20 pd-sm-40 mg-t-50">
          <h6 class="card-body-title">Select Box Validation</h6>
          <p class="mg-b-20 mg-sm-b-30">A demo of select boxes that must be selected at least one fom any given option.</p>

          <form action="form-validation.html" id="selectForm">
            <div class="d-md-flex">
              <div id="slWrapper" class="parsley-select wd-200 wd-xs-250">
                <select class="form-control select2" data-placeholder="Choose one" data-parsley-class-handler="#slWrapper" data-parsley-errors-container="#slErrorContainer" required>
                  <option label="Choose one"></option>
                  <option value="Firefox">Firefox</option>
                  <option value="Chrome">Chrome</option>
                  <option value="Safari">Safari</option>
                  <option value="Opera">Opera</option>
                  <option value="Internet Explorer">Internet Explorer</option>
                </select>
                <div id="slErrorContainer"></div>
              </div>
              <div class="mg-md-l-10 mg-t-10 mg-md-t-0">
                <button type="submit" class="btn btn-info pd-x-15" value="5">Validate Form</button>
              </div>
            </div><!-- d-flex -->
          </form>
        </div><!-- card -->

        <p class="tx-11 tx-uppercase tx-spacing-2 mg-t-40 mg-b-10 tx-gray-600">Source Code</p>
        <pre class="mg-b-0"><code class="html pd-20">&lt;form action=&quot;form-validation.html&quot; id=&quot;selectForm&quot;&gt;
&lt;div class=&quot;d-flex&quot;&gt;
  &lt;div id=&quot;slWrapper&quot; class=&quot;parsley-select wd-250&quot;&gt;
    &lt;select class=&quot;form-control select2&quot; data-placeholder=&quot;Choose one&quot;
    data-parsley-class-handler=&quot;#slWrapper&quot;
    data-parsley-errors-container=&quot;#slErrorContainer&quot; required&gt;
      &lt;option label=&quot;Choose one&quot;&gt;&lt;/option&gt;
      &lt;option value=&quot;Firefox&quot;&gt;Firefox&lt;/option&gt;
      &lt;option value=&quot;Chrome&quot;&gt;Chrome&lt;/option&gt;
      &lt;option value=&quot;Safari&quot;&gt;Safari&lt;/option&gt;
      &lt;option value=&quot;Opera&quot;&gt;Opera&lt;/option&gt;
      &lt;option value=&quot;Internet Explorer&quot;&gt;Internet Explorer&lt;/option&gt;
    &lt;/select&gt;
    &lt;div id=&quot;slErrorContainer&quot;&gt;&lt;/div&gt;
  &lt;/div&gt;
  &lt;div class=&quot;mg-l-10&quot;&gt;&lt;button type=&quot;submit&quot; class=&quot;btn btn-info&quot; value=&quot;5&quot;&gt;Validate Form&lt;/button&gt;&lt;/div&gt;
&lt;/div&gt;&lt;!-- d-flex --&gt;
&lt;/form&gt;</code></pre>

      </div><!-- sl-pagebody -->
      

@endsection
    



    <script src="{{ asset('backend') }}/lib/select2/js/select2.min.js"></script>
    <script src="{{ asset('backend') }}/lib/parsleyjs/parsley.js"></script>
@push('js')
 
 <script>
      $(function(){
        'use strict';
        $('.select2').select2({
          minimumResultsForSearch: Infinity
        });

        $('#selectForm').parsley();
      })
    </script>

@endpush