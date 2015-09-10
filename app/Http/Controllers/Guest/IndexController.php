<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Advertising;
use App\Models\Category;
use App\Models\City;
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

        $allCity = Cache::remember('allCity', 60, function () {
            return City::lists('id', 'name');
        });


        return view('guest.index', [
            'categoryList' => $categoryList,
            'popularCategory' => $popularCategory,
            'allCity' => $allCity,
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
