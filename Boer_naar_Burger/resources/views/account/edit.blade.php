@extends('layouts.app')

@section('content')
<div class="container pt-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="row account-profile-card">
                <div class="col-3 text-center pt-4 green-background">
                    <div>
                        <div>
                            <img src="{{ $user->profileImage() }}" alt="Profile Picture" class="rounded-circle w-75 profile-photo"/>
                            <a data-toggle="modal" data-target="#profilePictureModal"><img src ="../../img/photo-icon.png" alt="camera-icon" class="photo-icon"></a>
                        </div>
                        <h3 class="white-text p-3">{{ $user->first_name }} {{ $user->last_name }}</h3>
                    </div>
                </div>
                <div class="col-9 pr-2">
                    <h2 class="pt-4 pl-4 data-headers">Gegevens</h2>
                    <hr class="mx-2">
                    <form action="../account/" enctype="multipart/form-data" method="POST">
                        @csrf
                        @method('PATCH')

                        <div class="form-group row mx-1">
                            <!-- First Name -->
                            <div class="col-5">
                                <label for="first_name" class="pl-2 user-data-header">{{ __('Voornaam') }}</label>
                                <input id="first_name" type="text" class="form-control rounded-borders @error('first_name') is-invalid @enderror" value="{{ $user->first_name }}" name="first_name" required autocomplete="fname">
                            </div>
                            <!-- Last Name -->
                            <div class="col">
                                <label for="last_name" class="pl-2 user-data-header">{{ __('Achternaam') }}</label>
                                <input id="last_name" type="text" class="form-control rounded-borders @error('last_name') is-invalid @enderror" value="{{ $user->last_name }}" name="last_name" required autocomplete="lname">
                            </div>
                        </div>

                        <!-- E-mail Address -->
                        <div class="form-group row mx-1">
                            <div class="col-5">
                                <label for="email" class="pl-2 user-data-header">{{ __('E-Mailadres') }}</label>
                                <input id="email" type="email" class="form-control rounded-borders @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Gender -->
                            <div class="col-sm-2">
                                <p class="user-data-header mb-0">Geslacht</p>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                        @if($user->gender == 'MALE') checked @endif>
                                    <label class="form-check-label" for="male">
                                        Man
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="female" value="female"
                                           @if($user->gender == 'FEMALE') checked @endif>
                                    <label class="form-check-label" for="female">
                                        Vrouw
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other"
                                           @if($user->gender == 'OTHER') checked @endif>
                                    <label class="form-check-label" for="other">
                                        Anders
                                    </label>
                                </div>
                            </div>
                            <!-- birthday -->
                            <div class="col">
                                    <label for="date_of_birth" class="pl-2 user-data-header">Geboortedatum</label>
                                    <input class="form-control rounded-borders" type="date" value="{{ $user->date_of_birth }}" id="date_of_birth" name="date_of_birth">
                            </div>
                        </div>

                        <div class="form-group row mx-1">
                            <!-- Street -->
                            <div class="col-4">
                                <label for="street" class="pl-2 user-data-header">{{ __('Straat') }}</label>
                                <input id="street" type="text" class="form-control rounded-borders @error('street') is-invalid @enderror" value="{{ $user->street }}" name="street" required autocomplete="street">
                            </div>
                            <!-- Housenumber -->
                            <div class="col-2">
                                <label for="house_number" class="pl-2 user-data-header">{{ __('Huisnummer') }}</label>
                                <input id="house_number" type="text" class="form-control rounded-borders @error('house_number') is-invalid @enderror" value="{{ $user->house_number }}" name="house_number" required autocomplete="housenumber">
                            </div>
                            <!-- Zipcode -->
                            <div class="col-sm-2">
                                <label for="zipcode" class="pl-2 user-data-header">{{ __('Postcode') }}</label>
                                <input id="zipcode" type="text" class="form-control rounded-borders @error('zipcode') is-invalid @enderror" value="{{ $user->zipcode }}" name="zipcode" required autocomplete="zipcode">
                            </div>
                            <!-- City -->
                            <div class="col">
                                <label for="city" class="pl-2 user-data-header">{{ __('Stad') }}</label>
                                <input id="city" type="text" class="form-control rounded-borders @error('city') is-invalid @enderror" value="{{ $user->city }}" name="city" required autocomplete="city">
                            </div>
                        </div>

                        <div class="form-group row mb-3 d-flex justify-content-between">
                            <div class="ml-3 pl-3">
                                <button type="submit" class="btn btn-green">
                                    {{ __('Gegevens opslaan') }}
                                </button>
                            </div>
                            <!--<div class="mr-3 pr-3">
                            <button type="button" class="btn btn-green">
                                {{ __('Wachtwoord wijzigen') }}
                            </button>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Profile Picture Modal -->
<div class="modal fade" id="profilePictureModal" tabindex="-1" role="dialog" aria-labelledby="profilePictureModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title user-data-header" id="profilePictureModalLabel">Upload foto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="../account/edit" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PATCH')

                <div class="modal-body modal-text">
                        <label for="avatar" class="">Upload afbeelding</label>
                        <input type="file" class="form-control-file @error('image') is-invalid @enderror" id="image" name="avatar">
                    @if($errors->has('image'))
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $errors->first('image') }}</strong>
                    </span>
                    @endif
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-bnb-secondary" data-dismiss="modal">Sluiten</button>
                    <button type="submit" class="btn btn-green px-2">Opslaan</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
