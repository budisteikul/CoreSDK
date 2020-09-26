<?php

namespace budisteikul\coresdk\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use budisteikul\coresdk\Models\File_tmp;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class FileController extends Controller
{
    public function __construct()
    {
        $file_tmps = File_tmp::where('created_at','<=',Carbon::now()->subDays(1));
        foreach($file_tmps as $file_tmp)
        {
            Storage::disk('local')->delete($file_tmp->file);
        }
        $file_tmps->delete();
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
        
        $file_tmp = new File_tmp();
        $file_tmp->user_id = $user->id;
        $file_tmp->file = $path;
        $file_tmp->key = $key;
        $file_tmp->save();
        $ret[] = $file_tmp->id;

        return response()->json($ret);
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
        $file_tmp = File_tmp::find($id);
        Storage::disk('local')->delete($file_tmp->file);
        $file_tmp->delete();
    }
}
