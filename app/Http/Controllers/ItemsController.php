<?php

namespace App\Http\Controllers;

use App\Models\Items;
use App\Models\User;
use Illuminate\Http\Request;

class ItemsController extends Controller
{
    public function index()
    {
        $students = Items::all();
        return view('ItemList', compact('items'));
    }
}