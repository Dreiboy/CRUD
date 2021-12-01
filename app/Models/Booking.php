<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;
    protected $table='bookings';
    protected $primaryKey='id';
   protected $fillable = ['Surname', 'Middlename', 'Firstname', 'Birthday', 'Age', 'StreetName','City','PostalCode','PhoneNumber', 'MobileNumber', 'Email', 'FullName', 'EmergencyMobileNumber', 'Relationship'];
}
