@extends('layouts.shop')

@section('content')
    <div class="page-container-shop">
        <div class="pt-4">
            <h3 class="font-weight-bolder">{{ $shop->name }}</h3>
        </div>
        <div class="pt-4">
            <h3 class="font-weight-bolder">Betaling mislukt</h3>
        </div>

        <div class="pt-4">
            <p>Helaas is er iets misgegaan met uw bestelling. Ga terug naar de shop om het opnieuw te proberen.</p>
            <p>Blijft u problemen ervaren? Neem dan <a href="{{ route('pages.contact') }}">contact</a> op met Boer naar Burger.</p>
        </div>

        <div class="text-right pt-4 pb-lg-5">
            <button type="submit" onclick="window.location='/shop/{{ $shop->id }}/step1'" class="btn btn-green btn-padding">Terug naar de shop</button>
        </div>
    </div>
@endsection
