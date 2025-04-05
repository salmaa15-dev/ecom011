<?php



namespace App\Http\Controllers\Admin;



use App\Models\Countrie;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

use App\Http\Requests\CountryRequest;



class CountrieController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {    

        request()->country 
            ? $countries = Countrie::where('country', 'like', '%'.request()->country.'%')->paginate(35)
            : $countries = Countrie::paginate(35);

          

        return view('back-end.countries.list-countries', [

            'countries' => $countries->appends('country', request()->country),

            'country' => request()->country

            ]);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('back-end.countries.create-countrie');

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\CountryRequest  $request

     * @return \Illuminate\Http\Response

     */

    public function store(CountryRequest $request)
    {
        Countrie::create([

            'country' => $request->input('country'),

            'active' => $request->active ? true : false

        ]);

        return redirect()->route('admin.countries.index')->with('success', 'create success');

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        //

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        return view('back-end.countries.edit-countrie',['country' => Countrie::findOrFail($id)]);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\CountryRequest  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(CountryRequest $request, $id)

    {

        Countrie::findOrFail($id)->update([

            'country' => $request->country,

            'active' => $request->active ? true : false

        ]);



        return redirect()->route('admin.countries.index')->with('succes', 'changed success');

    }



    public function change_etat(Request $request)

    {

        Countrie::findOrFail($request->id)->update([

            'active' => $request->active ? true : false

        ]);

        return redirect()->back()->with('success', 'change etat success');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        Countrie::findOrFail($id)->delete();

        return redirect()->route('admin.countries.index')->with('success', 'remove success');



    }

}

