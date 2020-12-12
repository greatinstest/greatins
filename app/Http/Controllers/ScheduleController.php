<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;



class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'phone'=>'required',
            'email'=>'required',
            'date'=>'required']);
        $name=$request->input('name');
        $phone=$request->input('phone');
        $email=$request->input('email');
        $time= $request->input('date').' '.$request->input('time');
        $data=array(
            'name' => $name,
            'phone' => $phone,
            'email'=>$email,
            'time'=>$time
        );
        
      return redirect('/schedule')->with('success','Event Created');
        
        
    }
    public function index()
    {
       
        return view('schedule.index');

    }
}
