<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{{config('app.name', 'FirstApp')}}</title>

        <style>
            table {
                font-family: Arial, Helvetica, sans-serif;
                 border-collapse: collapse;
                 
                 } 
           th, td {
                 border: 1px solid #dddddd;
                 padding: 8px;
                 text-align: left;
                 }  
          
          tr:hover {background-color: gray;}
 
          
         .pagination li {
                 color: black;
                 float: left;
                 padding: 8px 16px;
                 transition: background-color .3s;
                 list-style-type: none;
                 }
         .pagination li hover {
                 background: pink;
         }
         </style>
     </head>
     <body bgcolor="#7f8c8d">
         <table align="center">
             <h2 align="center">View Form</h2>
             <tr>
                 <th>ID</th>
                 <td>{{$booking->id}}</td>
             </tr>

             <tr>
                <th>Firstname</th>
                <td>{{$booking->Firstname}}</td>
             </tr>

             <tr>
                <th>Middlename</th>
                <td>{{$booking->Middlename}}</td>
             </tr>

             <tr>
                <th>Surname</th>
                <td>{{$booking->Surname}}</td>
             </tr>  
             
             <tr>
                <th>Birthday</th>
                <td>{{$booking->Birthday}}</td>
             </tr>   

             <tr>
                <th>Age</th>
                <td>{{$booking->Age}}</td>
             </tr>

             <tr>
                <th>StreetName</th>
                <td>{{$booking->StreetName}}</td>
             </tr>

             <tr>
                <th>City</th>
                <td>{{$booking->City}}</td>
             </tr>

             <tr>
                <th>PostalCode</th>
                <td>{{$booking->PostalCode}}</td>
             </tr>

             <tr>
                <th>PhoneNumber</th>
                <td>{{$booking->PhoneNumber}}</td>
             </tr>

             <tr>
                <th>MobileNumber</th>
                <td>{{$booking->MobileNumber}}</td>
             </tr>

             <tr>       
                <th>Email</th>   
                 <td>{{$booking->Email}}</td>
             </tr>

             <tr>       
                <th>FullName</th>   
                 <td>{{$booking->FullName}}</td>
             </tr>

             <tr>       
                <th>EmergencyMobileNumber</th>   
                 <td>{{$booking->EmergencyMobileNumber}}</td>
             </tr>

             <tr>       
                <th>Relationship</th>   
                 <td>{{$booking->Relationship}}</td>
             </tr>

            
         </table>
         <a href="/booking" title="Back"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Back</button>
    </body>
</html>
