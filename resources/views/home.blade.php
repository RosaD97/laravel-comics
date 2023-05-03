@extends('layouts.app')

@section('page.title')
Home Page Comics
@endsection

@section('page.main')
<div class="main">
    <div class="container">
        <section>
            <h2 class="text">CURRENT SERIES</h2>
            <div>
                <div class="box">                   
                    <div class="container gap-3 flex-wrap justify-content-center d-flex">
                        @foreach ($comics as $comic)
                            <div class="ms_card">
                                <div><a href="{{ route('comics', ['index' => $loop->index]) }}"><img class="thumb" src="{{ $comic['thumb'] }}"></a></div>
                                <span class="title_comics">{{ $comic['series'] }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <button class="text">LOAD MORE</button>
        </section>
    </div>
</div>
@endsection
