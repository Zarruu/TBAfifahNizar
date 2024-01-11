<?php

namespace App\Http\Controllers;
use App\Models\medicine;
use Illuminate\Http\Request;

class medicineController extends Controller
{

    /*public function index(){
        $medicine = medicine::get();
        return
    }
*/
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nama_obat = medicine::All();
        return view('medicine.index', compact('nama_obat'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('medicine.create');
       // dd('berhasil bikin method');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function simpan(Request $request)
    {
        // $data = [
        //     'id'=>$request->id,
        //     'nama'=>$request->nama
        // ];

        // medicine::create($data);

        // return 'HI';
       // dd($request);
        $medicine = new medicine;
        $medicine->nama = $request->get('nama');
        $medicine->gejala = $request->get('gejala');
       // $medicine->id = $request->get('id');
        $medicine->save();
        return redirect()->route('index.medicine');
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
        return view('edit.medicine', compact('post'));
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
        $medicine = medicine::find($id);

        // if (!$medicine) {
        //     return response()->(['message' => 'Post not Found'], 404);
        // }
        $medicine->update([
            $medicine = medicine::where('id', $id)->first();
            $medicine->nama = $request->get('nama');
            $medicine->gejala =$request->get('gejala');

            $medicine->update();
            return redirect()->route('index');
      ]);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = Medicine::find($id);
     $medicine->delete();
     return redirect()->route('index');
}
