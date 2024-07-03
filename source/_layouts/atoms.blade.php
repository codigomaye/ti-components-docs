@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@php
    $url = explode('/', $page->getURL());
    $slug = end($url);
    $blade_file = './source/_components/atoms/' . $slug . '.blade.php';
    $sass_file = './source/_assets/sass/atoms/' . $slug . '.scss';
@endphp

@section('body')
    <section class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-3">
                <nav id="js-nav-menu" class="">
                    @include('_nav.menu', ['items' => $page->navigation])
                </nav>
            </div>
            <div class="col col-lg">

                <x-atoms.ti-h1 :title="$page->title" />
                <x-atoms.ti-text-lead :text="$page->description" />

                <section class="container mb-3">
                    <x-atoms.ti-h2 title="Example" />
                    @yield('content')
                    <hr>
                </section>

                <section class="container mb-3">
                    <x-atoms.ti-h2 title="How to invoque" />
                    <code class="language-php">
                        {{ $page->invoque }}
                        <hr>
                    </code>
                </section>

                <section class="container">
                    <x-atoms.ti-h2 title="Component definition" />
                    <code class="language-php">

                        @php
                            $lines = file($blade_file);
                            foreach ($lines as $line) {
                                echo htmlspecialchars($line) . '<br>';
                            }
                        @endphp
                    </code>
                    <hr>
                </section>

                <section class="container">
                    <x-atoms.ti-h2 title="CSS Class" />
                    <code class="language-php">
                        @php
                            $lines = file($sass_file);
                            foreach ($lines as $line) {
                                echo htmlspecialchars($line) . '<br>';
                            }
                        @endphp
                    </code>
                    <hr>
                </section>

                <section class="container">
                    <div class="d-flex justify-content-between">
                        @if ($page->getPrevious())
                            <div class="text-end">
                                <x-molecules.ti-button text="Previous Atom: {{ $page->getPrevious()->title }}"
                                    url="{{ $page->getPrevious()->getPath() }}" />
                            </div>
                        @endif

                        @if ($page->getNext())
                            <div class="text-end">
                                <x-molecules.ti-button text="Next Atom: {{ $page->getNext()->title }}"
                                    url="{{ $page->getNext()->getPath() }}" />
                            </div>
                        @endif
                </section>
            </div>

        </div>
    </section>
@endsection
