<?php



namespace App\Http\Controllers\Admin;



use App\Http\Controllers\Controller;

use App\Models\Category;

use Illuminate\Support\Str;

use Illuminate\Support\Facades\Storage;

use App\Http\Requests\category\StoreCategoryRequest;

use App\Http\Requests\category\UpdateCategoryRequest;



class CategoryController extends Controller

{

    /**

     * Display a listing of the resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function index()

    {

        return view('back-end.categorys.list-category', ['categorys' => Category::all()]);

    }



    /**

     * Show the form for creating a new resource.

     *

     * @return \Illuminate\Http\Response

     */

    public function create()

    {

        return view('back-end.categorys.create-category');

    }



    /**

     * Store a newly created resource in storage.

     *

     * @param  \Illuminate\Http\StoreCategoryRequest  $request

     * @return \Illuminate\Http\Response

     */

    public function store(StoreCategoryRequest $request)

    {
        if($request->hasFile('logo')) {

           $logo = $request->file('logo')->store('categorys-picture', 'public');  

        }

        Category::create([

                'name' => $request->name,

                'description' => $request->description,

                'logo' => $logo,

                'slug' => Str::slug($request->name)

            ]);

        return redirect()->route('admin.categorys.index');

    }



    /**

     * Display the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function show($id)

    {

        return $id;

    }



    /**

     * Show the form for editing the specified resource.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function edit($id)

    {

        return view('back-end.categorys.edit-category', ['category' => Category::findOrFail($id)]);

    }



    /**

     * Update the specified resource in storage.

     *

     * @param  \Illuminate\Http\UpdateCategoryRequest  $request

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function update(UpdateCategoryRequest $request, $id)

    {   

        $category = Category::findOrFail($id);

        $category->name = $request->input('name');

        $category->description = $request->input('description');

        $category->slug = Str::slug($request->input('name'));

        $category->etat =  $request->etat ? true: false;

        if($request->hasFile('logo')) {

            Storage::disk('public')->delete($category->logo);

            $logo = $request->file('logo')->store('categorys-picture', 'public');

            $category->logo = $logo;

        }

        $category->save();

        return redirect()->route('admin.categorys.index');

    }



    /**

     * Remove the specified resource from storage.

     *

     * @param  int  $id

     * @return \Illuminate\Http\Response

     */

    public function destroy($id)

    {

        $category = Category::findOrFail($id);

        $category->delete();

        Storage::disk('public')->delete($category->logo);

        return redirect()->back();

    }

}