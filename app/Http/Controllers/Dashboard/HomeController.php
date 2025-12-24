<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * ? Home Page
     * @return Application|Factory|View
     */
    public function index(): Application|Factory|View
    {
        return view('dashboard.index');
    }
}
