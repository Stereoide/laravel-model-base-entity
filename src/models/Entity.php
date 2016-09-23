<?php

namespace Stereoide\ModelBaseEntity;

use Illuminate\Database\Eloquent\Model;
use Stereoide\ResolvesEntityType;

class Entity extends Model
{
	use ResolvesEntityType;
	
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = '';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'entity_type',
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'deleted_at',
    ];
    
    public function boot() {
        $this->table = config('modelbaseentity.base_entities_table', 'entities');
    }
}
