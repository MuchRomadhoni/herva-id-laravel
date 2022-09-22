<?php

namespace App\Http\Controllers;
use App\home;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $home = home::latest()->paginate(10);
  
        return view('daftarReseller.index',compact('home'))
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
  
        home::create($request->all());
   
        return redirect()->route('create.daftarReseller')
                        ->with('success','Data anda berhasil dibuat, mohon tungu admin untuk info selanjutnya yaa');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\home  $home
     * @return \Illuminate\Http\Response
     */
    public function show(home $home)
    {
        return view('daftarReseller.show',compact('home'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\home  $home
     * @return \Illuminate\Http\Response
     */
    public function edit(home $home)
    {
         return view('daftarReseller.edit',compact('home'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\home  $home
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, home $home)
    {
        $request->validate([
           'nama' => 'required',
            'email' => 'required',
            'hp' => 'required',
            'alamat' => 'required',
        ]);
  
        $home->update($request->all());
  
        return redirect()->route('home.index')
                        ->with('success','home updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\home  $home
     * @return \Illuminate\Http\Response
     * @return \Illuminate\Support\Facades\DB;
     */
    public function destroy(home $home)
    {
        $home = DB::table('daftar-reseller')->where('id', $home)->delete();
        return redirect('home')->with('success','home deleted successfully');
    }

}
