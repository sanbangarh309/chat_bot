<?php
namespace App\Http\Controllers;
use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;
class ButtonController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
    	return View('button', [
                    'data' => '',
                    'page' => 'home'
                    ]);
    }
}
