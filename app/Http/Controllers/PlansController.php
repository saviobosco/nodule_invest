<?php
/**
 * Created by PhpStorm.
 * User: saviobosco
 * Date: 1/6/19
 * Time: 9:24 PM
 */

namespace App\Http\Controllers;


class PlansController extends Controller
{
    public function index()
    {
        return view('plans.index');
    }
}