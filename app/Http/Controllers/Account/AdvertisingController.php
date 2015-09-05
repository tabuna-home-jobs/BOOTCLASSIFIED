<?php

namespace App\Http\Controllers\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests;
use App\Http\Requests\Account\AdvertisingRequest;
use App\Models\Advertising;
use App\Models\Category;
use App\Models\City;
use App\Models\Country;
use App\Models\Images;
use Cache;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Session;

class AdvertisingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categoryList = Cache::remember('categoryList', 60, function () {
            return Category::MainCategory()->with('getSubCategory')->get();
        });

        $countryList = Cache::remember('countryList', 60, function () {
            return Country::all();
        });


        $cityList = Cache::remember('cityList', 60, function () {
            return City::all();
        });


        return view('account.advertisingCreate', [
            'categoryList' => $categoryList,
            'countryList' => $countryList,
            'cityList' => $cityList,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request $request
     * @return Response
     */
    public function store(AdvertisingRequest $request)
    {
        $advertising = new Advertising($request->all());
        $advertising->user_id = Auth::user()->id;
        $advertising->save();


        foreach ($request->file('images') as $file) {
            if (!is_null($file)) {
                $file->move(public_path() . '/advertising/' . date("Y-m-d") . '/' . date("H"), Str::ascii(time() . '-' . $file->getClientOriginalName()));
                $image = new Images([
                    'advertising_id' => $advertising->id,
                    'path' => '/advertising/' . date("Y-m-d") . '/' . date("H"),
                    'name' => Str::ascii(time() . '-' . $file->getClientOriginalName()),
                    'finish' => true,
                ]);
                $image->save();
            }
        }


        Session::flash('good', 'Вы успешно изменили значения');
        return redirect('/');
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
