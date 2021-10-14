<?php

namespace App\Http\Controllers;

use App\Dress;
use Illuminate\Http\Request;


class DressController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vestiti = Dress::all();

        $data = [
            'vestiti' => $vestiti
        ];
        return view('dresses.index' , $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dresses.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        $request->validate([
            'name' => 'required|unique:dresses|max:255',
            'size' => 'required|max:4',
            'color' => 'required|max:20',
            'price' => 'required|max:6',
            'description' => 'required'
        ]);

        $dressNew = new Dress();
        //we barred the details below because we passed the datas already  in model
        //just the parameteres

        // $dressNew->name = $data['name'];
        // $dressNew->color = $data['color'];
        // $dressNew->size = $data['size'];
        // $dressNew->price = $data['price'];
        // $dressNew->description = $data['description'];

        $dressNew->fill($data);
        $dressNew->save();

         return redirect()->route('dresses.show' , $dressNew->id);

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Dress $dress)
    {

    // $vestito_sel = Dress::find($id); instead of using the id we passed the dress to it

    if($dress){
        
        $data = [
            'vestito' => $dress
        ];
        return view('dresses.show' , $data);

    }

        abort('404');
    


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Dress $dress)
    {
        if($dress){
        
            $data = [
                'vestito' => $dress
            ];
            return view('dresses.edit' , $data);
    
        }
    
            abort('404');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dress $dress)
    {
        $data = $request->all();

        // if everything seems fine this must be attached to make the updated strings to show in our index page
        $dress->update($data);
        return redirect()->route('dresses.index')->with('status' , 'item updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dress $dress)
    {
     

        $dress->delete();

        return redirect()->route('dresses.index')->with('status' , 'Item Deleted SuccessFully!! :)');
    }
}
