@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row account-profile-card">
                <div class="col-3 text-center pt-4 green-background">
                    <div>
                        <img src="../../img/logo_bnb.png" alt="Profile Picture" class="w-75"/>
                        <h3 class="white-text p-3">Registreer als Burger</h3>
                    </div>
                </div>
                <div class="col-9 pr-2">
                    <h2 class="pt-4 pl-4 data-headers">Account registreren</h2>
                    <hr class="mx-2">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row mx-1">
                            <!-- First Name -->
                            <div class="col-5">
                                <label for="first_name" class="pl-2 user-data-header">{{ __('Voornaam') }}</label>
                                <input id="first_name" type="text" class="form-control rounded-borders @error('first_name') is-invalid @enderror" placeholder="Jan" name="first_name" required autocomplete="fname">
                            </div>
                            <!-- Last Name -->
                            <div class="col">
                                <label for="last_name" class="pl-2 user-data-header">{{ __('Achternaam') }}</label>
                                <input id="last_name" type="text" class="form-control rounded-borders @error('last_name') is-invalid @enderror" placeholder="Bakker" name="last_name" required autocomplete="lname">
                            </div>
                        </div>

                        <!-- E-mail Address -->
                        <div class="form-group row mx-1">
                            <div class="col-5">
                                <label for="email" class="pl-2 user-data-header">{{ __('E-Mailadres') }}</label>
                                <input id="email" type="email" class="form-control rounded-borders @error('email') is-invalid @enderror" name="email" placeholder="email@voorbeeld.nl" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>

                            <div class="col">
                                <label for="password" class="pl-2 user-data-header">{{ __('Wachtwoord') }}</label>
                                <input id="password" type="password" class="form-control rounded-borders @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>Wachtwoorden komen niet overeen.</strong>
                                    </span>
                                    @enderror
                            </div>

                            <div class="col">
                                <label for="password-confirm" class="pl-2 user-data-header">{{ __('Bevestig wachtwoord') }}</label>
                                <input id="password-confirm" type="password" class="form-control rounded-borders" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <!-- Register Button -->
                        <div class="form-group row mb-3">
                            <div class="ml-3 pl-3">
                                <button type="submit" class="btn btn-green px-5">
                                    {{ __('Registreer') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
