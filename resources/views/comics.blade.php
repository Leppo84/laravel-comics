@extends('templates.base')

@section('pageTitle','Comics')

@section('pageMain')
<main>
    <section class="bg dc-darkergrey">
        <div class="container">
          <button class="btn dc-blue txt-white">COMICS
          </button>
          <div class="fx wrap">
            @foreach (config('comics') as $comic)
            <div class="col-sixth comic-card">
              <a href="{{ route('comic', ['id' => $comic['id']]) }}">
                <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}" class="card-img">
                </a>
                <span class="txt-white">
                </span>
              </div>
              @endforeach
            </div>
        </div>
      </section>
</main>
@endsection

