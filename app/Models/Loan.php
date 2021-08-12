<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;   

    protected $fillable = ['requested_amount', 'client_id', 'date_requested'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }
}
