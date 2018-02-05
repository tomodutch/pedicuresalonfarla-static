<header>
  <div style="padding: 5px 0 0 0; border-bottom: 1px solid #e7e7e7">
      <div class="container">
          <div class="row">
              <div class="col-xs-12">
              <small class="text-muted">Uw voeten in de beste handen</small>
                <ul class="list-unstyled pull-right list-inline">
                    <li><i class="fab fa-instagram fa-lg" style="color: #0086d2"></i>  </li>
                    <li>
                        <i class="fab fa-facebook-square fa-lg" style="color: #0086d2"></i>              
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

  </div>

  <div style="color: #0086d2">
      <div class="container">
          <div class="row col-xs-12">
              <a href="{{$page->url('/')}}">
                <h1 class="text-center" style="font-family: BrockScript;">Pedicuresalon Farla</h1>                  
              </a>
          </div>
      </div>
  </div>

  <nav class="navbar navbar-default" role="navigation" style="border-top: 1px solid #e7e7e7">
      <input type="checkbox" id="navbar-toggle-cbox">

      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <label for="navbar-toggle-cbox" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </label>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li><a href="{{$page->url('/')}}">Home</a></li>
          <li class="{{$page->active('over-mij')}}"><a href="{{$page->url('over-mij/')}}">Over mij</a></li>
          <li class="{{$page->active('prijslijst')}}"><a href="{{$page->url('prijslijst/')}}">Prijslijst</a></li>
          <li class="dropdown {{$page->active('behandeling/') }}">
          <input type="checkbox" id="service-cbox">
            <label for="service-cbox" class="dropdown-toggle" data-toggle="dropdown">Behandelingen <b class="caret"></b></label>
                <ul class="dropdown-menu" id="service-nav">
                    <li class="{{ $page->active('behandeling/pedicure-basis-all-in') }}"><a href="{{$page->url('behandeling/pedicure-basis-all-in/')}}">Pedicure basis all-in</a></li>
                    <li class="{{ $page->active('behandeling/pedicure-deluxe') }}"><a href="{{$page->url('behandeling/pedicure-deluxe/')}}">Pedicure deluxe</a></li>
                    <li class="{{ $page->active('behandeling/pedicure-la-couleur') }}"><a href="{{$page->url('behandeling/pedicure-la-couleur/')}}">Pedicure la couleur</a></li>
                    <li class="{{ $page->active('behandeling/gel-nail-repair') }}"><a href="{{$page->url('behandeling/gel-nail-repair/')}}">Gel nail repair</a></li>
                    <li class="{{ $page->active('behandeling/body-sugaring') }}"><a href="{{$page->url('behandeling/body-sugaring/')}}">Body sugaring</a></li>
                </ul>
        </li>

          <li class="{{$page->active('afspraak-maken')}}"><a href="{{$page->url('afspraak-maken')}}">Afspraak maken</a></li>
      </ul>
      </div><!-- /.navbar-collapse -->
  </nav>
</header>