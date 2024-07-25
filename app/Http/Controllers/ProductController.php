<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $view;
    public function __construct()
    {
        $this->view = [];
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $objPro = new Product();
        $this->view['listPro'] = $objPro->loadAllDataProductWithPager();
//        dd($this->view['listPro']);
        return view('product.index', $this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objCate= new Category();
        $this->view['listCate'] = $objCate->loadAllDataCategory();
        // dd( $this->view['listCate']);
        return view('product.create' ,$this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

       // validete
      
       $validate = $request->validate(
        [
            'name' => ['required', 'string', 'max:255'],
            'price' => ['required', 'integer', 'max:255'],
            'quantity' => ['required', 'integer', 'max:255'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg', 'max:2048'],
            'category_id' => ['required', 'exists:categories,id'],
        ],
        [
            'name.required' => 'Tên bị trống',
            'name.string' => 'Tên phải là chữ',
            'name.max' => 'Tên quá dài',
    
            'price.required' => 'Giá bị trống',
            'price.integer' => 'Giá phải là số nguyên',
            'price.max' => 'Giá quá lớn',
    
            'quantity.required' => 'Số lượng bị trống',
            'quantity.integer' => 'Số lượng phải là số nguyên',
            'quantity.max' => 'Số lượng quá lớn',
    
            'image.required' => 'Hình ảnh bị trống',
            'image.image' => 'Tệp phải là hình ảnh',
            'image.mimes' => 'Hình ảnh phải là một trong các định dạng: jpeg, png, jpg',
            'image.max' => 'Hình ảnh quá lớn (tối đa 2MB)',
    
            'category_id.required' => 'Danh mục bị trống',
            'category_id.exists' => 'Danh mục không tồn tại',
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