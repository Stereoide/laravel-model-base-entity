<?php

namespace Stereoide\ModelBaseEntity;

use Stereoide\ModelBaseEntity\Entity;

trait CreatesBaseEntity
{
    public static function bootCreatesBaseEntity()
    {
        /* Set event listener so we can jump in every time a model is being created */

        static::creating(function ($model) {
            /* Disable id auto-increment */

            $model->incrementing = false;

            /* Create base entity */
            
            $entityType = $model->getEntityType();
            
            $entity = new Entity;
            $entity->entity_type = $entityType;
            $entity->save();

            /* Set model id */

            $model->id = $entity->id;
        });
    }
}
