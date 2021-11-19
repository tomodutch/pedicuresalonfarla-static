@extends('_layouts.master') @section('body')
<div class="container-fluid bg-white">
  <div
    class="hero-image"
    style="background-image: url({{ $page->url('images/hero.jpeg') }})"
  >
    <div class="hero-text bg-fade-in">
      <h1>Pedicuresalon Farla</h1>
      <p>Uw voeten in de beste handen</p>
      <a href="{{ $page->url('afspraak-maken/') }}" class="btn btn-default"
        >Afspraak maken</a
      >
    </div>
  </div>
</div>
<div class="container container-card">
  <div class="row" style="display: flex; min-height: 40vh">
    <div
      class="col-xs-6 col-md-4"
      style="padding-left: 0; background: url('{{ $page->url('images/irene.jpg') }}'); background-size: cover; background-position: top"
    ></div>
    <div class="col-xs-6 col-md-8" style="display: flex; align-items: center">
      <blockquote style="border: none">
        <p>
          Meer dan <b>10 jaar</b> verzorg ik met plezier de voeten van het
          eiland Tholen
        </p>
        <small><cite title="Source Title">Irene Farla</cite></small>
      </blockquote>
    </div>
  </div>
</div>

<a href="{{ $page->url('/afspraak-maken/') }}" class="container-fluid">
  <section class="row call-to-action">
    <div class="container">
      <div class="row">
        <div class="col-xs-12 text-center">
          <h2>
            <i class="fas fa-phone-volume"></i>
            Maak een afspraak
          </h2>
        </div>
      </div>
    </div>
  </section>
</a>

<div id="map"></div>

<div class="container container-card bg-white bottom30">
  <div class="top15 service-grid">
    <div class="service-card">
      <div class="hovereffect">
        <img
          class="img-responsive"
          src="{{$page->url('images/irene-2.jpg')}}"
          alt=""
        />
        <div class="overlay">
          <h2>Pedicure basis all-in</h2>
          <a class="info hidden-sm hidden-xs" href="{{$page->url('behandeling/pedicure-basis-all-in/')}}">
            De basisbehandeling is een verwennerij voor beide voeten
          </a>
          <a class="info hidden-lg hidden-md " href="{{$page->url('behandeling/pedicure-basis-all-in/')}}">
            De basisbehandeling is een verwennerij voor beide voeten. De aandacht gaat naar het vinden van klachten zodat uw voeten gezond en wel de salon verlaten. Na afloop genieten uw voeten van een wel verdiende massage.
          </a> 
        </div>
      </div>
    </div>
    <div class="service-card">
      <div class="hovereffect">
        <img
          class="img-responsive"
          src="{{$page->url('images/voeten-plaatje-1.jpg')}}"
          alt=""
        />
        <div class="overlay">
          <h2>Pedicure deluxe</h2>
          <a class="info hidden-sm hidden-xs" href="{{ $page->url('behandeling/pedicure-deluxe/')}}">
            Naast een BASIS ALL-IN behandeling geniet u van alle extra’s die mijn salon te bieden heeft
          </a>
          <a class="info hidden-lg hidden-md " href="{{ $page->url('behandeling/pedicure-deluxe/')}}">
            Naast een BASIS ALL-IN behandeling geniet u van alle extra’s die mijn salon te bieden heeft. Wat deze behandeling zo luxe maakt is de paraffine als afsluiting.
          </a> 
        </div>
      </div>
    </div>
    <div class="service-card">
      <div class="hovereffect">
        <img
          class="img-responsive"
          src="{{ $page->url('images/laushine-gel-lak.jpg') }}"
          alt=""
        />
        <div class="overlay">
          <h2>Pedicure la couleur</h2>
          <a class="info hidden-sm hidden-xs" href="{{$page->url('behandeling/pedicure-la-couleur/')}}">
            Na het genieten van een BASIS ALL-IN behandeling kiest u een prachtige kleur uit voor uw nagels.
          </a>
          <a class="info hidden-lg hidden-md " href="{{$page->url('behandeling/pedicure-la-couleur/')}}">
            Na het genieten van een BASIS ALL-IN behandeling kiest u een prachtige kleur uit voor uw nagels. Deze wordt toegepast met een soak-off nagellak product. Door deze werkwijze kunt u na behandeling direct uw schoenen aan want de nagels zijn helemaal uit gehard!
          </a> >
        </div>
      </div>
    </div>
  </div>

  <div class="row top15">
    <div class="col-xs-12 col-md-4">
      <div class="card" style="border: none">
        <div class="card-body">
          <center>
            <div
              class="rounded"
              style="
                font-size: 6px;
                padding: 15px;
                background-color: #0086d2;
                color: white;
              "
            >
              <i class="far fa-heart fa-10x"></i>
              <h4 class="text-center">Aandacht</h4>
            </div>
            <p class="text-center text-muted">
              U staat centraal tijdens de behandeling
            </p>
          </center>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-4">
      <div class="card" style="border: none">
        <div class="card-body">
          <center>
            <div
              class="rounded"
              style="
                font-size: 6px;
                padding: 15px;
                background-color: #0086d2;
                color: white;
              "
            >
              <i class="fas fa-user-md fa-10x"></i>
              <h4 class="text-center">Vakmanschap</h4>
            </div>
            <p class="text-center text-muted">
              Aangesloten bij ProVoet en meer dan 10 jaar praktiserend pedicure
            </p>
          </center>
        </div>
      </div>
    </div>
    <div class="col-xs-12 col-md-4">
      <div class="card" style="border: none">
        <div class="card-body">
          <center>
            <div
              class="rounded"
              style="
                font-size: 6px;
                padding: 15px;
                background-color: #0086d2;
                color: white;
              "
            >
              <i class="far fa-smile fa-10x text-center"></i>
              <h4 class="text-center">Gezellig</h4>
            </div>
            <p class="text-center text-muted">
              Heerlijk genieten van een babbel tijdens een wel verdiende
              behandeling
            </p>
          </center>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection @section('scripts') @include('_layouts/map') @endsection
