<?php declare(strict_types = 1);

namespace App\Interface\Products\Controllers;

use App\Infrastructure\Controllers\Controller;
use App\Application\Products\Interface\ProductInterface;
use Illuminate\Http\JsonResponse;

class Productcontroller extends Controller
{
    private $productRepository;

    public function __construct(ProductInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    public function index(): JsonResponse
    {
        return new JsonResponse([$this->productRepository->all()]);
    }

    public function find()
    {
        return new JsonResponse([$this->productRepository->findById('1')]);
    }
}
