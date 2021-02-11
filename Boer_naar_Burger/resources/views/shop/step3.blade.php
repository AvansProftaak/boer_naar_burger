@extends('layouts.shop')

@section('content')
<div class="page-container-shop">
    <div class="pt-4">
        <h3 class="font-weight-bolder">Testfase</h3>
    </div>

    <div class="pt-4">
        <p>Boer naar Burger bevindt zich nog in de ontwikkelfase. Het is momenteel (nog) niet mogelijk daadwerkelijk
        een bestelling te plaatsen. Indien u op de hoogte gehouden wilt worden over Boer naar Burger stuur een bericht naar
            <a href="mailto:info@boernaarburger.ml">info@boernaarburger.ml</a>.</p>
    </div>

    <div class="pt-4">
        <h3 class="font-weight-bolder">Betaling</h3>
    </div>

    <div class="pt-4">
        <p>Kies hieronder om een betaling te simuleren.</p>
    </div>

    <div class="pt-4">
        <button type="button" onclick="window.location='/shop/{{ $shop->id }}/success'" class="mx-2 btn btn-success">Success</button>
        <button type="button" onclick="window.location='/shop/{{ $shop->id }}/failure'" class="mx-2 btn btn-danger">Failed</button>
    </div>
</div>
@endsection
