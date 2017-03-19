<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consortium extends Model
{
    protected $table = 'consortia';
    protected $fillable = ['fkAdministrator', 'edifice', 'floors', 'cuit', 'address', 'fkCity', 'backgroundReservation'];
    
    public function cities()
    {
        return $this->belongsTo('App\City');
    }
    
    public function employees() {
        return $this->hasMany('App\Employee');
    }
    
    public function administrators() {
        return $this->belongsTo('App\Administrator');
    }
    
    public function expenses() {
        return $this->hasMany('App\Expense');
    }
    
    public function providers()
    {
        return $this->belongsToMany('App\Provider');
    }
    
    public function invoices() {
        return $this->hasMany('App\Invoice');
    }
    
    public function functionalunits() {
        return $this->hasMany('App\FunctionalUnit');
    }
}
