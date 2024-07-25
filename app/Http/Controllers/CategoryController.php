<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $view;
    public function __construct()
    {
        $this->view = [];
    }
    public function index()
    {
        $objCate= new Category();
        $this->view['listCate'] = $objCate->loadAllDataCategory();
        // dd( $this->view['listCate']);
        return view('category.index',$this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
            ],
            [
                'name.required' => 'Tên danh mục không được bỏ trống',
                'name.string' => 'Tên danh mục phải là một chuối',
                'name.max' => 'Tên danh mục không quá 255 ký tự',
                ]
        );
            
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}