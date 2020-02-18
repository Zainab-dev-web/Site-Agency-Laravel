@extends('layouts/master')


{{-- 
@section('url1' , $portfolio[0]->url)
@section('url2', $portfolio[1]->url)
@section('url3', $portfolio[2]->url) 
--}}

@section('content')
@include('components/navbar')
@include('components/header')
@include('partials/service')
@include('partials/portfolio')
@include('partials/about')
@include('partials/Team')
@include('partials/client')
@include('partials/contact')
@include('components/footer')
@include('partials/modal')

@endsection
