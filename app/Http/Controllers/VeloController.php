<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Velo; 
class VeloController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
          // $ZoneVertes = ZoneVertes::all();
        // return view ('zoneVertes.index')->with('ZoneVertes', $ZoneVertes);
        $search = $request['search'] ?? "";
        if ($search !=""){
            $velo =velo::where('nomVelo',"LIKE","%$search%")->orwhere('surfaceZone',"LIKE","%$search%")->paginate(5);

        }
        else {
            $velo= velo::orderBy('id','desc')->paginate(5);
        }
       
        $data =compact('velo',"search");
        return view ('velo.index')->with($data);;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('velo.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //     $request->validate([
    //     'nomZone' => 'required|max:255',
    //     'surfaceZone' => 'required|max:20',
    //     'Localité ' => 'required',
    //     'Gouvernorat' => 'required',
    //     'Délégation' => 'required',
    //     'PremierResponsable' => 'required',

    // ]);
    $file_extension = $request -> photo -> getClientOriginalExtension();
    $file_name = time().$file_extension;
    $path = 'image/velo';
    $request -> photo -> move($path,$file_name);
    // return 'okay';
    // $file_name = $this->saveImage($request->photo, 'images/velo');

    $input = $request->all();
    // velo::create($input);
    velo::create(  [
        'nomVelo' => $request->nomVelo,
        'couleur' => $request->couleur,
        'type' => $request->type,
        'photo' => $file_name,


    ]);
    // nomZone', 'surfaceZone', 'Gouvernorat','Délégation', 'Localité','PremierResponsable'
  
    return redirect('velo')->with('flash_message', 'velo Addedd!'); 

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $velo = velo::find($id);
        return view('velo.show')->with('velo', $velo);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $velo = velo::find($id);
        return view('velo.edit')->with('velo', $velo);
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
        $velo = velo::find($id);
        $input = $request->all();
        $velo->update($input);
        return redirect('velo')->with('flash_message', 'velos Updated!'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        velo::destroy($id);
        return redirect('velo')->with('flash_message', 'velo deleted!');    }

        public function createpdf($id){
            $velo = velo::find($id);
            view()->share('velo',$velo);
      $pdf = PDF::loadView('velo.pdf',compact('velo'));
      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
    }
}
