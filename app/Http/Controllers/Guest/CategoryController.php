<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Advertising;
use App\Models\Category;
use Cache;
use Illuminate\Http\Request;
use Session;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
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
    public function show($category)
    {

        /*
         * Все категории
         */

        $categoryList = Cache::remember('categoryList', 60, function () {
            return Category::MainCategory()->with('getSubCategory')->get();
        });


        /*
         * Выборка
         */

        $categoryMain = Category::find($category->category_id);
        if (is_null($categoryMain)) {
            $categoryMain = $category;
        }

        $categorySub = $categoryMain->getSubCategory()->get();


        $WhereCategory = [];
        foreach ($categorySub as $value) {
            $WhereCategory[] = $value->id;
        }

        $advertisingList = Advertising::with('getImages', 'getCategory', 'getCity')
            ->where('city_id', Session::get('GeoCity')->id)
            ->whereIn('category_id', $WhereCategory)
            ->orderBy('id', 'DESC')
            ->simplePaginate(10);


        /*
         * Количество
         */


        $count_separated = implode(",", $WhereCategory);

        $CountAdvListAll = Cache::remember('CountAdvListAll' . $count_separated . 'City' . Session::get('GeoCity'), 60, function () use ($WhereCategory) {
            return Advertising::where('city_id', Session::get('GeoCity'))
                ->whereIn('category_id', $WhereCategory)
                ->orderBy('id', 'DESC')
                ->count();
        });



        return view('guest.category', [
            'categoryMain' => $categoryMain,
            'categorySub' => $categorySub,
            'advertisingList' => $advertisingList,
            'category'        => $category,

            'CountAdvListAll' => $CountAdvListAll,
            'categoryList'    => $categoryList,
        ]);


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
     * @param  int     $idcreated_at
     *
*@return Response
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
