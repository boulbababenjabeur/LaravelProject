<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use App\Models\association; 
use PDF;
use SweetAlert;
use App\Providers\SweetAlertServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\ZoneVertes; 
class ZoneVertesController extends Controller
{
    public function __invoke()     {         
        $ZoneVertes = ZoneVertes::all();
        return view ('')->with('ZoneVertes', $ZoneVertes);

         }
    public function index(Request $request)
    {
        // $ZoneVertes = ZoneVertes::all();
        // return view ('zoneVertes.index')->with('ZoneVertes', $ZoneVertes);
        $search = $request['search'] ?? "";
        if ($search !=""){
            $ZoneVertes =ZoneVertes::where('nomZone',"LIKE","%$search%")->orwhere('surfaceZone',"LIKE","%$search%")->paginate(5);

        }
        else {
            $ZoneVertes= ZoneVertes::orderBy('id','desc')->paginate(5);
        }
       
        $data =compact('ZoneVertes',"search");
        return view ('zoneVertes.index')->with($data);;

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('zoneVertes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_extension = $request -> photo -> getClientOriginalExtension();
        $file_name = time().$file_extension;
        $path = 'image/zoneVertes';
        $request -> photo -> move($path,$file_name);
        // return 'okay';
        // $file_name = $this->saveImage($request->photo, 'images/zoneVertes');

        $input = $request->all();
        // ZoneVertes::create($input);
        ZoneVertes::create(  [
            'nomZone' => $request->nomZone,
            'surfaceZone' => $request->surfaceZone,
            'Gouvernorat' => $request->Gouvernorat,
            'Délégation' => $request->Délégation,
            'Localité' => $request->Localité,
            'PremierResponsable' => $request->PremierResponsable,
            'photo' => $file_name,


        ]);
        // nomZone', 'surfaceZone', 'Gouvernorat','Délégation', 'Localité','PremierResponsable'
      
        return redirect('zoneVertes')->with('flash_message', 'zonez Verte Addedd!');      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $ZoneVertes = ZoneVertes::find($id);
        return view('zoneVertes.show')->with('ZoneVertes', $ZoneVertes);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ZoneVertes = ZoneVertes::find($id);
        return view('zoneVertes.edit')->with('ZoneVertes', $ZoneVertes);
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
        $ZoneVertes = ZoneVertes::find($id);
        $input = $request->all();
        $ZoneVertes->update($input);
        return redirect('zoneVertes')->with('flash_message', 'zones Vertes Updated!');     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        ZoneVertes::destroy($id);
        return redirect('zoneVertes')->with('flash_message', 'ZoneVertes deleted!');    }

        public function createpdf($id){
            $ZoneVertes = ZoneVertes::find($id);
            view()->share('ZoneVertes',$ZoneVertes);
      $pdf = PDF::loadView('ZoneVertes.pdf',compact('ZoneVertes'));
      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
        }
}
