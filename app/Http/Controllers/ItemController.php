<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Item;

class ItemController extends Controller
{
    public function index(Request $request) {
    		$items = Item::all();
    		return view('items.index', array('items' => $items));
    }
}
