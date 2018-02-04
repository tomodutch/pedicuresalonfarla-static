@extends('_layouts.master')

@section('body')
    <div class="container container-card top30 bottom30">
        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h1>Pedicure deluxe</h1>
                <p>Naast een BASIS ALL-IN behandeling geniet u van alle extra’s die mijn salon te bieden heeft. Wat deze behandeling zo luxe maakt is de paraffine als afsluiting.</p>

                <h2>Paraffine</h2>
                <p>Paraffine is een wasachtige stof die na het opwarmen vloeibaar wordt. De voeten worden ingesmeerd met een heerlijke zachte crème en worden dan met behulp van een kwast met de warme paraffine ingesmeerd. De voeten worden in een folie gewikkeld en daarna onder een warme deken toegedekt. Dit zorgt ervoor dat de poriën van de huid goed open gaan zodat de paraffine diep in de huid kan doordringen. De huid voelt heerlijk zacht en ontspannen aan. Voor een extra fris gevoel gebruik ik in mijn salon paraffine met tea tree.</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="img-responsive block-center" src="{{$page->url('images/voeten-plaatje-1.jpg')}}" alt="">
            </div>
        </div>

        <div class="row">
            <div class="col-xs-12 col-md-6">
                <h2>Tea tree</h2>
                <p>Tea tree wordt gewonnen uit de bladeren van de Australische tea tree boom. De originele Australische bevolking gebruikte de bladeren al heel lang voor allerlei behandelingen van brandwonden, pijnen, wonden en ter bestrijding van infecties en huidaandoeningen. Pas nadat het naar Europa werd meegenomen kwam de tea tree in de belangstelling en er werd inderdaad een reinigende en ontsmettende werking waargenomen. Het werd vele jaren in Europa gebruikt. Totdat omstreeks na de tweede wereld oorlog de synthetische producten de overhand kregen. De laatste jaren zijn de mensen zich meer bewust aan het worden wat de natuur ons te bieden heeft.</p>
            </div>
            <div class="col-xs-12 col-md-6">
                <img class="img-responsive block-center" src="{{$page->url('images/tea-tree-bladeren.jpg')}}" alt="">
            </div>
        </div>
    </div>
@endsection