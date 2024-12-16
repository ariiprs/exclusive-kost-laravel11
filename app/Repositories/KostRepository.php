<?php

namespace App\Repositories;

use App\Models\Kost;
use App\Models\Location;
use App\Repositories\Contracts\KostRepositoryInterface;

class KostRepository implements KostRepositoryInterface
{
    public function getPopularKosts($limit = 7) // default limit 4, bisa diatur berapa saja
    {
        return Kost::where('is_popular', true)->take($limit)->get();
    }

    public function searchByName(string $keyword)
    {
        return Kost::where('name', 'LIKE', '%' . $keyword . '%')->get();
    }

    public function getAllNewKosts()
    {
        return Kost::latest()->take(7)->get();
        // return Shoe::latest()->take(5)->get();
    }

    public function getAllLocation()
    {
        return Location::all();
        // return Shoe::latest()->take(5)->get();
    }

    public function find($id)
    {
        return Kost::find($id);
    }

    public function getPrice($kostId)
    {
        $kost = $this->find( $kostId );
        return $kost ? $kost->price : 0;
    }

}
