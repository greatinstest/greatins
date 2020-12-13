@extends('layouts.app')
    @section('content')
    <div style="display:flex">

        <div class="jumbotron text-center">
            <h2>Technologies and packages information:</h2>
            <p>I decided to use Laravel, because that's the framework you use in your company. I used Laravel 8.x, and I beleive that is the latest version.</p>
            <h4>Packages and components:</h4>
            <ul class="text-left">
                <li>Bootstrap</li>
                <li>Awesome Fonts</li>
                <li>Carbon</li>
                <li>Laravel Google Calendar by Spatie</li>
            </ul>
          

         <h4>Server setup:</h4>
            <p>For testing on localhost, I am using Apache</p>
            <p>I used Nginx settings when I deployed this project to Heroku</p>

        <h4>Google Calendar API:</h4>
         <p>I am using oauth to get API client credentials</p>
         <p>I have created 'credentials' folder in root, and copied oauth JSONs there to avoid pushing Laravel's 'storage' folder to Heroku.</p>
            

        <h4>Test & Deploy:</h4>
         <p>Source code is available on <a href="https://github.com/greatinstest/greatins" target="_blank">Git</a></p>
         <p>I decided to deply it here on Heroku, so you can test it right away.</p>
         <p>The source code in repository, is exactly the same code which runs this Heroku app.</p>   
         </div> 
        
     <div class="jumbotron text-center">
        <h2>Home Test Requirements:</h2>
        <h4>Front end - Input fields:</h4>
        <div class="alert alert-warning">
         <i class="fas fa-exclamation-triangle"></i>
          Name - <span> <b> I wasn't sure if you were refering to event or client name, so I created input for both. Both fields are required.</b>
        </div>
        <div class="alert alert-success">
         <i class="fa fa-check"></i>
          Phone - <span> <b> Phone field is required. It accepts only numeric value.</b>
        </div>
        <div class="alert alert-success">
         <i class="fa fa-check"></i>
          Email - <span> <b> Email field is required. Accepts only valid email format (with @ and .)</b>
        </div>
        <div class="alert alert-success">
         <i class="fa fa-check"></i>
          Date and Time - <span> <b> Both fields are required. There is a warning about the time zone.</b>
        </div>
        <div class="alert alert-success">
         <i class="fa fa-check"></i>
             Spam/robot protection - <span> <b> There is a hidden input field. When a potential script / robot fills it, controller will instantly return 'success' message without doing anything else. </b>
        </div>
        <div class="alert alert-success">
         <i class="fa fa-check"></i>
             Success / fail messages - <span> <b> Every input field has a warning in case of faild validation. Upon successful event creation, 'success' message will be displayed. </b>
        </div> 
     
     <h4>Back-end:</h4>
        <div class="alert alert-success">
         <i class="fa fa-check"></i>
          <b>Creates calendar event with reminders 15 and 30 minutes before the meeting</b>
        </div>
        <div class="alert alert-success">
         <i class="fa fa-check"></i>
          <b>Event contains all entered data.</b>
        </div>
        <div class="alert alert-success">
         <i class="fa fa-check"></i>
          <b>Upon event creation, notification is delivered to client's email</b>
        </div>
    </div>

    </div>
    @endsection