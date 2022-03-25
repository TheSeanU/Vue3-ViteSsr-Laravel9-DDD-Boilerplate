<?php declare(strict_types = 1);

namespace App\Core\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

use App\Core\Interface\RepositoryInterface;
use App\Core\Repository\BaseRepository;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $repository;

    public function __construct(RepositoryInterface $repository)
    {
        $this->repository = $repository;
    }
}
