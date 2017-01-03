<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model//factura
{
    protected $table = 'invoices';
    protected $fillable = ['fkInvoicetype', 'fkConsortium', 'fkProvider', 'sellingPoint', 'proofPayment', 'fkDetail', 'totalInvoice'];
    
    public function invoicetypes()
    {
        return $this->belongsTo('App\InvoiceType');
    }
    
    public function InvoiceDetail()
    {
        return $this->hasMany('App\InvoiceDetail');
    }
    
    public function expenses()
    {
        return $this->belongsTo('App\Expense');
    }
    
    public function providers()
    {
        return $this->hasMany('App\Provider');
    }
    
    public function consortia()
    {
        return $this->belongsTo('App\Consortium');
    }
}
