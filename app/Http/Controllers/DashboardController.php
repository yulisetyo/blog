<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
	 * description 
	 */
	public function __construct()
	{
		$this->middleware('auth');
	}

	/**
	 * description 
	 */
	public function index()
	{
		return "this is dashboard";
	}

	/**
	 * description 
	 */
	public function userManagement(Request $request)
	{
		
	}
}
