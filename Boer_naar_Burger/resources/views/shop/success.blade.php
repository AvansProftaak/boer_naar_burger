@extends('layouts.shop')

@section('content')
<div class="page-container-shop">
    <div class="pt-4">
        <h3 class="font-weight-bolder">Betaling gelukt!</h3>
    </div>

    <div class="pt-4">
        <p>Bedankt voor uw bestelling bij Shopname. Uw bestelling is succesvol afgerond. Binnen enkele minuten ontvangt
         u een bevestiging op het door u opgegeven e-mail adres.</p>
        <p><em><strong>Let op!</strong> Soms wordt e-mail onderschept door een spamfilter. Controleer daarom ook uw spambox
             indien u binnen enkele minuten geen e-mail ontvangen heeft. Niks ontvangen? Neem <a href="{{ route('pages.contact') }}">contact</a> op met Boer naar Burger.</em></p>
    </div>

    <div class="text-right pt-4 pb-lg-5">
        <button type="submit" onclick="window.location='/shop/{{ $shop->id }}/step1'" class="btn btn-green btn-padding">Terug naar de shop</button>
    </div>
</div>
@endsection
