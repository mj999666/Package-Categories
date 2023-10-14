<?php

namespace Returntrueir\Categories\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use Returntrueir\Categories\Http\Controllers\Controller;
use Returntrueir\Categories\Models\Category;
use Returntrueir\Categories\Requests\CategoryRequest;
use Returntrueir\Categories\Services\CategoryService;


class CategoryController extends Controller
{
    public function __construct(private CategoryService $categoryService)
    {}
    public function index(Request $request)
    {
        $categories = $this->categoryService->index($request);
        return view("Categories::index" , compact([
            'categories',
        ]));
    }
    public function create(Request $request)
    {
        return view("Categories::create");
    }
    public function store(CategoryRequest $request)
    {
        $category = $this->categoryService->store($request);
    }
    public function edit(Request $request,Category $category)
    {
        return view("Categories::edit" , compact([
            'category'
        ]));
    }
    public function update(CategoryRequest $request,Category $category)
    {
        $category = $this->categoryService->update($request,$category);
    }
    public function destroy(Request $request,Category $category)
    {
        $this->categoryService->destroy($request,$category);
    }
}