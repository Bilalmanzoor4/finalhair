<?php
  
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\User;
use App\Models\lengthcategory;
use App\Models\colorcategory;
  
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {     
        return view('index');
    } 
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminHome()
    {
            echo "i am admin ";
       // return view('adminHome');
    }
  
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function managerHome()
    {
         $product_c= Product::count();
         $user_c= User::count();   
         $lengthcategory_c= lengthcategory::count();   
         $colorcategory_c= colorcategory::count();            
        return view('backend.module.index',compact('product_c','user_c','lengthcategory_c','colorcategory_c'));
    }
}