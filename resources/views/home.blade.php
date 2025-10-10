@extends('layouts.app')

@section('title', 'Athos 2.0 - Portfolio Template')
@section('meta_description', 'Helping startups and brands to craft expressive and engaging solutions for their software needs.')

@section('content')
    @include('components.hero')
    @include('components.projects')
    @include('components.testimonials')
    @include('components.about')
    @include('components.companies')
    @include('components.faq')
    @include('components.footer')
@endsection
