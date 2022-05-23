<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class StampController extends Controller
{
    public function index()
    {
        return view('stamp');
    }

    public function begin(Request $request)
    {
        $user = Auth::user();

        $items = Attendance::with('User')->get();
        
        $items = Attendance::create([
            'user_id' => $user->id,
            'date' => Carbon::today(),
            'begin' => Carbon::now(),
        ]);

        unset($items['_token']);

        return redirect('/stamp');
        
    }

    public function finish(Request $request)
    {
        $user = Auth::user();

        $items = Attendance::with('User')->get();
        unset($items['_token']);

        $items = Attendance::where('user_id', $user->id)->latest()->first();
        $items->update([
            'finish' => Carbon::now(),]);

        return redirect('/stamp');
    }
    

}
