<?php

namespace Stereoide\ModelBaseEntity;

use Illuminate\Database\Eloquent\Model;

class Entity extends Model
{
	/**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'entities';

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
    
    public function __construct() {
        $this->table = config('modelbaseentity.base_entities_table', 'entities');
    }
}
