<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Students;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Response;
// use Image;

// use App\Http\Controllers\Students;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        // $data = Students::latest()->paginate(5);
        // return view('createform', compact('data'))->with('i',(request()->input('page',1)-1)*5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('createform');
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
        // $request->validate([
        //     'name'=>'required|string',
        //     'email'=>'required',
        //     'phone'=> 'required|min:10|max:10',
        //     'pass'=> 'required',
        //     'file'=>'required|image|max:2048',

        // ]);
        $data = new Students();
        $data->name = $request->input('name');
        $data->email = $request->input('email');
        $data->phone = $request->input('phone');
        $data->password = $request->input('pass');
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

         // $image_file=$request->file;
         // $image =Image::make($image_file);
        // $request->file->store('public/file');
        // Students::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'phone' => $request->phone,
        //     'password' => $request->pass,
        //     // 'image'    => $image,

        // ]);
        $data->save();
         return redirect::back()->with('success','Form data has  store successfully in database');//::route('home')->with('message','Data is submitted successfully !!');
        //return view('welcome')->with('data',$data) ;
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
    public function display()
    {
        # code...
        $data = Students::all();
        return view('show')->with('data',$data);
    }
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
        $data =Students::find($id);
	// dd($data);
        $data->delete();
        return redirect::back()->with('message',"Post has been deleted");
    }
}
