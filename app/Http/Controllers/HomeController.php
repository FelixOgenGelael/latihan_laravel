<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        // all digunakan untuk memanggil semua data yang ada di table
        $users = User::all();

        // compact digunakan unutk melempar data ke view
        return view('welcome', compact('users'));
    }

    public function show($id)
    {
        // findOrFail digunakan untuk mencari data berdasarkan kolom id
        $user = User::findOrFail($id);

        // compact digunakan unutk melempar data ke view
        return view('user-detail', compact('user'));
    }
}
