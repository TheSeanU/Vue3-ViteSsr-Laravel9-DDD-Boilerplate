<?php declare(strict_types = 1);

namespace App\Domain\User\Repository;

use App\Domain\User\Models\User;

use App\Core\Repository\BaseRepository;
use App\Domain\User\Interface\UserInterface;

use Illuminate\Support\Collection;

class UserRepository extends BaseRepository implements UserInterface
{

   /**
    * UserRepository constructor.
    *
    * @param User $model
    */
   public function __construct(User $model)
   {
       parent::__construct($model);
   }

   /**
    * @return Collection
    */
   public function all(): Collection
   {
       return $this->model->all();    
   }

    /**
     * @return Collection
     */
    public function findById($id): Collection
    {
        return $this->model->where('id', $id)->with('posts')->get();
    }
}