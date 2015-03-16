<?php 
namespace PizzaOrder\Http\Controllers;
	
	/* 
	use Config; se doda prije klase da proradi Config::get(); 
	druga metoda je koristiti config('nesto.nesto'), 
	treća staviti '\' ispred Config::get()
	*/
	
use Config; 

class WelcomeController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Welcome Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "marketing page" for the application and
	| is configured to only allow guests. Like most of the other sample
	| controllers, you are free to modify or remove it as you desire.
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		$this->middleware('guest');
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index()
	{
		return view('welcome');
	}
	
	public function about()
	{
		return view('pages.about');
	}
	
	public function info()
	{
		$site_name = Config::get('app.sitename');
		$email_address = Config::get('app.mail');
		
		return view('pages.info', compact('site_name', 'email_address')); 
		//compact funkcija - potraži varijablu prema imenu ključa
	}
	


}
