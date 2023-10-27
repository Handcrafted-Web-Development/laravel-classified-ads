<?php

namespace App\Http\Controllers;

use App\Models\Ad;

use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class PublicController extends Controller
{
    public function index(): View
    {
        $ads = Ad::all();
        return view('ads', ['ads' => $ads]);
    }

    public function show(Ad $ad, string $id): View
    {
        $ad = Ad::find($id);
        $user = Auth::getUser();

        return view('ad', ['ad' => $ad, 'user' => $user]);
    }
}
