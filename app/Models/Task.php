<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table="tasks"; // هذا المودل مرتبط في الجدول الذي اسمه task
    protected $fillable=['title','description']; // الاشياء الي مسموح فيها
    protected $guarded = [];//  الاشياء الغير مسموح فيها
}
