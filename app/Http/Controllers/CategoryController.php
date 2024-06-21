<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Category;
use App\Models\Supplier;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('categories.index', [
            'categories' => Category::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if($category->means()->count() > 0){
            return redirect()->route('categories.index')->with([
                'flash.bannerStyle' => 'danger',
                'flash.banner' => 'Não é possível deletar a categoria, pois existem veículos vinculados a ela!'
            ]);
        }

        if($category->suppliers()->count() > 0){
            return redirect()->route('categories.index')->with([
                'flash.bannerStyle' => 'danger',
                'flash.banner' => 'Não é possível deletar a categoria, pois existem fornecedores vinculados a ela!'
            ]);
        }

        $category->delete();
        return redirect()->route('categories.index')->with([
            'flash.bannerStyle' => 'success',
            'flash.banner' => 'Categoria deletada com sucesso!'
        ]);
    }
}
