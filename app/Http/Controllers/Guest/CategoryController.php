<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Models\Category;
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

        $categoryMain = Category::find($category->category_id);
        if (is_null($categoryMain)) {
            $categoryMain = $category;
        }

        $categorySub = $categoryMain->getSubCategory()->get();


        $advertisingList = $category->getAdvertising()
            ->with('getImages', 'getCategory', 'getCity')
            ->where('city_id', Session::get('GeoCity'))
            ->orderBy('id', 'DESC')
            ->simplePaginate(10);


        return view('guest.category', [
            'categoryMain' => $categoryMain,
            'categorySub' => $categorySub,
            'advertisingList' => $advertisingList,
            'category'        => $category,
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
