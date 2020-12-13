@extends('layouts.app')
    @section('content')
     <h1>Schedule</h1>
     <div class="jumbotron text-center">
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
                <small class="alert alert-warning" role="alert">
                 We are using Eurpe/Belgrade (GMT+1) time zone. Please, choose event date and time accordingly.
                <small> 
                <input type="text" name="address" class="form-control" placeholder="Enter your address">
            </div>

            <div class="form-group">
                <label for="date">Choose Date:</label>
                <input type="date" name="date" class="form-control">
            </div>

            <div class="form-group">
                <label for="date">Choose Time</label>
                <input type="time" name="time" class="form-control">
            </div>

           
            
            
            
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
     </div>
    @endsection