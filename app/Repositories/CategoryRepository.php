<?php

namespace App\Repositories;

use App\Models\Category;
use App\Repositories\Contracts\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface
{
    public function getAllCategories()
    {
        return Category::latest()->get();
    }

    public function searchByName(string $keyword)
    {
        return Category::where('name', 'LIKE', '%' . $keyword . '%')->get();
    }
}
