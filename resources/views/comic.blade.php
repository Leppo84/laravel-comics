
@extends('templates.base')

@section('pageTitle', 'Comic')

@section('pageMain')
    <main>
        <section class="bg dc-darkergrey">
            <div class="container">
              <button class="btn dc-blue txt-white">
                  <img src="{{$comics['thumb']}}" alt="{{$comics['series']}}" class="card-img">
            </button>
            <div class="fx wrap">
                <div class="comic-card">
                    <h3 class="txt-white">{{ $comics['title'] }}</h3>
                  <span class="txt-white">
                    {{ $comics['description'] }}
                  </span>
                </div>
              </div>
            </div>
          </section>
    </main>
@endsection