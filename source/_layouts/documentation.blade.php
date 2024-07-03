@extends('_layouts.master')

@section('nav-toggle')
    @include('_nav.menu-toggle')
@endsection

@section('body')
    <section class="container py-5">
        <div class="row">
            <div class="col-12 col-lg-3">
                <nav id="js-nav-menu" class="">
                    @include('_nav.menu', ['items' => $page->navigation])
                </nav>
            </div>
            <div class="col col-lg">
                <div class="DocSearch-content w-full lg:w-3/5 break-words pb-16 lg:pl-4" >
                    <x-atoms.ti-h1 :title="$page->title" />
                    <x-atoms.ti-text-lead :text="$page->description" />
                    @yield('content')
                </div>
            </div>

        </div>
    </section>
@endsection
