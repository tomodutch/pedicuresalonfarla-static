@extends('_layouts.master')

@section('body')
    <div class="container container-card top30 bottom30">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h1>Gel nail repair</h1>
                <p>Een gescheurde nagel, getraumatiseerde nagel of te ver weg geknipte  nagelhoeken die kunnen gaan ingroeien?
Deze nagels kunnen gerepareerd worden! Met een gel die speciaal ontwikkeld is voor de teennagel. Het is een soepele gel die meegaat met de beweging van de voet.</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="img-responsive block-center" src="{{ $page->url('images/gel-repair-voor-en-na.jpeg') }}" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h2>Drie lagen</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-4">
                <h4><i class="fas fa-wrench" style="color:black"></i> Hechting</h4>
                <p>De eerste laag gel wordt aangebracht die zorgt voor hechting aan de nagel</p>
            </div>
            <div class="col-xs-12 col-md-4">
                <h4><i class="fas fa-leaf" style="color:black"></i> Cosmetisch</h4>
                <p>Deze laag is het fundament waarmee de nagel wordt opgebouwd</p>
            </div>
            <div class="col-xs-12 col-md-4">
                <h4><i class="fas fa-hand-paper" style="color:black"></i> Bescherming</h4>
                <p>Op deze laag kan zonder problemen nagellak worden toegepast mits deze wordt verwijderd met een remover zonder aceton</p>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12">
                <h2>Werkwijze</h2>
                <ol>
                    <li>Om de gel goed te laten hechten, wordt de nagel eerst gedesinfecteerd en ontvet</li>
                    <li>De eerste laag gel wordt aangebracht die zorgt voor hechting aan de nagel</li>
                    <li>Na het uitharden met een led lamp wordt er gewerkt met een builders gel, hiermee wordt de nagel opgebouwd, dit is het fundament van de nagel.</li>
                    <li>Als deze laag ook weer goed is uitgehard onder de lamp  dan komt het “cosmetische” gedeelte van de nagel. er wordt dan gekeken naar kleur en dikte van de nagels.</li>
                    <li>De laatste laag is een top laag. Deze laag is er voor de bescherming van de nagel. Misschien belangrijk voor de vrouwelijke klanten er mag gewoon nagellak overheen dat is geen probleem. Zolang het verwijderen ervan gebeurd met een remover zonder aceton.</li>
                </ol>
            </div>
        </div>
    </div>
@endsection