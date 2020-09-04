@extends('_layouts.master')

@section('body')
<div id="map"></div>

    <div class="container container-card top30 bottom30">
    <div class="row">
            <div class="col-xs-12">
                <h2>Contactgegevens</h2>
                <table class="table table-primary">
                    <tbody>
                        <tr>
                            <td>
                                <i class="fab fa-whatsapp" style="color: black"></i>
                            </td>
                            <td>
                                <a href="http://wa.me/+310624526696?text=Hallo. ik wil een afspraak maken." target="_blank">Klik hier om een afspraak te maken via WhatsApp</a>
                            </td>
                        </tr>
                        <tr>
                            <td>Telefoonnummer</td>
                            <td>06 24526696</td>
                        </tr>
                        <tr>
                            <td>Adres</td>
                            <td>4695BJ Rädda Barnenstraat 1</td>
                        </tr>
                        <tr>
                            <td>Plaats</td>
                            <td>Sint-Maartensdijk</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
        
        <div class="row">
            <div class="col-xs-12">
                <h1>Openingstijden</h1>
                <table class="table table-primary">
                    <thead>
                        <tr>
                            <th>Dag</th>
                            <th>Vanaf</th>
                            <th>Tot</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>Maandag</td>
                            <td>9:00</td>
                            <td>21:00</td>
                        </tr>
                        <tr>
                            <td>Dinsdag</td>
                            <td>9:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <td>Woensdag</td>
                            <td>9:00</td>
                            <td>21:00</td>
                        </tr>
                        <tr>
                            <td>Donderdag</td>
                            <td>9:00</td>
                            <td>17:00</td>
                        </tr>
                        <tr>
                            <td>Vrijdag</td>
                            <td>9:00</td>
                            <td>14:00</td>
                        </tr>
                        <tr>
                            <td>Zaterdag</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                        <tr>
                            <td>Zondag</td>
                            <td>-</td>
                            <td>-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
  @include('_layouts/map')
@endsection
