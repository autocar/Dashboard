<?php

namespace Laralum\Dashboard\Controllers;

use App\Http\Controllers\Controller;
use Laralum\Dashboard\Widgets;

class DashboardController extends Controller
{
    public function index()
    {
        $widgets = Widgets::get();

        return view('laralum_dashboard::dashboard', ['widgets' => $widgets]);
    }
}
