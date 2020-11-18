<?php

namespace budisteikul\coresdk\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

use budisteikul\coresdk\Models\FileTemp;

class FileTempController extends Controller
{
	public function __construct()
    {
        $fileTemps = FileTemp::where('created_at','<=',Carbon::now()->subDays(1));
        foreach($fileTemps as $fileTemp)
        {
            Storage::disk('local')->delete($fileTemp->file);
			$fileTemp->delete();
        }
    }
	
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $ret = array();
        $files = $request->file('myfile');
        $key = $request->input('key');
        $user = Auth::user();

        $path = Storage::disk('local')->putFile('temp/'. $user->id, $files);
        
        $fileTemp = new FileTemp();
        $fileTemp->user_id = $user->id;
        $fileTemp->file = $path;
        $fileTemp->key = $key;
        $fileTemp->save();
        $ret[] = $fileTemp->id;

        return response()->json($ret);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\FileTemp  $fileTemp
     * @return \Illuminate\Http\Response
     */
    public function show(FileTemp $fileTemp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\FileTemp  $fileTemp
     * @return \Illuminate\Http\Response
     */
    public function edit(FileTemp $fileTemp)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\FileTemp  $fileTemp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, FileTemp $fileTemp)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\FileTemp  $fileTemp
     * @return \Illuminate\Http\Response
     */
    public function destroy(FileTemp $fileTemp)
    {
        Storage::disk('local')->delete($fileTemp->file);
        $fileTemp->delete();
    }
}
