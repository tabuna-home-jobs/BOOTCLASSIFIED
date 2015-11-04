<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Advertising;
use App\Models\Category;
use App\Models\City;
use App\Models\User;
use Cache;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

        /*
         * Категории
         */
        $categoryList = Cache::remember('categoryListColums', 60, function () {
            $category = Category::MainCategory()->with('getSubCategory')->orderBy('name', 'ASC')->get();
            $columCount = ceil(count($category) / 3);

            return [
                $category->slice(0, $columCount),
                $category->slice($columCount, $columCount),
                $category->slice($columCount * 2),
            ];
        });


        $popularCategory = Cache::remember('popularCategory', 60, function () {
            return  Advertising::popularCategory()->get();
        });


        $CategoryCount = Cache::remember('CategoryCount', 60, function () {
            return Category::count();
        });

        /*
         * Города
         */
        $allCity = Cache::remember('allCity', 60, function () {
            return City::lists('id', 'name');
        });

        $CityCount = Cache::remember('CityCOunt', 60, function () use ($allCity) {
            return $allCity->count();
        });


        /*
         * Пользователи
         */

        $UserCount = Cache::remember('UserCount', 60, function () {
            return User::count();
        });


        /*
         * Обьявления
         */
        $advertisingCount = Cache::remember('advertisingCount', 60, function () {
            return Advertising::count();
        });




        return view('guest.index', [
            'categoryList' => $categoryList,
            'popularCategory' => $popularCategory,
            'allCity' => $allCity,
            'CityCount'        => $CityCount,
            'UserCount'        => $UserCount,
            'CategoryCount'    => $CategoryCount,
            'advertisingCount' => $advertisingCount,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request $request
     * @param  int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
