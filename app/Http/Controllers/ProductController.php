<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Categories;
use App\Models\Product;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Image;
use App\Models\Sub_category;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$products = Product::all();
        return view('product.product_view',compact('products'));
    }

    public function productbread(){
        return view('product.product_bread');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            'oprice'=>'required',
            'shippingcost'=>'required',
            'file' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description'=>'required',
          ]);

          $product = new Product();

          if ($request->file('file')) {
            $imagePath = $request->file('file');
            $imageName = $imagePath->getClientOriginalName();

            $path = $request->file('file')->storeAs('images', $imageName, 'public');
          }

            $product->name = $imageName;
            $product->slug=Str::random(12);
            $product->image_path = $imageName;
            //$product->image_path = '/storage/'.$path;
            $product->name=$request->input('name');
            $product->price=$request->input('price');
            $product->oprice=$request->input('oprice');
            $product->shipping_cost=$request->input('shippingcost');
            $product->description=$request->input('description');
            $product->category_id=$request->input('category');
            $product->brand_id=$request->input('subcategory');
            $product->save();

          return back()->with('success', 'Product uploaded successfully');

    }
    public function getCategories()
    {
        $countries = \DB::table('categories')->pluck("cat_name","id");
        return view('product.create-products',compact('countries'));
    }

    public function getSubcategory($id)
    {
        $states = \DB::table("sub_categories")->where("subcat_id",$id)->pluck("subcat_name","id");
        return json_encode($states);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
        // $subcategory=Sub_category::with(relations:'product')->first();

        //dd($subcategory->toArray());
        return view('product.product-details')->with('product',$product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }
    public function slugg($slug){
        $subcategories=Sub_category::get();
        $category=Categories::with(relations:'product')->where('slug',$slug)->first();
        return view('categories.phoneandtablets.Phonestablets',compact(['category','subcategories']));
    }
    public function productsubcategory($slug){
        $sproduct=sub_category::with(relations:['product'])->where('slug',$slug)->first();
        //dd($sproduct->toArray());
        return view('categories.phoneandtablets.Tablets.Tablets.samsung_tablets',compact('sproduct'));

    }

     public function productDetails(){
         $subcategory=Sub_category::with(relations:'product')->first();
         //dd($subcategory);
         return view('product.product-details',compact('subcategory'));
    }
    public function getsubcatproduct($id){
        $users = Product::join('Sub_categories', 'products.category_id', '=', 'sub_categories.subcat_id')
        ->where('category_id',$id)
        ->get(['products.*']);
        dd($users);
    }

}
