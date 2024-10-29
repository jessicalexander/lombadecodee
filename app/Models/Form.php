<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;
    protected $table = "members";
    protected $fillable = [
        'name',
        'email',
        'phone',
        'address',
    ];

    public function get_members(){
        $sql = $this->select("members.*");
        return $sql;
    }
}