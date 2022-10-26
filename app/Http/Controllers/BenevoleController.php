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
use App\Models\Benevole ;

class BenevoleController extends Controller
{

    public function index(Request $request)
    {
        // $benevoles = Benevole::all();
        // return view ('benevoles.index')->with('benevoles', $benevoles);
        
        $search = $request['search'] ?? "";
        if ($search !=""){
            $benevoles =Benevole::where('Name',"LIKE","%$search%")->orwhere('Address',"LIKE","%$search%")->paginate(5);

        }
        else {
            $benevoles= Benevole::orderBy('id','desc')->paginate(5);
        }
       
        $data =compact('benevoles',"search");
        return view ('benevoles.index')->with($data);;
    }

    public function create()
    {
        return view('benevoles.create');
    }

    public function store(Request $request)
    {
        $input = $request->all();
        Benevole::create($input);
        return redirect('benevole')->with('flash_message', 'Benevole Addedd!');
    }

    public function show($id)
    {
        $benevole = Benevole::find($id);
        return view('benevoles.show')->with('benevoles', $benevole);
    }

    public function edit($id)
    {
        $benevole = Benevole::find($id);
        return view('benevoles.edit')->with('benevoles', $benevole);
    }

    public function update(Request $request, $id)
    {
        $benevole = Benevole::find($id);
        $input = $request->all();
        $benevole->update($input);
        return redirect('benevole')->with('flash_message', 'benevole Updated!');
    }

    public function destroy($id)
    {
        Benevole::destroy($id);
        return redirect('benevole')->with('flash_message', 'Benevole deleted!');
    }
    public function createpdf($id){
        $benevole = Benevole::find($id);
        view()->share('benevole',$benevole);
  $pdf = PDF::loadView('benevole.pdf',compact('benevole'));
  // download PDF file with download method
  return $pdf->download('pdf_file.pdf');
    }
}
