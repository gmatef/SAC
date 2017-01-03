<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceDetail extends Model
{
     protected $table = 'invoicedetails';
    protected $fillable = ['detail', 'units', 'unitPrice',];
    
    public function invoices()
    {
        return $this->belongsTo('App\Invoice');
    }
}
