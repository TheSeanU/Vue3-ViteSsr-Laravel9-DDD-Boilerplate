<?php declare(strict_types = 1);

namespace App\Application\Repository;   

use App\Application\Interface\RepositoryInterface;
use Illuminate\Database\Eloquent\Model;   

class BaseRepository implements RepositoryInterface 
{
    /**      
     * @var Model      
     */     
    protected $model;
    
    /**      
     * BaseRepository constructor.      
     *      
     * @param Model $model
     */     
    public function __construct(Model $model)
    {         
        $this->model = $model;
    }
 
    /**
    * @param array $attributes
    *
    * @return Model
    */
    public function create(array $attributes): Model
    {
        return $this->model->create($attributes);
    }
 
    /**
    * @param $id
    * @return Model
    */
    public function find($id): ?Model
    {
        return $this->model->find($id);
    }
}