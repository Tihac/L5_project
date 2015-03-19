<?php namespace PizzaOrder\Http\Controllers;

use PizzaOrder\Http\Requests;
use PizzaOrder\Http\Controllers\Controller;

use Request;
use PizzaOrder\Ingredient; //bez ovog ne zna pronaći model

class IngredientsController extends Controller {

	//
	
	public function index() {
		
		return view ('pages.ingredients');
		}

	public function save() {
		
		$input = Request::all();
		
		$ingredient = new Ingredient;
		$ingredient->name = $input['name'];
		$ingredient->save();
		
		return Redirect('ingredients-form')->with('message', 'Ingredients inserted successfully');
		}
}
