<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'FirstApp')}}</title>

    </head>
    <body bgcolor="#95a5a6">
     
      <h1>Account Information</h1>

     <form action="{{ url('booking')}}" method="POST">
    {!! csrf_field() !!}
    <section class="PersonalInfo">
    <div>
    <h3>Fill up the need Information</h3>
       
       <label>First Name</label>
       <input type="text" name="Firstname" id="FirstName" class="form-control" required="require">

       <label>Middle Name</label>
       <input type="text" name="Middlename" id="MiddleName" class="form-control" required="require">

       <label>Surname</label>
       <input type="text" name="Surname" id="Surname" class="form-control" required="require">

       <label>Birthday</label>
       <input type="text" name="Birthday" id="Birthday" class="form-control" required="require">

       <label>Age</label>
       <input type="text" name="Age" id="Age" class="form-control" required="require">
    
    </div>
    </section>

    <h3>Address</h3>
   <div class="form-group">
     <label>Street Name</label>
     <input type="text" name="StreetName" id="StreetName" class="form-control" required="require">

       <label>City</label>
       <input type="text" name="City" id="City" class="form-control" required="require">


        <label>Postal Code</label>
        <input type="text" name="PostalCode" id="PostalCode" class="form-control" required="require">
      </div>

      <h3>Contacts</h3>
      <div class="form-group">
        <label>Phone Number</label>
        <input type="text" name="PhoneNumber" id="PhoneNumber" class="form-control" required="require">

        <label>Mobile Number</label>
        <input type="text" name="MobileNumber" id="MobileNumber" class="form-control" required="require">

        <label>Email</label>
        <input type="text" name="Email" id="Email" class="form-control" required="require">
      </div>

      <h3>Incase of Emergency Please contact the ff.</h3>
      <div class="form-group">
        <label>Full Name</label>
        <input type="text" name="FullName" id="FullName" class="form-control" required="require">

        <label>Emergency Mobile Number</label>
        <input type="text" name="EmergencyMobileNumber" id="EmergencyMobileNumber" class="form-control" required="require">

        <label>Relationship</label>
        <input type="text" name="Relationship" id="Relationship" class="form-control" required="require">
      </div>

    <br><input type="submit" value="Save" class="btn btn-success">
    

 </form>
 <a href="/booking" title="Back"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Back</button>
 
</body>
</html>
