@extends('layouts.app')

@section('title', 'Главная')

@section('content')
  <x-hero.hero-section-main />
  <x-main.service-listing />
  <x-main.about-section />
@endsection
