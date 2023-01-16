<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function create(){
        // return view('category.add');
        // $data = Category::all();
        // foreach ($data as $value) {
        //     if($value['parent_id']==0) {
        //         echo "<option>" . $value['name'] . "</option>";
        //         foreach ($data as $value2) {
        //             if($value2['parent_id']==$value['id']) {
        //                 echo "<option>" . $value2['name'] . "</option>";
    
        //                 foreach ($data as $value3) {
        //                     if($value3['parent_id']==$value2['id']) {
        //                         echo "<option>" . $value3['name'] . "</option>";
        //                     }
        //                 }
        //             }
                    
        //         }
        //     }
            
        // }
        $this->catagoryRecusive(0);
    }
    function catagoryRecusive($id) {
        $data = Category::all();
        foreach ($data as $value) {
            if($value['parent_id']==$id) {
                echo "<option>" . $value['name'] . "</option>";
                $this->catagoryRecusive($value['id']);
            }
        }
    }
    public function index(){
        return view('category.index');
    }
}
