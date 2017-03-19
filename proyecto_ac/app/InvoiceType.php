<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceType extends Model
{
    
    protected $table = 'invoicetypes';
    protected $fillable = ['description', 'legend'];
  
    public function invoices()
    {
        return $this->hasOne('App\Invoice');
    }
    
    
}
