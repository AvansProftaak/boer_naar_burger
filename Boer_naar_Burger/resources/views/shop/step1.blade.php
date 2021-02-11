@extends('layouts.shop')

@section('content')
<div class="page-container-shop">
    <div>
        <h1 class="shop-title p-2">{{ $shop->name }}</h1>
    </div>
    <div>
        <img src="/storage/{{ $shop->shop_banner }}" class="w-100 py-2" alt="shop image"/>
    </div>
    <div class="pt-4">
        <p>{{ $shop->description }}</p>
    </div>
    <div class="py-4">
        <h3 class="shop-products p-2">Producten</h3>
    </div>
    <hr class="shop-border m-0">

@foreach($shop->products as $product)
    <div class="pt-3 border-shop">
        <div class="d-flex justify-content-between align-items-baseline">
            <div class = "product-width">
                <p>{{ $product->name }}
                    <a data-toggle="collapse" href="#description{{ $product->id }}" role="button" aria-expanded="false" aria-controls="description{{ $product->id }}">
                        <i class="pl-2 fa fa-chevron-down"></i>
                        <i class="pl-2 fa fa-chevron-up"></i></a></p>
            </div>
            <div class = "price-width">
                <p>€{{ $product->price }}</p>
            </div>
                <add-product-component></add-product-component>
            <div class = "price-width text-right">
                <p>€0,00</p>
            </div>
        </div>
    </div>
    <div id="description{{ $product->id }}" class="collapse pt-3 border-shop">
        <p>{{ $product->description }}</p>
    </div>
@endforeach

    <div class="d-flex justify-content-between pt-4">
        <h3 class="font-weight-bolder">Bedrag</h3>
        <h3 class="font-weight-bolder">€0,00</h3>
    </div>
    <div class="text-right pt-4 pb-lg-5">
        <button type="submit" onclick="window.location='/shop/{{ $shop->id }}/step2'" class="btn btn-green btn-padding">Verder</button>
    </div>
</div>
@endsection
