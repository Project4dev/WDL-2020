<?php

namespace App\Http\Controllers;
use App\Models\Sell;
use App\Models\User;
use App\Models\Contact;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class SellController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sell');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //
         $request->validate([
            'Name'=>['required','regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'Email'=>'required|email',
            'Phone'=> 'required|min:10|max:10',
            'image'=>'required|image|max:2047',
            'Price' => 'required',
            'Add1' => 'required',
            'Add2' => 'required',
            'H_type' => 'required',
            'City' => 'required',
            'State' => 'required',
            'S_kitchen' => 'required',
            'Purpose' => 'required',
            'N_washroom' => 'required',
            'Zip' => 'required',

        ]);
    
        $data = new Sell();
        $data->name = $request->input('Name');
        $data->phone = $request->input('Phone');
        $data->email = $request->input('Email');
        $data->price = $request->input('Price');
        $data->housetype = $request->input('H_type');
        $data->add1 = $request->input('Add1');
        $data->add2 = $request->input('Add2');
        $data->price = $request->input('Price');
        $data->city = $request->input('City');
        $data->state = $request->input('State');
        $data->zip = $request->input('Zip');
        $data->user_id =auth()->id();
        // 'user_id' => auth()->id(),
        $data->ksize= $request->input('S_kitchen');
        $data->nwash = $request->input('N_washroom');
        $data->purpose = $request->input('Purpose');  
        // $data->image = $request->input('image');
        
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename =time() . '.' . $extension;
            $file->move('uploads/sell',$filename);
            $data->image =$filename;
        }
        else {
            return $request;
            $data->image = '';
        }

        $data->save();
        //return Redirect('/');//->back()->with('success','image store successfully in database');//::route('home')->with('message','Data is submitted successfully !!');
        return view('myhome')->with('data',$data) ;

    }
    public function display(){

        # code...
        $data = Sell::all();
        // if($data->)
        return view('rent',['data'=>$data]);
        
    }
    public function display1(){
        $data = Sell::all();
        return view('buy')->with('data',$data);
    }
    public function display_all(){
        $data = Sell::all();
        return view('all-post')->with('data',$data);
    }
    public function SearchDisplay(Request $request){
        // $data = Sell::all();
        $q = $request->input('text');
        if($q != ''){
            $sell =Sell::where('state','LIKE','%'.$q.'%')
                ->orWhere('city','LIKE','%'.$q.'%')
                ->orWhere('price','LIKE','%'.$q.'%')->get();
            if(count($sell) > 0){
                return view('search')->withDetails($sell)->withQuery($q);
                
            }
        }
        return view('search')->withMessage('No data found');
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
        $sell = Sell::find($id);
        // dd($sell);
        return view('details')->with('sell',$sell);
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
        // dd((int)$user_id);
        $sell = Sell::find($id);
        // dd($sell->id);
        // $sell = Sell::where($user_id,'LIKE' ,Auth()->id());
        // if(auth()->id()){
            // dd($sell[0]);
        // }
        // dd(Auth()->id());
        // dd($sell->user_id ==Auth()->id());
        return view('edit')->with('sell', $sell);
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
        
        $this->validate($request,[

            'Name'=>['required','regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'Email'=>'required|email',
            'Phone'=> 'required|min:10|max:10',
            'image'=>'required|image|max:2047',
            'Price' => 'required',
            'Add1' => 'required',
            'Add2' => 'required',
            'H_type' => 'required',
            'City' => 'required',
            'State' => 'required',
            'S_kitchen' => 'required',
            'Purpose' => 'required',
            'N_washroom' => 'required',
            'Zip' => 'required',

        ]);
        $sell =Sell::find($id);
        // dd($sell);
        
        $sell->name =$request->input('Name');
        $sell->phone = $request->input('Phone');
        $sell->email = $request->input('Email');
        $sell->price = $request->input('Price');
        $sell->housetype = $request->input('H_type');
        $sell->add1 = $request->input('Add1');
        $sell->add2 = $request->input('Add2');
        $sell->city = $request->input('City');
        $sell->state = $request->input('State');
        $sell->zip = $request->input('Zip');
        $sell->ksize = $request->input('S_kitchen');
        $sell->nwash = $request->input('N_washroom');
        // $sell->image = $request->get('image');
        if ($request->hasfile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename =time() . '.' . $extension;
            $file->move('uploads/sell',$filename);
            $sell->image =$filename;
        }

        $sell->purpose = $request->input('Purpose');
        $sell->save();
        return redirect::back()->with('message','Data has been Updated');
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
        $data =Sell::find($id);
        $data->delete();
        return redirect::back()->with('message',"Post has been deleted");
    }
    public function  FeedStore(Request $request){
         //
         $request->validate([
            'name'=>['required','regex:/^([a-zA-Z]+)(\s[a-zA-Z]+)*$/'],
            'email'=>'required|email',
            'subject' => 'required',
            'message' => 'required',
        ]);
        $data = new Contact();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->subject = $request->input('subject');
        $data->message = $request->input('message');
        $data->save();
        return redirect::back()->with('message',"Thank You For Your Response !!");
    }
    public function FeedShow(){
        $feedback=Contact::all();
        // dump($feedback);
        return view('admin',['data'=>$feedback]);
    }
}
