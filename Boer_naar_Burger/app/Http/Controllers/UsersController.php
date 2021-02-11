<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index(User $user)
    {
        return view('account.index', compact('user'))->with('user', auth()->user());
    }

    public function edit(User $user)
    {
        return view('account.edit', compact('user'))->with('user', auth()->user());
    }

    public function update(User $user)
    {
        $data = request()->validate([
            'first_name'            => '',
            'insertion'             => '',
            'last_name'             => '',
            'gender'                => '',
            'email'                 => '',
            'phone_number'          => '',
            'street'                => '',
            'house_number'          => '',
            'zipcode'               => '',
            'city'                  => '',
            'country'               => '',
            'iban'                  => '',
            'company'               => '',
            'vat_number'            => '',
            'date_of_birth'         => '',
            'has_accepted_terms'    => '',
            'custom_field_1'        => '',
            'custom_field_2'        => '',
            'user_type_id'          => '',
            'password'              => '',
            'avatar'                => 'image',
        ]);

        if (request('avatar')) {
            $imagePath = request('avatar')->store('uploads','public');

            $avatar = Image::make(public_path("storage/{$imagePath}"))->fit(1000,1000);
            $avatar->save();

            $imageArray = ['avatar' => $imagePath];
        }

        auth()->user()->update(array_merge(
            $data,
            $imageArray ?? []
        ));

        return redirect("/account/");
    }
}
