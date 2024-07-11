<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoriesControler extends Controller
{

    public function index(){
        $data['categories'] = Category::all();
        return view('backend.categories', $data);
    }

    public function create(){
        return view('backend.addEditCategory');
    }

    public function store(Request $request)
    {

        $this->validate($request, [
            'name' => 'required|max:255',
            'details' => 'sometimes',
        ]);

        $category = new Category();
        $category->category_name =  $request->input('name');
        $category->details = $request->input('details');
        $category->status = $request->input('available') == 'yes' ? 1 : 0;
        $category->save();

        Session::flash('success', 'Successfully Inserted');

        return redirect()->back();

    }

    public function edit($id)
    {
        $data['category'] = Category::where('id', $id)->first();

        return view('backend.addEditCategory', $data);
    }

    public function update(Request $request) {
        $id = request()->input('id');

        $this->validate($request, [
            'id' => 'required',
            'name' => 'required|max:255',
            'details' => 'sometimes',
        ]);

        $category = Category::where('id', $id)->first();

        if ($category){
            $category->category_name =  $request->input('name');
            $category->details = $request->input('details');
            $category->status = $request->input('available') == 'yes' ? 1 : 0;
            $category->update();

            Session::flash('success', 'Successfully Updated');

            return redirect()->back();
        }

        Session::flash('success', 'Data not found');

        return redirect()->back();
    }

    public function delete($id) {
        $category = Category::where('id', $id)->first();

        if ($category){
            $category->delete();

            Session::flash('success', 'Successfully Delete');

            return redirect()->back();
        }

        Session::flash('success', 'Data not found');

        return redirect()->back();
    }
}
