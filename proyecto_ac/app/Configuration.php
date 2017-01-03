<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Configuration extends Model {
    protected $table = 'configurations';
    protected $fillable = ['fkPerson', 'contactProperty', 'receiveNotificationsByEmail', 'pSostulateBoard'];
    
    public function people()
    {
        return $this->belongsToMany('App\Person');
    }

}
