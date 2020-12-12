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
        $date = $request->input('date');
        $time = $request->input('time');
        $start = Carbon::parse($date.' '.$time,'Europe/Belgrade');
        $end = (clone $start)->addHour();
        $event = new Event;
        $event->name = $name;
            $event->description = 'Event for Great Services d.o.o. home test';
            $event->startDateTime = $start;
            $event->endDateTime = $end;
            $event->addAttendee(['email' => $email,'comment'=>'Name: Tomislav Sudar tel:'.$phone]);
            $event->sendUpdates ='all';
            $event->reminders=array(
                'useDefault' => FALSE,
                'overrides' => array(
                  array('method' => 'email', 'minutes' => 60),
                  array('method' => 'email', 'minutes' => 30),
                ),);
            
            $event->save('insertEvent',array('sendNotifications' => true, 'conferenceDataVersion' => true));
        
      return redirect('/schedule')->with('success','Event Created');
        
        
    }
    public function index()
    {
       
        return view('schedule.index');

    }
}
