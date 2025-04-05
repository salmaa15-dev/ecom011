<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use App\Models\Product;

use Illuminate\Support\Str;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\pack\StorePackRequest;

use App\Http\Requests\pack\UpdatePackRequest;


class PackController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return view('back-end.packs.list-pack', ['packs' => Product::type(true)->paginate(10)]);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('back-end.packs.create-pack');

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\StorePackRequest  $request

     * @return \Illuminate\Http\Response

     */

    public function store(StorePackRequest $request)

    {

        if($request->hasFile('image')) {

            $image = $request->file('image')->store('packs-picture', 'public');

        }

        Product::create([

            'title'       => $request->input('title'),

            'description' => $request->input('description'),

            'slug'        => Str::slug($request->title),

            'image'       => $image,

            'price'       => $request->input('price'),

            'available_pack'   => $request->available_pack ? true: false,

            'pack'   => true

        ]);



        return redirect()->route('admin.packs.index')->with('success', 'Added successfully');

        

    }



    /**

     * Display the specified resource.

     *

     * @param  string  $slug

     * @return \Illuminate\Http\Response

     */

    public function show($slug)

    {

        return view('back-end.packs.show-pack', ['pack' => Product::where('slug', $slug)->Type(true)->firstOrFail()]);

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  string  $slug

     * @return \Illuminate\Http\Response

     */

    public function edit($slug)

    {

        return view('back-end.packs.edit-pack', ['pack' => Product::where('slug', $slug)->Type(true)->firstOrFail()]);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\UpdatePackRequest  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(UpdatePackRequest $request, $id)

    {

        $product = Product::findOrFail($id);



        $product->title = $request->input('title');

        $product->slug = Str::slug($request->title);

        $product->description = $request->input('description');

        $product->price = $request->input('price');

        $product->available_pack = $request->input('available_pack') ? true : false;

        

        if($request->hasFile('image')) {

            Storage::disk('public')->delete($product->image);

            $product->image = $request->file('image')->store('packs-picture', 'public');

        }

        $product->save();

        return redirect()->route('admin.packs.index')->with('success', 'This information changes successfully');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $pack = Product::findOrFail($id);

        $pack->delete($id);

        Storage::disk('public')->delete($pack->image);

        return redirect()->route('admin.packs.index')->with('success', 'Pack delete successfully');



    }

 

    public function available_pack(Request $request) {

        $product = Product::find($request->id);

        $product->update(['available_pack' => $request->available ? true : false]);

        return redirect()->route('admin.packs.index')->with('success', 'This discount for '.$product->title.' <strong>'.$product->EtatAvailablePack.'</strong>');

    }



}

