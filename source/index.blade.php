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
  <div class="row">
        <div class="col-xs-12 col-sm-4">
            <img class="img-responsive img-rounded" src="{{$page->url('images/irene.jpg')}}" alt="">
        </div>
        <div class="col-xs-12 col-sm-8">
            <p>
                Met trots verzorg ik <b>ruim 20 jaar</b> met plezier de voeten van het eiland Tholen. In de salon wordt er gewerkt met een pedicuremotor op basis van spraytechniek. U ondergaat hierdoor een pijnloze en ook hygiënische behandeling. De beroepscode van de voetverzorging wordt strikt gevolgd. Hygiëne, veiligheid en milieubewust werken heeft de hoogste prioriteit.
            </p>
            <div class="col-xs-12 col-md-4 specialization">
            <h4><i class="fas fa-paint-brush text-black"></i> Nailart</h4>
            <p class="text-muted">
            Een vrolijk bloemmotief of een chique french pedicure behoort ook tot de mogelijkheden in mijn salon.
Vooral in het voorjaar en in de zomer wanneer de sandalen en slippers weer aan gaan is het natuurlijk prachtig .
            </p>
        </div>
        <div class="col-xs-12 col-md-4 specialization">
            <h4><i class="fas fa-magic text-black"></i> Gel Repair</h4>
            <p class="text-muted">
            Altijd vervelend, je stoot je teen tegen de stoel en je nagel scheurt.
Niets aan te doen denk je dan. Niets is minder waar.
Deze nagels kunnen gerepareerd worden met een gel speciaal bedoeld voor de teennagel.
            </p>
        </div>
        <div class="col-xs-12 col-md-4 specialization">
            <h4><i class="fas fa-gem text-black"></i> Paraffine</h4>
            <p class="text-muted">
            Een paraffine behandeling is altijd een verwennerij na een gewone pedicure behandeling.
De voeten worden heerlijk met de verwarmde paraffine ingesmeerd en daarna ingepakt. Echt een weldaad voor de voeten.
            </p>
        </div>
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

<div class="container container-card">
  <div class="row">
  <div class="col-md-12">
  @include('_layouts/map')
</div>
  </div>
</div>
@endsection @section('scripts') @endsection
