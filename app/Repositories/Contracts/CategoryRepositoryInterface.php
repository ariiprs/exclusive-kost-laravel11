<?php

namespace App\Repositories\Contracts;

interface CategoryRepositoryInterface
{
    public function getAllCategories();

    public function searchByName(string $keyword);
}
