<?php

namespace App\Http\Controllers\Myhomeprofile;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;

class MyTestController extends Controller
{
    //

    
    public function exper()
    {
        
        $categories = Category::all();
        return view('categories.category')->with('categories',$categories);
    }
       public function test1()
       {
          
         /*  $arr=[];
           $arr['m']='mohamed';
           $arr['g']='gamal';
           $arr['c']='mahmoud';

        return view('objective')->with('arr',$arr);*/

        $users=User::get();
        return response()->json($users);
        
       }

       public function test2()
       {
         

        $users=User::get();
        return response()->json($users);
        
       }


       public function index()
       {
           
           $categories = Category::all();
           return view('/layouts.index')->with('categories',$categories);
       }


  public function destroy($id)
  {
    $category = Category::find($id);
    $category->delete();

    return redirect("myhomeprofile/cat");
  }
}
