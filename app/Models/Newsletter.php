<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;
    protected $table = "newsletter";
    protected $fillable = [
        'email',
    ];

    public function get_email(){
        $sql = $this->select("newsletter.*");
        return $sql;
    }
}