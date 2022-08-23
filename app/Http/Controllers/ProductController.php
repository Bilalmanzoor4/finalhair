<?php
  
namespace App\Http\Controllers;
   
use App\Models\Product;
use Illuminate\Http\Request;
  
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);
    
        return view('backend.module.products.index',compact('products'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }
     
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.module.products.create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
      {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
  
        $input = $request->all();
  
        if ($image1 = $request->file('image1')) {
            $destinationPath = 'upload/';
            $profileImage1 = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage1);
            $input['image1'] = "$profileImage1";
        }
           if ($image2 = $request->file('image2')) {
            $destinationPath = 'upload/';
            $profileImage2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage2);
            $input['image2'] = "$profileImage2";
        }
           if ($image3 = $request->file('image3')) {
            $destinationPath = 'upload/';
            $profileImage3 = date('YmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $profileImage3);
            $input['image3'] = "$profileImage3";
        }
           if ($image4 = $request->file('image4')) {
            $destinationPath = 'upload/';
            $profileImage4 = date('YmdHis') . "." . $image4->getClientOriginalExtension();
            $image4->move($destinationPath, $profileImage4);
            $input['image4'] = "$profileImage4";
        }

       
    
        Product::create($input);
     
        return redirect()->route('products.index')
                        ->with('success','Product created successfully.');
    }
     
    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('backend.module.products.show',compact('product'));
    } 
     
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('backend.module.products.edit',compact('product'));
    }
    
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
        ]);
    
          $input = $request->all();

         if ($image1 = $request->file('image1')) {
            $destinationPath = 'upload/';
            $profileImage1 = date('YmdHis') . "." . $image1->getClientOriginalExtension();
            $image1->move($destinationPath, $profileImage1);
            $input['image1'] = "$profileImage1";
        }
           if ($image2 = $request->file('image2')) {
            $destinationPath = 'upload/';
            $profileImage2 = date('YmdHis') . "." . $image2->getClientOriginalExtension();
            $image2->move($destinationPath, $profileImage2);
            $input['image2'] = "$profileImage2";
        }
           if ($image3 = $request->file('image3')) {
            $destinationPath = 'upload/';
            $profileImage3 = date('YmdHis') . "." . $image3->getClientOriginalExtension();
            $image3->move($destinationPath, $profileImage3);
            $input['image3'] = "$profileImage3";
        }
           if ($image4 = $request->file('image4')) {
            $destinationPath = 'upload/';
            $profileImage4 = date('YmdHis') . "." . $image4->getClientOriginalExtension();
            $image4->move($destinationPath, $profileImage4);
            $input['image4'] = "$profileImage4";
        }

       
    
        $product->update($input);
    
        return redirect()->route('products.index')
                        ->with('success','Product updated successfully');
    }
    
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
    
        return redirect()->route('products.index')
                        ->with('success','Product deleted successfully');
    }
}