<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\colorcategory;
use App\Models\lengthcategory;
class category extends Controller
{
   
   public function addcolorcategory(Request $request){

         $colorcategory= new colorcategory();
        $colorcategory->name=$request->name ;
        $colorcategory->value=$request->name ;
       $colorcategory->save();
       return redirect()->back()
                        ->with('success1','color category created successfully.');

   }
    public function addlengthcategory(Request $request){

         $lengthcategory= new lengthcategory();
        $lengthcategory->name=$request->name ;
        $lengthcategory->value=$request->name ;
       $lengthcategory->save();
       return redirect()->back()
                        ->with('success2','length category created successfully.');

   }
    public function showcategory(){
         $colorcategories=colorcategory::all();
         $lengthcategories=lengthcategory::all();
      return view('backend.module.categorys.allcategorys',compact('colorcategories' ,'lengthcategories'));
    }

   public function deletecolorcategory($id) {

                      $colorcategory = colorcategory::find($id);
                      $colorcategory->delete();
                      return redirect() -> route('showcategory')->with('success1','color category deleted successfully.');; 
                     }
    public function deletelengthcategory($id) {


                      $lengthcategory = lengthcategory::find($id);
                      $lengthcategory->delete();
                      return redirect() -> route('showcategory')->with('success2','length category deleted successfully.');; 
                     }

}
