<?php 
namespace App\Http\Controllers;

use App\User;
use App\Http\Controllers\Controller;


class ArtikelController extends Controller
{
	public function index()
	{
		return view('artikel.index',['name' => 'Fauzan']);
	}
}

?>