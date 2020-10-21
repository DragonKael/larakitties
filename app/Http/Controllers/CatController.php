<?php

namespace App\Http\Controllers;
use App\Models\Breed;
use App\Models\Cat;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        if($request){
            $buscar=$request->get('buscar');
            $cats=Cat::orderBy('id','desc')
                    ->where('name', 'like','%'.$buscar.'%')
                    ->paginate(5);

            $breeds=Breed::all();

            return view('cats.index', compact('cats','buscar','breeds'));
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //almacenamos todo en la bd
        $cat=Cat::create($request->all());
        $cat->save();
        return redirect()->route('cat.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
     public function show($id)
         {
             //
             $cat=Cat::find($id);
             $breed=Breed::all();
             return view('cats.show', compact('cat','breed'));
         }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function edit(Cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
     public function update(Request $request, Cat $cat)
     {
         //
         Cat::find($cat->id);
         $breed=Breed::all();
         $cat->name=$request->name;
         $cat->date_of_birth=$request->date_of_birth;
         $cat->gender=$request->gender;
         $cat->photo=$request->photo;
         $cat->breed_id=$request->breed_id;
         $cat->save();
         return back();
     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cat  $cat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cat $cat)
    {
        //return $cat->id;
        Cat::find($cat->id)->delete();
        return back();
    }
}
