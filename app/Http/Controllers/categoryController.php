<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    public function index()
    {
        $data['title'] = 'Category';
        $data['user'] = Auth::user();  
        $categories = DB::table('categories')->get();   
        return view('pages.pos.posCategory', $data, ['categories' => $categories] );
    }
    public function store(Request $request)
{
	
	DB::table('categories')->insert([
		'category_name' => $request->category_name,

	]);
	
	return redirect('/categoryeditor');
 
}
    public function hapus($id)
{
	DB::table('categories')->where('id',$id)->delete();
		
	return redirect('/categoryeditor');
}
}
