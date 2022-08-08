@extends('layouts.admin.layout')
@section('title','404')


@push('css')

    
@endpush
@section('sl-mainpanel')
<div class="ht-100v bg-sl-primary d-flex align-items-center justify-content-center">
      <div class="wd-lg-70p wd-xl-50p tx-center pd-x-40">
        <h1 class="tx-100 tx-xs-140 tx-normal tx-white mg-b-0">404!</h1>
        <h5 class="tx-xs-24 tx-normal tx-info mg-b-30 lh-5">The page your are looking for has not been found.</h5>
        <p class="tx-16 mg-b-30 tx-white-5">The page you are looking for might have been removed, had its name changed,
or unavailable. Maybe you could try a search:</p>

        <div class="d-flex justify-content-center">
          <div class="d-flex wd-xs-300">
            <input type="text" class="form-control form-control-inverse ht-40" placeholder="Search...">
            <button class="btn btn-info bd-0 mg-l-5 ht-40"><i class="fa fa-search"></i></button>
          </div>
        </div><!-- d-flex -->

        <div class="tx-center mg-t-20">... or back to <a href="index.html">home</a></div>
      </div>
    </div><!-- ht-100v -->
      
      

@endsection

@push('js')
		

@endpush