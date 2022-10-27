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
use App\Models\participant; 
class participantController extends Controller
{
    public function __invoke()     {         
        $participant = participant::all();
        return view ('')->with('participant', $participant);

         }
    public function index(Request $request)
    {
        // $participant = participant::all();
        // return view ('participant.index')->with('participant', $participant);
        $search = $request['search'] ?? "";
        if ($search !=""){
            $participant =participant::where('nom',"LIKE","%$search%")->orwhere('prenom',"LIKE","%$search%")->paginate(5);

        }
        else {
            $participant= participant::orderBy('id','desc')->paginate(5);
        }
       
        $data =compact('participant',"search");
        return view ('participant.index')->with($data);;

     }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('participant.create');
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
        $path = 'image/participant';
        $request -> photo -> move($path,$file_name);
        // return 'okay';
        // $file_name = $this->saveImage($request->photo, 'images/participant');

        $input = $request->all();
        // participant::create($input);
        participant::create(  [
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'age' => $request->age,
    
            'photo' => $file_name,


        ]);
        // nomZone', 'surfaceZone', 'Gouvernorat','Délégation', 'Localité','PremierResponsable'
      
        return redirect('participant')->with('flash_message', 'participant Addedd!');      }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $participant = participant::find($id);
        return view('participant.show')->with('participant', $participant);
    }
    

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $participant = participant::find($id);
        return view('participant.edit')->with('participant', $participant);
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
        $participant = participant::find($id);
        $input = $request->all();
        $participant->update($input);
        return redirect('participant')->with('flash_message', 'participant Updated!');     }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        participant::destroy($id);
        return redirect('participant')->with('flash_message', 'participant deleted!');    }

        public function createpdf($id){
            $participant = participant::find($id);
            view()->share('participant',$participant);
      $pdf = PDF::loadView('participant.pdf',compact('participant'));
      // download PDF file with download method
      return $pdf->download('pdf_file.pdf');
        }
}
