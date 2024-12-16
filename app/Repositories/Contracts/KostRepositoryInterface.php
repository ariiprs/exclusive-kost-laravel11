<?php

namespace App\Repositories\Contracts;

interface KostRepositoryInterface
{
    public function getPopularKosts($limit);

    public function searchByName(string $keyword);

    public function getAllNewKosts();

    public function find($id);

    public function getPrice($kostId);

    public function getAllLocation();

}
