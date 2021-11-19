@extends('_layouts.master')

@section('body')
    <div class="container container-card top30 bottom30 appointment">
    <div class="row">
            <div class="col-xs-12 col-sm-6">
                <h2>Contactgegevens</h2>
                @include('_layouts/contact')
            </div>
            <div class="col-xs-12 col-sm-6">
                <h2>Openingstijden</h2>
                @include('_layouts/openinghours')
            </div>
        </div>
        <div class="row">
  <div class="col-md-12">
  @include('_layouts/map')
</div>
  </div>
    </div>
@endsection

@section('scripts')
@endsection
