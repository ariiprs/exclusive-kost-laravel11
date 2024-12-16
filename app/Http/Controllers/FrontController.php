<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Kost;
use App\Services\FrontService;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    protected $frontService;


    public function __construct(FrontService $frontService) // ini adalah dependency injection
    {
        $this->frontService = $frontService;
    }

    public function index()
    {
        $data = $this->frontService->getFrontPageData(); // ini menggunakan dependency injection
        return view('dashboard', $data);
    }

    public function contact()
    {
        return view('front.contact');
    }

    public function testimonial()
    {
        return view('front.testimonial');
    }

    public function allCategories()
    {
        $data = $this->frontService->getFrontPageData(); // ini menggunakan dependency injection

        return view('front.all_categories', $data);
    }

      public function category(Category $category)
    {
        return view('front.category', compact('category'));
    }

    public function search(Request $request)
    {
        $keyword = $request->input('keyword');

        $kosts = $this->frontService->searchKosts($keyword);

        return view('front.search', [
            'kosts' => $kosts,
            'keyword' => $keyword,
        ]);
    }

    public function searchCategory(Request $request)
    {
        $keyword = $request->input('keyword');

        $categories = $this->frontService->searchCategories($keyword);

        return view('front.search_category', [
            'categories' => $categories,
            'keyword' => $keyword,
        ]);
    }

    public function details(Kost $kost) //ini menggunakan konsep model binding
    {
        return view('front.details', compact('kost'));
        //compact digunakan supaya data dari model Shoe dikirim ke shoe
    }
}
