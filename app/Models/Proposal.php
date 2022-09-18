<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

    protected $fillable = [
        'package_authen', 
        'package_prepared', 
        'package_description', 
        'package_jurisdiction', 
        'package_full_details', 
        'package_remark', 
        'package_name', 
        'package_date'
    ];
}
