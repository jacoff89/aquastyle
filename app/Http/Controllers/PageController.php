<?php

namespace App\Http\Controllers;

use App\Models\Page;

class PageController
{
    public function index(Page $page)
    {
        return view('pages', compact('page'));
    }
}
