<?php declare(strict_types = 1);

namespace App\Domain\Comment\Repository;

use App\Domain\Comment\Models\Comment;

use App\Core\Repository\BaseRepository;
use App\Domain\Comment\Interface\CommentInterface;

use Illuminate\Support\Collection;

class CommentRepository extends BaseRepository implements CommentInterface
{

   /**
    * CommentRepository constructor.
    *
    * @param Comment $model
    */
   public function __construct(Comment $model)
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