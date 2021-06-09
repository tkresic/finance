<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

abstract class ModelRepository
{
    /**
     * Model for which the repository extracts data.
     *
     * @var Model
     */
    protected Model $model;

    /**
     * Assigns the model to the variable.
     *
     * ModelRepository constructor.
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    /**
     * Gets all the entities.
     *
     * @param array $with  Optional argument which loads given relationships.
     * @return Builder[]|Collection
     */
    public function all(array $with = [])
    {
        return $this->model->with($with)->orderBy('id', 'DESC')->get();
    }

    /**
     * Creates a new entity with given attributes.
     *
     * @param array $attributes
     * @return mixed
     */
    public function create($attributes = [])
    {
        return $this->model->create($attributes);
    }

    /**
     * Finds the entity by given ID.
     *
     * @param $id
     * @param array $with Optional argument which loads given relationships.
     * @return mixed
     */
    public function find($id, array $with = [])
    {
        return $this->model->with($with)->find($id);
    }

    /**
     * Updates the entity with given attributes.
     *
     * @param $id
     * @param array $attributes
     * @return mixed | null
     */
    public function update($id, $attributes = [])
    {
        $model = $this->model->find($id);

        if ($model == null) {
            return null;
        }

        $model->update($attributes);

        return $model;
    }

    /**
     * Deletes the entity.
     *
     * @param $id
     * @return true | mixed
     */
    public function delete($id)
    {
        return boolval($this->model->destroy($id));
    }
}
