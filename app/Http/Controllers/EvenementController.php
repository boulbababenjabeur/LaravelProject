<?php

namespace App\Http\Controllers;
use App\Models\Evenement;
use Illuminate\Http\Request;
use App\Models\velo; 
use Illuminate\Support\Facades\Validator;
use Illuminate\View\Middleware\ShareErrorsFromSession;
use Illuminate\Validation\ValidationException;
use App\Models\association; 
use PDF;
use SweetAlert;
use App\Providers\SweetAlertServiceProvider;
use RealRashid\SweetAlert\Facades\Alert;
class EvenementController extends Controller
{
    public function index(Request $request)
    {
    //     $evenement = Evenement::all();
    //   return view ('evenement.index')->with('evenement', $evenement);
    $search = $request['search'] ?? "";
    if ($search !=""){
        $evenement =Evenement::where('Name',"LIKE","%$search%")->orwhere('Description',"LIKE","%$search%")->paginate(5);

    }
    else {
        $evenement= Evenement::orderBy('id','desc')->paginate(5);
    }
   
    $data =compact('evenement',"search");
    return view ('evenement.index')->with($data);;
    }
 
    
    public function create()
    {
        $velo = velo::all();

        return view('evenement.create')->with('velo', $velo);;
    }
 
  
    public function store(Request $request)
    {
     
        $file_extension = $request -> photo -> getClientOriginalExtension();
        $file_name = time().$file_extension;
        $path = 'image/evenement';
        $request -> photo -> move($path,$file_name);

        $input = $request->all();
        Evenement::create([
            'name' => $request->name,
            'description' => $request->description,
            'startDate' => $request->startDate,
            'velo_id' => $request->velo_id,
            'photo' => $file_name,


        ]);
        return redirect('evenement')->with('flash_message', 'evenement Addedd!');  
    }
 
    
    public function show($id)
    {
        $evenement = Evenement::find($id);
        return view('evenement.show')->with('evenement', $evenement);
    }
 
    
    public function edit($id)
    {
        $evenement = Evenement::find($id);
        return view('evenement.edit')->with('evenement', $evenement);
    }
 
  
    public function update(Request $request, $id)
    {
        $evenement = Evenement::find($id);
        $input = $request->all();
        $evenement->update($input);
        return redirect('evenement')->with('flash_message', 'evenement Updated!');  
    }
 
  
    public function destroy($id)
    {
        Evenement::destroy($id);
        return redirect('evenement')->with('flash_message', 'evenement deleted!');  
    }
    public function createpdf($id){
        $evenement = Evenement::find($id);
        view()->share('evenement',$evenement);
  $pdf = PDF::loadView('evenement.pdf',compact('evenement'));
  // download PDF file with download method
  return $pdf->download('pdf_file.pdf');
    }
    
}
