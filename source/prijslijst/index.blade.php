@extends('_layouts.master')

@section('body')
<div class="container container-card top30 bottom30">
    <div class="row">
        <table class="table table-responsive">
            <tbody>
                <tr>
                    <td colspan="3"><a href="{{ $page->url('/behandeling/pedicure-basis-all-in/') }}">Pedicure Basis All-in</a></td>
                    <td>&euro; 23,-</td>
                    <td><a href="{{ $page->url('/behandeling/pedicure-basis-all-in/') }}">Lees meer</a></td>
                </tr>
                <tr>
                    <td colspan="3"><a href="{{ $page->url('/behandeling/pedicure-deluxe/') }}">Pedicure deluxe</a></td>
                    <td>&euro; 32,-</td>
                    <td><a href="{{ $page->url('/behandeling/pedicure-deluxe/') }}">Lees meer</a></td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
