@extends('layouts.admin.layout')
@section('title','Dashboard')


@push('css')

@endpush
@section('sl-mainpanel')


@endsection

@push('js')



@endpush


<section class="content">
        @yield('content')
    </section>