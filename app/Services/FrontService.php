<?php

namespace App\Services;

use App\Repositories\Contracts\CategoryRepositoryInterface;
use App\Repositories\Contracts\KostRepositoryInterface;

class FrontService
{
    protected $categoryRepository;
    protected $kostRepository;

    public function __construct(KostRepositoryInterface $kostRepository, CategoryRepositoryInterface $categoryRepository)
    {
        $this->kostRepository = $kostRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function searchKosts(string $keyword)
    {
        return $this->kostRepository->searchByName($keyword);
    }

    public function searchCategories(string $keyword)
    {
        return $this->categoryRepository->searchByName($keyword);
    }

    public function getFrontPageData()
    {
        $categories = $this->categoryRepository->getAllCategories();
        $popularKosts = $this->kostRepository->getPopularKosts(4);
        $newKosts = $this->kostRepository->getAllNewKosts();
        $locationKosts = $this->kostRepository->getAllLocation();

        return compact('categories', 'popularKosts', 'newKosts', 'locationKosts');
    }


}
