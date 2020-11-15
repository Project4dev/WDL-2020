<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
// use App\Http\Controllers\DB;
use DB;
use App\Models\Sell;
use App\Models\Contact;
use App\Models\User;
use Illuminate\Support\Facades\Redirect;


class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
        if(auth()->user()->email=="razashaikh8879@gmail.com"){
            return view('admin');
        }
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $users = User::all();
        // dd($users);
        return view('registered-users')->with('users',$users);
    }

    public function display($id)
    {
        //
        $user =User::find($id);
        // dd($user->email);
        // $user =DB::table('sells')->whereIn('user_id',$id)->get();
        $profile = Sell::all();
        // dump(gettype($profile));
        $mydata=array();
        // dump(count($profile));
        // dd($user);
        // dd($profile['attributes']);
        // dump($profile);
      

        
        foreach($profile as $p){
            // echo($p->user_id)."<br>";
            if ($id == $p->user_id){
                // echo("True")."<br>";
                // dump(gettype($p));
                $mydata[] = $p;
                
                // dump($mydata);
                // return view('profile')->with('users',$p);
            }
            // dump($mydata);
        }
        
        // dump($mydata);
        return view('profile')->with('users',$mydata);
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
        $data =User::find($id);
        $data->delete();
        return Redirect::back()->with("message","User has been deleted from database");
    }
}
