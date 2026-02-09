<?php

namespace App\Http\Controllers;

use App\Models\PostinganBerita;
use Illuminate\Http\Request;

class PostinganBeritaController extends MasterController
{
    public function __construct()
    {
        $this->model = PostinganBerita::class;
        $this->viewPath = 'admin.pages.postinganberita';
    }

    public function show($id)
    {
        $postinganberita = PostinganBerita::find($id);
        return view($this->viewPath . '.show', compact('postinganberita'));
    }
}
