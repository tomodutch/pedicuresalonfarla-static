@extends('_layouts.master')

@section('body')
    <div class="container container-card top30 bottom30">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h1>Pedicure la couleur</h1>
                <p>Na het genieten van een BASIS ALL-IN behandeling kiest u een prachtige kleur uit voor uw nagels. Deze wordt toegepast met een soak-off nagellak product. Door deze werkwijze kunt u na behandeling direct  uw schoenen aan want de nagels zijn helemaal uit gehard!</p>

                <h2>Werkwijze</h2>
                <p>
                    <ol>
                        <li>De nagels worden ontvet met een primer, daardoor hecht de nagellak beter</li>
                        <li>De basis wordt aangebracht met een speciale soak off  basis lak</li>
                        <li>Door de warmte van een led lamp worden de lagen nagellak snel gedroogd</li>
                        <li>De gekozen kleur wordt aangebracht</li>
                        <li>Deze wordt ook weer uitgehard onder de led lamp</li>
                        <li>Als laatste wordt de soak-off top laag aangebracht en uitgehard</li>
                        <li>De nagels worden met een speciale lotion afgedaan zodat ze mooi gaan glimmen</li>
                    </ol>
                </p>
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="img-responsive block-center" src="{{ $page->url('images/laushine-gel-lak.jpg') }}" alt="">
            </div>
        </div>
    </div>
@endsection