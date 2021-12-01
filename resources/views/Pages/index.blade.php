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
                width: 80%;
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
        <table>
            <tr>
                <th>ID</th>
                <th>Firstname</th>
                <th>Middlename</th>
                <th>Surname</th>
                <th>Age</th>
                <th>MobileNumber</th>
                <th>Email</th>
                <th>Action</th>
                
    
            </tr>

                <h1>Information</h1>
                <a href="/create" title="Add"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Add Information</button></a><br><br>
            @foreach ($bookings as $booking)
            <tr>
                <td>{{$booking->id}}</td>
                <td>{{$booking->Firstname}}</td>
                <td>{{$booking->Middlename}}</td>
                <td>{{$booking->Surname}}</td>
                <td>{{$booking->Age}}</td>
                <td>{{$booking->MobileNumber}}</td>
                <td>{{$booking->Email}}</td>
                <td><a href="/booking/{{$booking->id}}"title="View"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>View</button></a>  <a href="/booking/{{$booking->id}}/edit" title="Edit"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Edit</button></a> 

                    <form action="/booking/{{$booking->id}}" method="POST">
                        {{ csrf_field() }}
                        {{ method_field('DELETE') }}
                        <input type="submit" name="sumbit" value="Delete">
                    
                    </form>

                </td>
            </tr>
            @endforeach
        </table>
  
        {{$bookings->links()}}
    </body>
</html>

 