@extends('layouts.app')
    @section('content')
     <div class="jumbotron text-center" style="width:70%;margin-left:auto;margin-right:auto">
        <h2>Create Event</h2>
        <form action="{{route('schedule.store')}}" method="POST">
            @csrf
        
            <div class="form-group">
              <label for="name">Your Name:</label>
              <input type="text" name="name" class="form-control" placeholder="Enter Your Name Here">
            </div>

            <div class="form-group">
                <label for="phone">Your Phone Number:</label>
                <input type="number" name="phone" class="form-control" placeholder="Enter Your Phone Number Here">
            </div>

            <div class="form-group">
                <label for="email">Your Email Address:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter Your Email Address Here">
            </div>

            <div class="form-group">
                <label for="name">Event Title:</label>
                <input type="text" name="title" class="form-control" placeholder="Enter Desired Event Title">
            </div>

            <div class="form-group" style="display: none;">
                <label for="address">Your Address:</label>
                <input type="text" name="address" class="form-control" placeholder="Enter your address">
            </div>

            <div class="form-row">
                
            <p style="margin:auto">Choose Date and Time:</p>
                
                <div class="alert alert-primary" style="margin-left:auto;margin-right:auto" role="alert">
                    We are using Eurpe/Belgrade (GMT+1) time zone. Please, choose event date and time accordingly.
                </div> 
                

             <div class="col">
              <input type="date" name="date" class="form-control">
             </div>
             <div class="col">
              <input type="time" name="time" class="form-control">
             </div>
           </div>
           <hr>
           <button type="submit" class="btn btn-primary">Create Event</button>
          </form>
     </div>
    @endsection