<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
    protected $table = 'expensetypes';
    protected $fillable = ['description'];
    
    public function expenses()
    {
        return $this->hasMany('App\Expense');
    }
}
