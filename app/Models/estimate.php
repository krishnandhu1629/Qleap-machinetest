<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estimate extends Model
{
    use HasFactory;
    protected $fillable = ['proposal_id', 'amount'];

    public function proposal()
    {
        return $this->belongsTo(Proposal::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }
}

