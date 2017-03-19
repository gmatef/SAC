<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    protected $table = 'expenses';
    protected $fillable = ['fkFunctionalUnit', 'fkConsortium', 'fkProvider', 'fkInvoice', 'fkExpenseType'];
    
    public function expensetypes()
    {
        return $this->belongsTo('App\ExpenseType');
    }
    
    public function functionalunits()
    {
        return $this->belongsTo('App\FunctionalUnit');
    }
    
     public function consortia()
    {
        return $this->belongsTo('App\Consortium');
    }
    
    public function invoices()
    {
        return $this->hasMany('App\Invoice');
    }
    
    public function providers()
    {
        return $this->belongsTo('App\Provider');
    }
}
