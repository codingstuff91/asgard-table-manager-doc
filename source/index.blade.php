@extends('_layouts.master')

@section('body')
<section class="container max-w-6xl mx-auto px-6 py-10 md:py-12">
    <div class="flex flex-col-reverse mb-10 lg:flex-row lg:mb-24">
        <div class="mt-8">
            <h1 id="intro-docs-template">{{ $page->siteName }}</h1>

            <p class="text-lg">Bienvenue sur le site de documentation de l'application "ASGARD TABLE MANAGER".</p>
            <p class="text-lg">tout ce qu'il faut savoir concernant l'utilisation de l'application de gestion des tables de jeux "ASGARD TABLE MANAGER".</p>

            <div class="flex justify-center mt-4">
                <a href="/docs/getting-started" title="{{ $page->siteName }} getting started" class="bg-blue-500 hover:bg-blue-600 font-normal text-white hover:text-white rounded mr-4 py-2 px-6">Notice utilisation</a>
            </div>
        </div>

        <img src="/assets/img/logo-large.svg" alt="{{ $page->siteName }} large logo" class="mx-auto mb-6 lg:mb-0 ">
    </div>

</section>
@endsection
