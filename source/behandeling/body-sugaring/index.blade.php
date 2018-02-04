@extends('_layouts.master')

@section('body')
    <div class="container container-card top30 bottom30">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h1>Body Sugaring</h1>
                <p>Vele eeuwen geleden ontdekten vrouwen een efficiënte en pijnloze techniek voor ontharen met vrij simpele middelen. Tegenwoordig is de methode verder ontwikkeld zodat het voldoet aan onze moderne eisen.

Body sugaring is ontharen met behulp van een suikerpasta. “sukar” sugaring is een zachte,veilige, effectieve en natuurlijke manier van ontharen.Er worden geen ontharingsstrips gebruikt en het wordt nooit warmer dan lichaamstemperatuur.Het haar wordt verwijderd bij de wortel en komt zachter terug. Dat betekent dat de haarfollikel na regelmatig ontharen, na verloop van tijd gaat inkrimpen dat houdt in dat de haar groei vermindert.</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <img src="{{$page->url('images/sugar-foto-1.jpg')}}" alt="Irene Farla" class="img-responsive block-center">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2>De voordelen van Body Sugaring</h2>

                <ul>
                    <li>100 % natuurlijk product</li>
                    <li>minder pijnlijk dan harsen</li>
                    <li>in water oplosbaar en milieuvriendelijk</li>
                    <li>geen of bijna geen allergische reacties</li>
                    <li>donkere haren worden lichter van kleur en dunner van structuur</li>
                    <li>Geen verbrandingen ivm lage gebruikstemperatuur</li>
                </ul>
            </div>
            <div class="col-xs-12 col-md-6">
                <img src="{{$page->url('images/sugar-behandeling.jpg')}}" alt="Irene Farla" class="img-responsive block-center">
            </div>
        </div>
    </div>
@endsection