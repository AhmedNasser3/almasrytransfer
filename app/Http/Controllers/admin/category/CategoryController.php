<?php

namespace App\Http\Controllers\admin\category;

use App\Http\Controllers\Controller;
use App\Models\admin\category\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('admin.pages.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        Category::create($data);
        return redirect()->route('home.page')->with('success', 'تم إنشاء القسم بنجاح');
    }

    public function edit($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        return view('admin.pages.category.edit', compact('category'));
    }

    public function update(Request $request, $categoryId)
    {
        $data = $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $category = Category::findOrFail($categoryId);
        $category->update($data);
        return redirect()->route('home.page')->with('success', 'تم تحديث القسم بنجاح');
    }

    public function delete($categoryId)
    {
        $category = Category::findOrFail($categoryId);
        $category->delete();
        return redirect()->route('home.page')->with('success', 'تم حذف القسم بنجاح');
    }
}