<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    //Table Name
    protected $table = 'content';
    //Primary Key
    public $primaryKey = 'id';
    // Timestamps
    public $timestamps = 'true';
}
