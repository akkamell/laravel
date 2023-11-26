<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pizza;
use App\User;
class PizzaControler extends Controller
{
    public function home(){
        return view('welcome',['type' =>'mozerella']);
    }
    
    public function showpizza($id){
        $pizza = Pizza::find($id);
        return view('showpizza',['pizza' => $pizza]);
    }
    public function orderpizza(){
        return view('/orderpizza');
    }
    public function create(){
        $pizza = new Pizza();
        $pizza->name = request('username');
        $pizza->type = request('type') ;
        $pizza->size = request('size');
        $pizza->timestamps = false; // Disable timestamps
        $pizza->toppings=request('toppings')??['nothing'] ;
        
        $pizza->save();
        return redirect('/')->with('mssg','thank you for ordering pizza');
    }
    public function destroy($id){
        $pizza=Pizza::findOrFail($id);
        $pizza->delete();
        $pizza = Pizza::all();
       return view('showpizza', ['pizza' => $pizza]);
    }
    public function matching()
{
    $user = new User();
    $user->name = request('manage');
    $user->password = request('password');
    $userauth = User::where('name', $user->name)->first();

    if ($userauth && $userauth->password == $user->password) {
      //  session(['user' => $user]);
       // return redirect('/showpizza');
       $pizza = Pizza::all();
       return view('showpizza', ['pizza' => $pizza]);
    } else {
        return redirect('/login');
    }
}

public function show()
{
   /* if (session()->has('user')) {
        $user = session('user');
        $pizza = Pizza::all();
        return view('showpizza', ['pizza' => $pizza]);
    }*/

    return redirect ('/login');
}

}
