<?php declare(strict_types = 1);

namespace App\Domain\Post\Repository;

use App\Domain\Post\Models\Post;

use App\Infrastructure\Repository\BaseRepository;
use App\Domain\Post\Interface\PostInterface;

use Illuminate\Support\Collection;

class PostRepository extends BaseRepository implements PostInterface
{

   /**
    * PostRepository constructor.
    *
    * @param Post $model
    */
   public function __construct(Post $model)
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
        return $this->model->where('id', $id)->get();
    }
}
