<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $age_2 = $request->age_2;
        $gender_2 = $request->gender_2;

        $users = User::
        when($age_2, function ($q) use ($age_2) {
            return $q->where('age', $age_2);
        })->when($gender_2, function ($q) use ($gender_2) {
            return $q->where('gender', $gender_2);
        })->where('role_id', 2)->get();

        return view('search')->with(['users' => $users]);
    }
}
