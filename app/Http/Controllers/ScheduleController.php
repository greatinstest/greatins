<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Spatie\GoogleCalendar\Event;

use Carbon\Carbon;


class ScheduleController extends Controller
{
    public function store(Request $request)
    {
        
        if ($request->address)
         return redirect('/schedule')->with('success','Event Created');

        $this->validate($request,[
            'name'=>['required','regex:/^[\pL\s\-]+$/u'],
            'phone'=>'required',
            'email'=>'required',
            'title'=>'required',
            'date'=>'required']);
        
        $name=$request->input('name');
        $phone=$request->input('phone');
        $email=$request->input('email');
        $title=$request->input('title');
        $date = $request->input('date');
        $time = $request->input('time');

        $start = Carbon::parse($date.' '.$time,'Europe/Belgrade');
        $end = (clone $start)->addHour();
        
        $event = new Event;
        $event->name = $title;
        $event->description = 'Event for Great Services d.o.o. home test';
        $event->startDateTime = $start;
        $event->endDateTime = $end;
        $event->location = "Gregorčićeva 006, Belgrade, Serbia";
        $event->addAttendee(['email' => $email,'comment'=>'Name: '.$name.'; tel: '.$phone]);
        $event->addAttendee(['email' => 'tsudar1991@gmail.com','comment'=>'Name: Tomislav Sudar; tel: 0638043816']);
        $event->sendUpdates ='all';
        $event->reminders=array(
         'useDefault' => FALSE,
         'overrides' => array(
            array('method' => 'email', 'minutes' => 15),
            array('method' => 'email', 'minutes' => 30),)
        );
            
        $event->save('insertEvent',array('sendNotifications' => true, 'conferenceDataVersion' => true));
        
        return redirect('/schedule')->with('success','Event Created');
        
        
    }
    public function index()
    {
       
        return view('schedule.index');

    }
}
