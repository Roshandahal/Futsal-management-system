<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scores extends Model
{
    use HasFactory;
    protected $table='scores';
    protected $fillable=['nameone','nametwo','scoreone','scoretwo','imageone','imagetwo','status'];

}
