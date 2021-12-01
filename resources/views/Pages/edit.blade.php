<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'FirstApp')}}</title>

    </head>
    <body bgcolor="#95a5a6">
     
      
        
      <h1>Account Information</h1>

      <form action="{{ url('booking/' .$booking->id) }}" method="post">
    {!! csrf_field() !!}
    @method("PATCH")
    
    <section class="PersonalInfo">
    <div>
    <h3>Fill up the need Information</h3>
        <input type="hidden" name="id" id="id" value="{{$booking->id}}" id="id" />
       <label>First Name</label>
       <input type="text" name="Firstname" id="Firstname" value="{{$booking->Firstname}}" class="form-control">

       <label>Middle Name</label>
       <input type="text" name="Middlename" id="Middlename" value="{{$booking->Middlename}}" class="form-control">

       <label>Surname</label>
       <input type="text" name="Surname" id="Surname" value="{{$booking->Surname}}" class="form-control">

       <label>Birthday</label>
       <input type="text" name="Birthday" id="Birthday" value="{{$booking->Birthday}}" class="form-control">

       <label>Age</label>
       <input type="text" name="Age" id="Age" value="{{$booking->Age}}" class="form-control">
    
    </div>
    </section>
    
    <h3>Address</h3>
   <div class="form-group">
     <label>Street Name</label>
     <<input type="text" name="StreetName" id="StreetName" value="{{$booking->StreetName}}" class="form-control">


  
       <label>City</label>
       <input type="text" name="City" id="City" value="{{$booking->City}}" class="form-control">


        <label>Postal Code</label>
        <input type="text" name="PostalCode" id="PostalCode" value="{{$booking->PostalCode}}" class="form-control">
      </div>

      <h3>Contacts</h3>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="PhoneNumber" id="PhoneNumber" value="{{$booking->PhoneNumber}}" class="form-control">

        <label>Mobile Number</label>
        <input type="text" name="MobileNumber" id="MobileNumber" value="{{$booking->MobileNumber}}" class="form-control">

        <label>Email</label>
        <input type="text" name="Email" id="Email" value="{{$booking->Email}}" class="form-control">
      </div>

      <h3>Incase of Emergency Please contact the ff.</h3>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="FullName" id="FullName" value="{{$booking->FullName}}" class="form-control">

        <label>Emergency Mobile Number</label>
        <input type="text" name="EmergencyMobileNumber" id="EmergencyMobileNumber" value="{{$booking->EmergencyMobileNumber}}" class="form-control">

        <label>Relationship</label>
        <input type="text" name="Relationship" id="Relationship" value="{{$booking->Relationship}}" class="form-control">
      </div>

    <br><input type="submit" value="Update" class="btn btn-success">

 </form>
 <a href="/booking" title="Cancel"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Cancel</button>
 
</body>
</html>
