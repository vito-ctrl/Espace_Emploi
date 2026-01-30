<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SerchController extends Controller 
{
    public function index(Request $request){
        $search = $request->input('search');

        $users = User::when($search, function ($query, $search) {
            $query->where('name', 'LIKE', "%{$search}%")
                  ->orWhere('email', 'LIKE', "%{$search}%");
        })->get();

        return view('dashboard', compact('users'));
    }
}
