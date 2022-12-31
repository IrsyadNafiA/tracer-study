<?php

namespace App\Http\Controllers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\File;
use App\Models\KuisionerAwal;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class KuisionerawalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datas = KuisionerAwal::all();

        return view('kuisioner.index', compact(
            'datas'
    ));
    }

    /** Create */
    public function create(Request $request)
    {
        $value = new KuisionerAwal();
        $data['kuisioner'] = $request->session()->get('kuisioner');
        return view('kuisioner.create', $data);
    }

    public function postcreate(Request $request)
    {
        $request->validate([
            'A1'=>'required',
            'A2'=>'required',
            'A3'=>'required',
            'A4'=>'required',
            'A5'=>'required',
            'A6'=>'required',
            'A7'=>'required',
            'A8'=>'required',
            'A9'=>'required',
            'A10'=>'required',
            'A11'=>'required',
            'A12'=>'required',
            'A13'=>'required',
            'ka1'=>'required',
            'ka2'=>'required',
            'ka3'=>'required',
            'ka4'=>'required',
            'ka5'=>'required',
            'ka6'=>'required',
            'ka7'=>'required',
            'ka8'=>'required',
            'ka9'=>'required',
            'ka10'=>'required',
            'ka11'=>'required',
            'ka12'=>'required',
            'ka13'=>'required',
            'ka14'=>'required',
            'ka15'=>'required',
            'ka16'=>'required',
            'ka17'=>'required',
            'ka18'=>'required',
            'ka19'=>'required',
            'ka20'=>'required',
            'ka21'=>'required',
            'ka22'=>'required',
            'ka23'=>'required',
            'ka24'=>'required',
            'ka25'=>'required'
          

        ]);

        if(empty($request->session()->get('kuisioner')))
        {
            $kuisioner = new KuisionerAwal();
            $kuisioner->fill($request->all());
            if ($request->hasFile('kb5')){
                $request->file('kb5')->move('sertifikatkompetensi/', $request->file('kb5')->getClientOriginalName());
                $kuisioner->kb5 = $request->file('kb5')->getClientOriginalName();
                $kuisioner->save();
            }
            $request->session()->put('kuisioner', $kuisioner);
        }
        else
        {
            $kuisioner = $request->session()->get('kuisioner');
            $kuisioner->fill($request->all());
            if ($request->hasFile('kb5')){
                $request->file('kb5')->move('sertifikatkompetensi/', $request->file('kb5')->getClientOriginalName());
                $kuisioner->kb5 = $request->file('kb5')->getClientOriginalName();
                $kuisioner->save();
            }
            $request->session()->put('kuisioner', $kuisioner);
        }

        return redirect('create1');
    }

    /** Create 1 */
    public function create1(Request $request)
    {
        $value = new KuisionerAwal();
        $data['kuisioner'] = $request->session()->get('kuisioner');
        return view('kuisioner.create1', $data);
    }

    public function postcreate1(Request $request)
    {
        $request->validate([
            'C1'=>'required'
          

        ]);

        if(empty($request->session()->get('kuisioner')))
        {
            $kuisioner = new KuisionerAwal();
            $kuisioner->fill($request->all());
            $request->session()->put('kuisioner', $kuisioner);
        }
        else
        {
            $kuisioner = $request->session()->get('kuisioner');
            $kuisioner->fill($request->all());
            $request->session()->put('kuisioner', $kuisioner);
        }

        return redirect('create2');
    }

    /** Create 2 */
    public function create2(Request $request)
    {
        $value = new KuisionerAwal();
        $data['kuisioner'] = $request->session()->get('kuisioner');
        return view('kuisioner.create2', $data);
    }

    public function postcreate2(Request $request)
    {
        $request->validate([
            'D1'=>'required'
          

        ]);

        if(empty($request->session()->get('kuisioner')))
        {
            $kuisioner = new KuisionerAwal();
            $kuisioner->fill($request->all());
            $request->session()->put('kuisioner', $kuisioner);
        }
        else
        {
            $kuisioner = $request->session()->get('kuisioner');
            $kuisioner->fill($request->all());
            $request->session()->put('kuisioner', $kuisioner);
        }

        return redirect('create3');
    }

    /** Create simpan */
    public function create3(Request $request)
    {
        $value = new KuisionerAwal();
        $data['kuisioner'] = $request->session()->get('kuisioner');
        return view('kuisioner.create3', $data);
    }
    

    public function postcreate3(Request $request)
    {

        $request->validate([
            'E1'=>'required'
           
        ]);

        $kuisioner = $request->session()->get('kuisioner');
        $kuisioner->fill($request->all());
        $save = $kuisioner->save();
        if($save)
        {
          $request->session()->put('kuisioner');
          return redirect('kuisioner')->with(['message'=>'Kuisioner Berhasil di simpan , Terima kasih Sudah mengisi Kuuisioner ']);
        }

        

    }
    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   /* public function create()
    {
        $model = new KuisionerAwal;
        return view('kuisioner/create', compact(
            'model'
        ));
    }*/

    



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        

        /*
        $model = new KuisionerAwal;
        $model->A1 = $request->A1;
        $model->A2 = $request->A2;
        $model->A3 = $request->A3;
        $model->A4 = $request->A4;
        $model->A5 = $request->A5;
        $model->A6 = $request->A6;
        $model->A7 = $request->A7;
        $model->A8 = $request->A8;
        $model->A9 = $request->A9;
        $model->A10 = $request->A10;
        $model->A11 = $request->A11;
        $model->A12 = $request->A12;
        $model->A13 = $request->A13;

        $model->ka1 = $request->ka1;
        $model->ka2 = $request->ka2;
        $model->ka3 = $request->ka3;
        $model->ka4 = $request->ka4;
        $model->ka5 = $request->ka5;
        $model->ka6 = $request->ka6;
        $model->ka7 = $request->ka7;
        $model->ka8 = $request->ka8;
        $model->ka9 = $request->ka9;
        $model->ka10 = $request->ka10;
        $model->ka11 = $request->ka11;
        $model->ka12 = $request->ka12;
        $model->ka13 = $request->ka13;
        $model->ka14 = $request->ka14;
        $model->ka15 = $request->ka15;
        $model->ka16 = $request->ka16;
        $model->ka17 = $request->ka17;
        $model->ka18 = $request->ka18;
        $model->ka19 = $request->ka19;
        $model->ka20 = $request->ka20;
        $model->ka21 = $request->ka21;
        $model->ka22 = $request->ka22;
        $model->ka23 = $request->ka23;
        $model->ka24 = $request->ka24;
        $model->ka25 = $request->ka25;

        $model->save();
        

        return redirect('kuisioner'); */
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
        //
    }

}
