<?php declare(strict_types = 1);

namespace App\Application\Interface;

use Illuminate\Database\Eloquent\Model;

/**
* Interface RepositoryInterface
* @package App\Core\Repositories
*/
interface RepositoryInterface
{
   /**
    * @param array $attributes
    * @return Model
    */
   public function create(array $attributes): Model;

   /**
    * @param $id
    * @return Model
    */
   public function find($id): ?Model;
}
