<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Navbar;
use App\Models\Item;

class NavbarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $images = Item::where('section_id', 1)->with('images')->first()->images;
        $navbar = Navbar::first();
        foreach ($images as $key => $value) {
            $image_path = str_replace(' ', '%20', $value->path);
            $navbar->setAttribute('logo' . ($key + 1) . 'x', $image_path);
        }

        return view('admin.navbar', [
            'navbar'=>$navbar
        ]);
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
        //
        $validator = Validator::make($request->all(), [
            'link1' => 'required|string',
            'link2' => 'required|string',
            'link3' => 'required|string',
            'link4' => 'required|string',
            'link5' => 'required|string',
            'button' => 'required|string'
        ]);
        if($validator->fails()) {
            $errors = $validator->errors();
            return back()->with('errors', $errors);
        }

        $input = $request->all();
        $navbar = Navbar::first();
        
        try {
            $navbar->link1 = $input['link1'];
            $navbar->link2 = $input['link2'];
            $navbar->link3 = $input['link3'];
            $navbar->link4 = $input['link4'];
            $navbar->link5 = $input['link5'];
            $navbar->button = $input['button'];
            $navbar->save();

            return back()->with('success', 'Data berhasil diperbarui.');
        } catch (Throwable $e) {
            return back()->with('errors', 'Gagal menginput data, silahkan coba lagi.');
        }

        return dd($request->all());
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
