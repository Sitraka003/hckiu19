@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @include('partials.message')
                @can('update',$mooc)
                <a href="{{route('chapter.create',$mooc)}}" class="btn btn-success">Ajouter un chapitre</a>
                @endcan
                <h1>{{ $mooc->title }}</h1>
                <p>{{ $mooc->resume }}</p>
            </div>
        </div>
    </div>
</div>
@endsection
