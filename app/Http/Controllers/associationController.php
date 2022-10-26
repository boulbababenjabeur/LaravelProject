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
class associationController extends Controller
{
    
    public function index(Request $request)
    {
        

        $search = $request['search'] ?? "";
        if ($search !=""){
            $association =association::where('Name',"LIKE","%$search%")->orwhere('Adresse',"LIKE","%$search%")->paginate(5);

        }
        else {
            $association = association::orderBy('id','desc')->paginate(5);
        }
       
        $data =compact('association',"search");
        return view ('association.index')->with($data);

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('association.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
 {
    $request->validate([
        'name' => 'required|max:255',
        'numero' => 'required',
        'adresse' => 'required',
        'description' => 'required',
    ]);
    $input = $request->all();
        association::create($input);
        return redirect('association')->with('success', 'User added successfully.');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $association = association::find($id);
        return view('association.show')->with('association', $association);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $association = association::find($id);
        return view('association.edit')->with('association', $association);
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
        $association = association::find($id);
        $input = $request->all();
        $association->update($input);
        return redirect('association')->with('flash_message', 'association Updated!');     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        association::destroy($id);
        return redirect('association')->with('flash_message', 'association deleted!');    }
        public function search()
        {
            $search_text =$_GET['query'];
            $association=association::where('name','LIKE',"%".$search_text.'%')->get();
       return view('association.search',compact('association'));
       
    }
       
    
    public function createpdf($id){
            $association = association::find($id);
            view()->share('association',$association);
      $pdf = PDF::loadView('association.pdf',compact('association'));
      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
        }
}
