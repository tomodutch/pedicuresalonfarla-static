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
            <h1 class="text-center" style="font-family: BrockScript;">Pedicuresalon Farla</h1>
          </div>
      </div>
  </div>

  <nav class="navbar navbar-default" role="navigation" style="border-top: 1px solid #e7e7e7">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      </div>

      

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
          <li class="{{$page->active('over-mij')}}"><a href="{{$page->url('over-mij')}}">Over mij</a></li>
          <li class="{{$page->active('prijslijst')}}"><a href="{{$page->url('prijslijst')}}">Prijslijst</a></li>
          <li class="{{$page->active('behandelingen')}}"><a href="{{$page->url('behandelingen')}}">Behandelingen</a></li>
          <li class="{{$page->active('afspraak-maken')}}"><a href="{{$page->url('afspraak-maken')}}">Afspraak maken</a></li>
      </ul>
      </div><!-- /.navbar-collapse -->
  </nav>
</header>