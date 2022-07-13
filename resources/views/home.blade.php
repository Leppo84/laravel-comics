@extends('templates.base')

@section('pageTitle','DC Comic')

@section('pageMain')
<main>
    <section class="bg dc-darkergrey">
        <div class="container">
          <button class="btn dc-blue txt-white">
            <h3>CURRENT SERIES</h3>
          </button>
          <div class="fx wrap">
            <div class="col-sixth comic-card">
              <img src="card.thumb" alt="card.series" class="card-img">
              <span class="txt-white">
                card.series
              </span>
            </div>
          </div>
        </div>
      </section>

      <section class="bg dc-blue">
        <div class="container fx ji-between">
          <div class="obj txt-white">
            Coso 1
          </div>
          <div class="obj txt-white">
            Coso 2
          </div>
          <div class="obj txt-white">
            Coso 3
          </div>
          <div class="obj txt-white">
            Coso 4
          </div>
          <div class="obj txt-white">
            Coso 5
          </div>
        </div>
      </section>
</main>
@endsection

