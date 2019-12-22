<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    // fillable example
//    protected $fillable = ['name', 'email', 'active'];

    // protection with guarded
    protected $guarded = [];


    //settingup default values
    protected $attributes = [
      'active' =>1
    ];

    // Accessor get<column_name>Attribute
    public function getActiveAttribute($attribute){
        return $this->activeOptions()[$attribute];
    }

    // SCOPING scope<column_name>
    public function scopeActive($query){
        return $query->where('active',1);
    }
    public function scopeInactive($query){
        return $query->where('active',0);
    }

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function activeOptions(){
        return [
            1=>'Active',
            0=>'Inactive'
        ];
    }
}
