<?php

namespace App\Http\Controllers;

use App\Models\Beli;
use Illuminate\Http\Request;

class getListController extends Controller
{
    public function index()
    {
        $listMelon = Beli::orderBy('created_at', 'desc')->get();
        return view('list_belanja.list',compact(
            'listMelon'
        ));
    }
}
