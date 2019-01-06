<?php
/**
 * Created by PhpStorm.
 * User: saviobosco
 * Date: 1/6/19
 * Time: 9:02 PM
 */

namespace App\Http\Controllers;


class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard.index');
    }
}