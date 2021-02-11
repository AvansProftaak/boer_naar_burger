@extends('layouts.app')

@section('content')
    <div class="container pt-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="row account-profile-card">
                    <div class="col-4 text-center pt-4 green-background">
                        <div>
                            <img src="../../img/logo_bnb.png" alt="Profile Picture" class="w-75"/>
                            <h3 class="white-text p-3">Welkom bij Boer naar Burger</h3>
                        </div>
                    </div>
                    <div class="col pr-2">
                        <h2 class="pt-4 pl-4 data-headers">Log in</h2>
                        <hr class="mx-2">
                        <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- E-mail -->
                            <div class="form-group row mx-1">
                                <div class="col">
                                    <label for="email" class="pl-2 user-data-header">{{ __('E-Mailadres') }}</label>
                                    <input id="email" type="email" class="form-control rounded-borders @error('email') is-invalid @enderror" name="email" placeholder="email@voorbeeld.nl" required autocomplete="email">

                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- password -->
                            <div class="form-group row mx-1">
                                <div class="col">
                                    <label for="password" class="pl-2 user-data-header">{{ __('Wachtwoord') }}</label>
                                    <input id="password" type="password" class="form-control rounded-borders @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- remember me checkbox -->
                            <div class="form-group row mx-1">
                                <div class="col align-items-baseline">
                                    <div class="form-check">
                                        <input class="form-check-input mt-2" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="pl-2 user-data-header" for="remember">
                                            {{ __('Onthoud mij') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <!-- Login Button -->
                            <div class="form-group row mb-3">
                                <div class="ml-3 pl-3">
                                    <button type="submit" class="btn btn-green px-5">
                                        {{ __('Log in') }}
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
