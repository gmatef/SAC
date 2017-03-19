<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    protected $table = 'providers';
    protected $fillable = ['fkPerson', 'fkItem', 'businessName', 'cuit', 'commercialAddress', 'fkCity', 'telephone'];
    
    public function cities()
    {
        return $this->belongsTo('App\City');
    }
    
    public function items() {
        return $this->belongsTo('App\Item');
    }
    
    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }
    
    public function invoices()
    {
        return $this->belongsTo('App\Invoice');
    }
    
    public function consortia()
    {
        return $this->belongsToMany('App\Consortium');
    }
    
}
