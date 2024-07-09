@extends('_layouts.master')

@php
    $benefits = [
        ['title' => 'Used and tested in real product','description' => 'This component library is used in touraisrael.es, a leading Christian organized travel agency to Israel.'],
        ['title' => 'Based on Bootstrap', 'description' => 'Components are based on Bootstrap, a solid choice to create solid projects.'],
        ['title' => 'Conventional and Elegant', 'description' => 'These component have been designed to ensure a beautifull environment, following web design best practices.']
    ]
@endphp



@section('body')
<section class="container">
    <div class="row">
        <div class="col-12 col-lg-6">
            <x-atoms.ti-h1 :title="$page->siteName"/>
            <p class="lead">{{$page->siteDescription}}</p>
            <x-molecules.ti-button text="Docs" url="docs/getting-started/"/>
        </div>
        <div class="col"></div>
    </div>
</section>
<section class="container">
    <x-atoms.ti-h3-card title="Benefits"/>
    <div class="row">
        @foreach ($benefits as $item)
        <div class="col col-lg-4">
            <x-molecules.ti-card :title="$item['title']" :subtitle="$item['description']" variant="auto-size"/>
        </div>
        @endforeach
    </div>
</section>

@endsection
