@extends('layouts.app')

@section('page.title')
Comics
@endsection

@section('page.main')
<section class="section_comics">

    <div class="container flex-column">
        <div>
            <div class="blue_bg">                
                <img class="mini_thumb" src="{{ $comics['thumb'] }}">
            </div>
            <div class="d-flex justify-content-between">
                <div>
                    <h3>{{$comics['title']}}</h3>
                    <div class="ms_info d-flex justify-content-between my-4">
                        <span>U.S. Price: {{$comics['price']}}</span>
                        <div>
                            <span class="me-5">AVAILABLE</span>
                            <span>Check Availability</span>
                        </div>                      
                    </div>
                    <p>{{$comics['description']}}</p>
                </div>
                <div>
                    <div class="text-end text-secondary">ADVERTISEMENT</div>
                    <img class="ms-3" src="{{ Vite::asset('resources/img/adv.jpg') }}" alt="">
                </div>
            </div>

            <div class="pt-5">
                <div class="row row-cols-2">
                    <div class="col">
                        <h3>Talent</h3>
                        <div class="">
                            <span>Art by:</span>
                            @foreach ($comics['artists'] as $artists)
                                <span class="me-1">{{ $artists }}, </span>
                            @endforeach
                            <span>Written by: </span>
                                @foreach ($comics['writers'] as $writers)
                                <span>{{ $writers }}</span>
                            @endforeach     
                        </div>                  
                    </div>
                    <div class="col">
                        <h3>Specs</h3>
                        <div>Series: {{$comics['series']}}</div>
                        <div>U.S. Price: {{$comics['price']}}</div>
                        <div>On Sale Date: {{$comics['sale_date']}}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
    
@endsection
