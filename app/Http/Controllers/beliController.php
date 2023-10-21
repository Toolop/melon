<?php

namespace App\Http\Controllers;

use App\Models\Beli;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Http\RedirectResponse;

class beliController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jumlahMelon = Beli::sum('jumlah');
        $hargaMelon = Beli::sum('harga');
        $beratMelon = Beli::sum('berat');
        $listMelon = Beli::orderBy('created_at', 'desc')->limit(5)->get();
        return view('home.home',compact(
            'jumlahMelon','hargaMelon','beratMelon','listMelon'
        ));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $hargaMelon = 25000;
        $berat = $request->berat;
        $request->request->add(['harga' => $berat*$hargaMelon]);
        $validatedData = $request->validate([
            'berat' => 'required',
            'jumlah' => 'required',
            'harga'=>'required',
            'pembeli'=>'nullable',
        ]);
        Beli::create($validatedData);
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $model = Beli::find($id);
        return view('edit.edit', compact(
            'model'
        ));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $model = Beli::find($id);
        return view('edit.edit', compact(
            'model'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $hargaMelon = 25000;
        $berat = $request->berat;
        $request->request->add(['harga' => $berat*$hargaMelon]);
        $model = Beli::UpdateBeli($request,$id);
        return redirect('home');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = Beli::find($id);
        $model->delete();
        return redirect()->back();
    }
}
