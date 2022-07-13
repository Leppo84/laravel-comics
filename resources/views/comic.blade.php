
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
                <div class="col-sixth comic-card">
                    <h3>{{ $comics['title'] }}</h3>
                  <span class="txt-white">
                    Description here
                  </span>
                </div>
              </div>
            </div>
          </section>
    </main>
@endsection