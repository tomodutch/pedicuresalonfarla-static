@extends('_layouts.master')

@section('body')
<div class="container-fluid">
  <div class="hero-image">
      <div class="hero-text">
        <h1>Pedicuresalon Farla</h1>
        <p>Uw voeten in de beste handen</p>
        <button class="btn btn-default">Afspraak maken</button>
      </div>
    </div>

  <div class="container-fluid">
    <div class="row" style="border-top: 2px solid #0086d2;display: flex; min-height: 40vh">
      <div class="col-xs-6 col-md-4" style="padding-left: 0; background: url('http://pedicuresalonfarla.nl/wp-content/uploads/2015/09/IMG_0063a.jpg'); background-size: cover; background-position: top"></div>
      <div class="col-xs-6 col-md-8" style="display: flex; align-items: center;">
          <blockquote style="border: none">
            <p>
                Meer dan <b>10 jaar</b> verzorg ik met plezier de voeten van het eiland Tholen                      
            </p>
              <small><cite title="Source Title">Irene Farla</cite></small>
            </blockquote>
      </div>
    </div>

    <a href="#">
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
  </div>
  
  <div id="map"></div>

  <div class="container">
    <div class="row top15">
      <div class="col-xs-12 col-md-4">
          <div class="card" style="border:none">
              <div class="card-body">
                <center>
                    <div class="rounded" style="font-size: 6px; padding: 15px;  background-color: #0086d2; color: white">
                  <i class="far fa-heart fa-10x"></i>
                  <h4 class="text-center">Aandacht</h4>
                  </div>
                  <p class="text-center text-muted">U staat centraal tijdens de behandeling</p>
                  </center>
              </div>
            </div>
      </div>
      <div class="col-xs-12 col-md-4">
          <div class="card" style="border:none">
              <div class="card-body">
                <center>
                    <div class="rounded" style="font-size: 6px; padding: 15px; background-color: #0086d2; color: white">
                  <i class="fas fa-user-md fa-10x"></i>
                  <h4 class="text-center">Vakmanschap</h4>
                </div>
                  <p class="text-center text-muted">Aangesloten bij ProVoet en meer dan 10 jaar praktiserend pedicure</p>
                  </center>
              </div>
            </div>
      </div>
      <div class="col-xs-12 col-md-4">
          <div class="card" style="border:none">
              <div class="card-body">
                <center>
                <div class="rounded" style="font-size: 6px; padding: 15px;  background-color: #0086d2; color:white">
                  <i class="far fa-smile fa-10x text-center"></i>
                <h4 class="text-center">Gezellig</h4>          
              </div>
              <p class="text-center text-muted">Heerlijk genieten van een babbel tijdens een wel verdiende behandeling</p>                        
            </center>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
