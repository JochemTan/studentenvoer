<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Recept;
use App\Keuken;
use Auth;

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
       $keuken =  Keuken::all();

    	return view('recipe.add',compact('keuken'));
    }
    public function create(Request $request, Recept $recept)
    {
        $this->validate($request,[
            'naam' => 'required|max:255',
            'beschrijving' => 'required|max:255',
            'bereidingstijd' => 'required',
            'keuken' => 'required',
            'image' => 'required',

        ]);

        // place data from the ingredient and amount array into 1 array
        $array = array();
    	for ($i=0; $i < count($request->ingredient); $i++) { 
           $amount['ingredient'] = $request->ingredient[$i];
           $amount['amount'] = $request->amount[$i];

           array_push($array, $amount);
        }
        // convert the just made array into a json string that will be saved in the database
        $image = (string)$request->image;

        $ingredient = json_encode($array);

        // remove \r\n from any given text inside the steps
        $steps = array_filter(str_replace("\r\n",'', $request->step));
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
            'afbeelding' => $image,
            'keuken' => $request->keuken,
            'user_id' => Auth::user()->id,
        ]);
        return redirect('/');
    }
    public function overview(Recept $recept)
    {
        $all = Recept::all();
        return view('overview',compact('all'));
    }

    public function myRecipe()
    {
       $all = Recept::where('user_id', Auth::user()->id)->get();
       // return view();
       return view('overview',compact('all'));
    }
    public function edit($id)
    {  
       $recept =  Recept::findOrFail($id);  
       $keuken = Keuken::all();
       return view('recipe.edit',compact('recept','keuken'));     
    }

    public function update($id, Request $request)
    {
        $this->validate($request,[
            'naam' => 'required|max:255',
            'beschrijving' => 'required|max:255',
            'bereidingstijd' => 'required',
            'keuken' => 'required',
        ]);
        // dd($request->all());
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
        $steps = array_filter(str_replace("\r\n",'', $request->step));
        // convert array into a json string that will be saved in the database
        $json_steps = json_encode($steps);
        // create a recipe with the given data
        $recept = Recept::findOrFail($id);
        $recept->naam = $request->naam;
        $recept->beschrijving = $request->beschrijving;
        $recept->bereidingstijd = $request->bereidingstijd;
        $recept->ingredient = $ingredient;
        $recept->stappen = $json_steps;
        $recept->afbeelding = $request->image;
        $recept->keuken_id = $request->keuken;

        $recept->save();
        return back();
    }
    public function delete($id)
    {
        $recept = Recept::findOrFail($id);
        $recept->delete();

        return redirect('/mijnrecept');
    }
}
