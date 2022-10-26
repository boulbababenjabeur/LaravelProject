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
use App\Models\Adherent;

class AdherentController extends Controller
{
 
    public function index(Request $request)
    {     
        
        $search = $request['search'] ?? "";
        if ($search !=""){
            $adherents =Adherent::where('Nom',"LIKE","%$search%")->orwhere('ville',"LIKE","%$search%")->paginate(5);

        }
        else {
            $adherents= Adherent::orderBy('id','desc')->paginate(5);
        }
       
        $data =compact('adherents',"search");
        return view ('adherents.index')->with($data);;
    }
 
    
    public function create()
    {
        return view('adherents.create');
    }
 
  
    public function store(Request $request)
    {
        $input = $request->all();
        Adherent::create($input);
        return redirect('adherent')->with('flash_message', 'Adherent Addedd!');  
    }
 
    
    public function show($id)
    {
        $Adherent = Adherent::find($id);
        return view('adherents.show')->with('adherents', $Adherent);
    }
 
    
    public function edit($id)
    {
        $Adherent = Adherent::find($id);
        return view('adherents.edit')->with('adherents', $Adherent);
    }
 
  
    public function update(Request $request, $id)
    {
        $Adherent = Adherent::find($id);
        $input = $request->all();
        $Adherent->update($input);
        return redirect('adherent')->with('flash_message', 'Adherent Updated!');  
    }
 
  
    public function destroy($id)
    {
        Adherent::destroy($id);
        return redirect('adherent')->with('flash_message', 'Adherent deleted!');  
    }

    public function createpdf($id){
        $adherent = Adherent::find($id);
        view()->share('adherent',$adherent);
  $pdf = PDF::loadView('adherent.pdf',compact('adherent'));
  // download PDF file with download method
  return $pdf->download('pdf_file.pdf');
    }
}