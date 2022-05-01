<?php

namespace App\Http\Controllers;

use App\Http\Requests\DomainRequest;
use App\Models\Domain;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use RealRashid\SweetAlert\Facades\Alert;

class DomainController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $domain = Domain::all();
        return view('domain.index', compact('domain'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('domain.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DomainRequest $request)
    {
        //
        $domain = new Domain();
        $domain->name = $request->name;
        $domain->loai = $request->select;

        $domain->save();
        alert()->success('SuccessAlert','Done');
        return view('domain.create');
        
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $domain = Domain::find($id)->delete();
        // alert()->success('SuccessAlert','Done');
        return view('domain.index' ,compact('domain'));
    }
    public function delete($id)
    {        
        $domain = Domain::find($id)->delete();
        alert()->success('SuccessAlert','Done');
        return redirect()->route('domain.index');
    }
    public function lock($id){
        DB::table('domains')->where('id',$id)->update(['status'=>0]);
       
        return redirect()->route('domain.index');
    }
    public function unlock($id){
        DB::table('domains')->where('id',$id)->update(['status'=>1]);
       
        return redirect()->route('domain.index');
    }
}
