<?php

namespace Returntrueir\Categories\Services;

use Illuminate\Http\Request;
use Returntrueir\Categories\Models\Category;
use Returntrueir\Categories\Http\Requests\CategoryRequest;

class CategoryService
{
    public function index(Request $request)
    {
        $perPage = 10;
        if (!is_null($request->per_page))
            $perPage = $request->per_page;

        $categories = Category::sort()
            ->search($request->search)
            ->paginate($perPage)
            ->get();
        return $categories;
    }
    public function store(CategoryRequest $request): Category
    {
        $category = Category::create($request->validated());
        return $category;
    }
    public function update(CategoryRequest $request,Category $category): Category
    {
        $category->update($request->validated());
        return $category;
    }
    public function destroy(Request $request,Category $category)
    {
        $category->delete();

    }
}