<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('admin_product.index')->with('product',$product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_product.createProduct');
    }
    public function trangchu()
    {
        return view('index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function AddNewProduct(Request $request)
    {
         // Validate request data
         $validatedData = $request->validate([
            'product_name' => 'required',
            'product_type' => 'required',
            'product_quantity' => 'required|integer',
            'product_price' => 'required|numeric',
            'product_detail' => 'required',
            'product_image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'type_name' => 'required',
            'type_logo' => 'required|string|max:255'
        ]);

        // Handle image upload
        if ($request->hasFile('product_image')) {
            $image = $request->file('product_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName); // Lưu ảnh vào thư mục public/img
        } else {
            // Nếu không có ảnh được tải lên, bạn có thể xử lý ở đây
            $imageName = 'default.jpg'; // hoặc tên ảnh mặc định khác
        }

        // Create new product
        $product = new Product();
        $product->product_name = $validatedData['product_name'];
        $product->product_type = $validatedData['product_type'];
        $product->product_quantity = $validatedData['product_quantity'];
        $product->product_price = $validatedData['product_price'];
        $product->product_detail = $validatedData['product_detail'];
        $product->product_image = $imageName;
        $product->type_name = $validatedData['type_name'];
        $product->type_logo = $validatedData['type_logo'];
        $product->save();

        return redirect()->route('admin_product.index')->with('success', 'Product created successfully!');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('admin_product.showProduct', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $product = Product::findOrFail($id);
        return view('admin_product.updateProduct', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // Validate request data
        $validatedData = $request->validate([
            'product_name' => 'required',
            'product_type' => 'required',
            'product_quantity' => 'required|integer',
            'product_price' => 'required|numeric',
            'product_detail' => 'required',
            'type_name' => 'required',
            'type_logo' => 'required|string|max:255'
        ]);

        // Find the product
        $product = Product::findOrFail($id);

        // Update product fields
        $product->product_name = $validatedData['product_name'];
        $product->product_type = $validatedData['product_type'];
        $product->product_quantity = $validatedData['product_quantity'];
        $product->product_price = $validatedData['product_price'];
        $product->product_detail = $validatedData['product_detail'];
        $product->type_name = $validatedData['type_name'];
        $product->type_logo = $validatedData['type_logo'];

        // Check if a new image is uploaded
        if ($request->hasFile('product_image')) {
            // Handle image upload
            $image = $request->file('product_image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('img'), $imageName); // Save the image to public/img
            // Update the product's image
            $product->product_image = $imageName;
        }

        // Save the updated product
        $product->save();

        return redirect()->route('admin_product.index')->with('success', 'Product updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

    return redirect()->route('admin_product.index')->with('success', 'Product deleted successfully!');
    }
}
