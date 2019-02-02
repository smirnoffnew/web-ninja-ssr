<?php
/**
 * Created by PhpStorm.
 * User: smirnoff
 * Date: 02.02.19
 * Time: 3:26
 */

namespace App\Http\Controllers;
use Illuminate\Http\Request;

class SPAController extends Controller
{
    public function index(Request $request)
    {
        return view('spa-page');
    }
}
