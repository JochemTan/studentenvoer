<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Recept;

class RecipeController extends Controller
{
    public function __construct()
    {
        // recipe middleware
    }
    public function index($id)
    {
        $recipe = Recept::findOrFail($id);
        $ingredients = json_decode($recipe->ingredient,true);
        $steps = json_decode($recipe->stappen,true);
        return view('recipe.recept', compact('recipe','ingredients','steps'));
    }
    public function add()
    {
    	return view('recipe.add');
    }
    public function create(Request $request, Recept $recept)
    {
        // place data from the ingredient and amount array into 1 array
        $array = array();
    	for ($i=0; $i < count($request->ingredient); $i++) { 
           $amount['ingredient'] = $request->ingredient[$i];
           $amount['amount'] = $request->amount[$i];

           array_push($array, $amount);
        }
        // convert the just made array into a json string that will be saved in the database
        $ingredient = json_encode($array);

        // remove \r\n from any given text inside the steps
        $steps = str_replace("\r\n",'', $request->step);
        // convert array into a json string that will be saved in the database
        $json_steps = json_encode($steps);
        // create a recipe with the given data
        $recept->create([
            'naam' => $request->naam,
            'beschrijving' => $request->beschrijving,
            'bereidingstijd' => $request->bereidingstijd,
            'ingredient' => $ingredient,
            'stappen' => $json_steps,
            'personen' => $request->personen,
        ]);
        return redirect('/');
    }
    public function overview(Recept $recept)
    {
        $all = Recept::all();

        return view('overview',compact('all'));
    }
}
