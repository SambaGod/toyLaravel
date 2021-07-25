<?php

namespace App\Http\Controllers;

use App\Models\Todo;
use Illuminate\Support\Facades\Auth;

class HomePageController extends Controller
{
    public function index () {
        $user = Auth::user();
        return view('home', [
            'user' => $user,
        ]);
    }
}
