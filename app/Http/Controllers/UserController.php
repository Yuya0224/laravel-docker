<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{

  public function index()
  {
    $posts = User::all()->first();
    return response()->json($posts);
  }
}

// INSERT INTO テーブル名 (列名1, 列名2,...) VALUES (値1, 値2,...);
