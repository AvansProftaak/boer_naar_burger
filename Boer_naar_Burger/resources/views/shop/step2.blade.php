@extends('layouts.shop')

@section('content')
<div class="page-container-shop">
    <div class="pt-4">
        <h3 class="font-weight-bolder">Overzicht bestelling {{ $shop->name }}</h3>
    </div>

    <hr class="shop-border m-0 order-overview-width">

    <div class="pt-2 border-shop order-overview-width">
        <div class="d-flex justify-content-between align-items-baseline border-shop">
            <p class="mb-2">2x</p>
            <p class="mb-2">Granny Smith Appels</p>
            <p class="mb-2">€2,00</p>
        </div>
        <div class="pt-2 d-flex justify-content-between align-items-baseline border-shop">
            <p class="mb-2">1x</p>
            <p class="mb-2">Jonagold Appels</p>
            <p class="mb-2">€0,80</p>
        </div>
        <div class="pt-2 d-flex justify-content-between align-items-baseline">
            <p class="mb-2 font-weight-bold">Totaal:</p>
            <p class="mb-2 font-weight-bold">€2,80</p>
        </div>
    </div>

    <div class="pt-4">
        <h3 class="font-weight-bolder">Uw gegevens</h3>
    </div>

    <div class="pt-2">
        <form action="../account/" enctype="multipart/form-data" method="POST">
            @csrf

            <div class="form-group row">
                <!-- First Name -->
                <div class="col-5">
                    <label for="first_name" class="pl-2 user-data-header">{{ __('Voornaam') }}</label>
                    <input id="first_name" type="text" class="form-control rounded-borders shop-form-background @error('first_name') is-invalid @enderror" value="{{ Auth::user() ? Auth::user()->first_name : 'Voornaam' }}" name="first_name" required autocomplete="fname">
                </div>
                <!-- Last Name -->
                <div class="col">
                    <label for="last_name" class="pl-2 user-data-header">{{ __('Achternaam') }}</label>
                    <input id="last_name" type="text" class="form-control rounded-borders shop-form-background @error('last_name') is-invalid @enderror" value="{{ Auth::user() ? Auth::user()->last_name : 'Achternaam' }}" name="last_name" required autocomplete="lname">
                </div>
            </div>

            <!-- Gender -->
            <div class="form-group">
                <p class="user-data-header ml-2 mb-0">Geslacht</p>
                <div class="d-flex row">
                    <div class="form-check px-4 ml-3">
                        <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                               @if((Auth::user() ? Auth::user()->gender : null) == 'MALE') checked @endif>
                        <label class="form-check-label" for="male">
                            Man
                        </label>
                    </div>
                    <div class="form-check px-4">
                        <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                               @if((Auth::user() ? Auth::user()->gender : null) == 'FEMALE') checked @endif>
                        <label class="form-check-label" for="female">
                            Vrouw
                        </label>
                    </div>
                    <div class="form-check px-4">
                        <input class="form-check-input" type="radio" name="gender" id="other" value="other"
                               @if((Auth::user() ? Auth::user()->gender : null) == 'OTHER') checked @endif>
                        <label class="form-check-label" for="other">
                            Anders
                        </label>
                    </div>
                </div>
            </div>

            <!-- E-mail Address -->
            <div class="form-group row px-0">
                <div class="col">
                    <label for="email" class="pl-2 user-data-header">{{ __('E-Mailadres') }}</label>
                    <input id="email" type="email" class="form-control rounded-borders shop-form-background @error('email') is-invalid @enderror" name="email" value="{{ Auth::user() ? Auth::user()->email : 'E-mailadres' }}" required autocomplete="email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                    @enderror
                </div>
            </div>

            <div class="form-group row mx-1">
                <!-- Street -->
                <div class="col-8 px-0">
                    <label for="street" class="pl-2 user-data-header">{{ __('Straat') }}</label>
                    <input id="street" type="text" class="form-control rounded-borders shop-form-background @error('street') is-invalid @enderror" value="{{ Auth::user() ? Auth::user()->street : 'Straat' }}" name="street" required autocomplete="street">
                </div>
                <!-- Housenumber -->
                <div class="col-4 pl-4 pr-0">
                    <label for="house_number" class="pl-2 user-data-header">{{ __('Huisnummer') }}</label>
                    <input id="house_number" type="text" class="form-control rounded-borders shop-form-background @error('house_number') is-invalid @enderror" value="{{ Auth::user() ? Auth::user()->house_number : 'Huisnummer' }}" name="house_number" required autocomplete="housenumber">
                </div>
            </div>

            <div class="form-group row mx-1">
                <!-- Zipcode -->
                <div class="col px-0">
                    <label for="zipcode" class="pl-2 user-data-header">{{ __('Postcode') }}</label>
                    <input id="zipcode" type="text" class="form-control rounded-borders shop-form-background @error('zipcode') is-invalid @enderror" value="{{ Auth::user() ? Auth::user()->zipcode : 'Postcode' }}" name="zipcode" required autocomplete="zipcode">
                </div>
                <!-- City -->
                <div class="col pl-4 pr-0">
                    <label for="city" class="pl-2 user-data-header">{{ __('Stad') }}</label>
                    <input id="city" type="text" class="form-control rounded-borders shop-form-background @error('city') is-invalid @enderror" value="{{ Auth::user() ? Auth::user()->city : 'Stad' }}" name="city" required autocomplete="city">
                </div>
            </div>

            <div class="pt-4">
                <h3 class="shop-products p-2">Account registeren (optioneel)
                <a data-toggle="collapse" href="#shop-register" role="button" aria-expanded="true" aria-controls="shop-register">
                    <i class="fa fa-chevron-up chevron-category float-right px-2"></i>
                    <i class="fa fa-chevron-down chevron-category float-right px-2"></i>
                </a></h3>
            </div>

            <div id="shop-register" class="collapsed">
                <p>Vul een wachtwoord in om een account aan te maken.</p>
                <div class="form-group row mx-1">
                    <div class="col px-0">
                        <label for="password" class="pl-2 user-data-header">{{ __('Wachtwoord') }}</label>
                        <input id="password" type="password" class="form-control rounded-borders shop-form-background @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                                        <strong>Wachtwoorden komen niet overeen.</strong>
                                    </span>
                        @enderror
                    </div>

                    <div class="col pl-4 pr-0">
                        <label for="password-confirm" class="pl-2 user-data-header">{{ __('Bevestig wachtwoord') }}</label>
                        <input id="password-confirm" type="password" class="form-control rounded-borders shop-form-background" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>
            </div>

            <!-- select payment method -->
            <div class="form-group row mx-1 pt-4">
                <label for="payment-method" class="pl-2 user-data-header">{{ __('Selecteer Betaalmethode') }}</label>
                <select class="form-control rounded-borders shop-form-background">
                    <option>iDEAL</option>
                    <option>Mastercard</option>
                    <option>Visa Card</option>
                    <option>PayPal</option>
                </select>
            </div>

            <!-- privacy policy agreement -->
            <div class="form-group row mx-1 pt-2">
                <div class="col align-items-baseline px-0">
                    <div class="form-check">
                        <input class="form-check-input mt-2" type="checkbox" name="has_accepted_terms" id="has_accepted_terms">
                        <label class="pl-2 user-data-header" for="has_accepted_terms">
                            Ik ga akkoord met de <a href="#">gebruikersvoorwaarden</a> en het <a href="#">privacybeleid</a> van Boer naar Burger
                        </label>
                    </div>
                </div>
            </div>

            <div class="pt-4 pb-lg-5 d-flex justify-content-between">
                <button type="submit" onclick="window.location='/shop/{{ $shop->id }}/step1'" class="btn btn-green btn-padding">Terug</button>
                <button type="submit" onclick="window.location='/shop/{{ $shop->id }}/step3'" class="btn btn-green btn-padding">Betalen</button>
            </div>
        </form>
    </div>
</div>
@endsection
