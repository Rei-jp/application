<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;
use App\Models\Post; // 追加



class PostController extends Controller
{
    // 追加
    public function index()
    {
        // 編集
        return Inertia::render("Post/Index");
    }
}