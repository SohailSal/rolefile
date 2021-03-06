<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Year extends Model
{
    use HasFactory;

    protected $fillable = [
        'begin','end','enabled','company_id'
    ];

    public function company(){
        return $this->belongsTo('App\Models\Company', 'company_id');
    }

    public function documents()
    {
        return $this->hasMany('App\Models\Document', 'year_id');
    }

    public function groups()
    {
        return $this->hasMany('App\Models\Group', 'year_id');
    }
}
