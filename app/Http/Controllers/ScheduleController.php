<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\GoogleCalendar\Event;

use Carbon\Carbon;


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
        
        $event->name = 'FINAL BULL';
            $event->description = 'Event description';
            $event->startDateTime = Carbon::now()->addHour();
            $event->endDateTime = Carbon::now()->addHour(2);
            $event->addAttendee(['email' => 'tsudar1991@gmail.com']);
            $event->sendUpdates ='all';
            $event->reminders=array(
                'useDefault' => FALSE,
                'overrides' => array(
                  array('method' => 'email', 'minutes' => 50),
                  array('method' => 'email', 'minutes' => 45),
                ),);
            
            $event->save('insertEvent',array('sendNotifications' => true, 'conferenceDataVersion' => true));
        
      return redirect('/schedule')->with('success','Event Created');
        
        
    }
    public function index()
    {
       
        return view('schedule.index');

    }
}
