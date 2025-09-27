@extends('layouts.app')

@section('title', 'Главная')

@section('content')
  <x-hero.hero-section-main />
  <x-main.service-listing />
@endsection
