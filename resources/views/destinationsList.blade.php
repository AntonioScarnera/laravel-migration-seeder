@extends('layout.default')


@section('pageTitle', 'Lista Case')

@section('mainContent')
<main>
    <h1 class="text-center">
        Home List
        <i class="fa-solid fa-home"></i>
    </h1>
    <div class="row">
        @foreach($destinations as $destination)
        <div class="col-3">
            <a href="{{route('detail', $destination->id)}}">{{$destination->locality}}</a>
        </div>
        @endforeach
    </div>
</main>
@endsection

<style>
        main{
        height: 90vh;
    }
</style>