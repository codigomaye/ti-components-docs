@extends('_layouts.master')

@php
    $benefits = [
        ['title' => 'Ready to use','description' => 'description'],
        ['title' => 'Based on Bootstrap', 'description' => 'description'],
        ['title' => 'Elegant and modern', 'description' => 'description']
    ]
@endphp

@section('body')
<section class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <h1>{{$page->siteName}}</h1>
            <p class="lead">{{$page->siteDescription}}</</p>
        </div>
        <div class="col"></div>
    </div>
</section>
<section class="container">
    <h2 class="display-6 fw-medium mb-3">Benefits</h2>
    <div class="row">
        @foreach ($benefits as $item)
        <div class="col col-lg-4">
            <div class="card shadow-sm bg-light">
                <div class="card-body">
                    <h3 class="card-title fw-light">{{$item['title']}}</h3>
                    <p class="card-subtitle mb-2">{{$item['description']}}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>

@endsection
