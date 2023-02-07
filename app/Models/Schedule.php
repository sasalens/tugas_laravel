<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'schedules';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['user_id', 'group_id', 'note', 'start_at', 'end_at'];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function group()
    {
        return $this->belongsTo('App\Models\Group');
    }
    public function presences()
    {
        return $this->hasMany('App\Models\Presence');
    }
    
}
