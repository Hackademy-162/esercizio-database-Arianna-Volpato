<x-layout title="Homepage">
    @if (session('messagge'))
        <div class="alert alert-success">
            {{ session ('messagge')}}
        </div>
    @endif

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 text-blue">
                <h1> Il sito dei contatti </h1>
            </div>
        </div>
    </div>











</x-layout>