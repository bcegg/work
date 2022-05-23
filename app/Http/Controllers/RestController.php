<?php

namespace App\Http\Controllers;

use App\Models\Rest;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RestController extends Controller
{
    public function index()
    {
        return view('stamp');
    }

    public function restin(Request $request)
    {
        $user = Auth::user();

        $items = Rest::with('User')->get();

        $items = Rest::create([
            'user_id' => $user->id,
            'rest_in' => Carbon::now(),
        ]);

        unset($items['_token']);

        return redirect('/stamp');
    }

    public function restout(Request $request)
    {
        $user = Auth::user();

        $items = Rest::with('User')->get();
        unset($items['_token']);

        $items = Rest::where('user_id', $user->id)->latest()->first();
        $items->update([
            'rest_out' => Carbon::now(),
        ]);

        return redirect('/stamp');
    }
}
