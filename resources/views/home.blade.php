@extends('layouts.app')

@section('title', 'Ravendot - ' . __('common.designh1'))
@section('meta_description', __('common.meta_description'))

@section('content')
    @include('components.hero')
    @include('components.projects')
    @include('components.testimonials')
    @include('components.about')
    @include('components.companies')
    @include('components.faq')
    @include('components.footer')
@endsection
