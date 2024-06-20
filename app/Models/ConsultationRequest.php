<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ConsultationRequest extends Model
{
    protected $primaryKey = 'User_id';
    protected $fillable = [
        'name', 'email', 'phone', 'status',
    ];
}
