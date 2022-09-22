<?php

namespace App\Http\Controllers;

use App\daftarReseller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class daftarResellerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $daftarReseller = DB::table('daftar-reseller')->where('status', 'Reseller')->get();
  
        return view('daftarReseller.index',compact('daftarReseller'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function indexSupplier()
    {
        $daftarReseller = DB::table('daftar-reseller')->where('status', 'Supplier')->get();
        // $daftarReseller = daftarReseller::latest()->paginate(10);
  
        return view('daftarReseller.daftar-supplier',compact('daftarReseller'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('daftarReseller.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSupplier()
    {
        return view('daftarReseller.createSupplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
        ]);
  
        daftarReseller::create($request->all());
        
        return redirect()->route('create.daftarReseller')
                        ->with('success','Data anda berhasil dibuat, mohon tungu admin untuk info selanjutnya yaa');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function storeSupplier(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
        ]);
  
        daftarReseller::create($request->all());
        
        return redirect()->route('createSupplier.daftarReseller')
                        ->with('success','Data anda berhasil dibuat, mohon tungu admin untuk info selanjutnya yaa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\daftarReseller  $daftarReseller
     * @return \Illuminate\Http\Response
     */
    public function show(daftarReseller $daftarReseller)
    {
        return view('daftarReseller.show',compact('daftarReseller'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\daftarReseller  $daftarReseller
     * @return \Illuminate\Http\Response
     */
    public function edit(daftarReseller $daftarReseller)
    {
         return view('daftarReseller.edit',compact('daftarReseller'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\daftarReseller  $daftarReseller
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, daftarReseller $daftarReseller)
    {
        $request->validate([
           'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
        ]);
  
        $daftarReseller->update($request->all());
  
        return redirect()->route('daftarReseller.index')
                        ->with('success','daftarReseller updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\daftarReseller  $daftarReseller
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Support\Facades\DB;
     */
    public function destroy($daftarReseller)
    {
        // $daftarReseller->delete();
        DB::table('daftar-reseller')->where('id', $daftarReseller)->delete();
  
        return redirect('dashboard')->with('success','data berhasil dihapus pada id');
    }
}
