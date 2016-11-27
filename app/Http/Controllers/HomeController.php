<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\profile;
use App\laporan;
use App\photo;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except(['index']);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function home(laporan $laporan)
    {
        $dataLaporan = $laporan->where('id_pelapor','=',auth()->user()->id)->orderBy('id','desc')->paginate(20);
        return view('home',['laporan'=>$dataLaporan]);
    }
    public function index(laporan $laporan){
        $dataLaporan = $laporan->orderBy('id','desc')->paginate(20);
        return view('front',['laporan'=>$dataLaporan]);
    }
    public function profile(){
        return view('profile');
    }
    public function laporan(){
        return view('lapor');
    }
    public function postLaporan(Request $request, laporan $laporan, photo $photo){
        $laporan->title = $request->title;
        $laporan->id_pelapor = auth()->user()->id;
        $laporan->laporan = $request->laporan;
        $laporan->address = $request->address;
        $laporan->longitude = $request->longitude;
        $laporan->latitude = $request->latitude;
        $laporan->status = $request->status;
        $laporan->save();
        $path = '/photos';
        $photo = $request->file('photos');
        foreach ($photo as $key) {
            $validator = Validator::make(['file'=>$key],['file'=>'mimes:png,jpeg']);
            if ($validator->passes) {
                $name = time().".".$key->getClientOriginalExtension();
                if($key->move($path, $name)){
                    $photo->photos = $name;
                    $photo->id_laporan = $laporan->id;
                    $photo->save();
                }
            }
        }
        if ($laporan) {
            return redirect()->back()->with('success','Success post report');
        }
        return redirect()->back()->with('failed','Error post report');
    }
    public function postProfile(Request $request, profile $profile){
        $profile->address = $request->address;
        $profile->kodepos = $request->postalcode;
        $profile->born = $request->born;
        $profile->no_identitas = $request->no_identitas;
        $profile->rt = $request->rt;
        $profile->rw = $request->rw;
        $profile->kecamatan = $request->kecamatan;
        $profile->save();
    }
}
