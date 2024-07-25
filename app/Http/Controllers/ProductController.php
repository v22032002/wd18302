<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $view;

    /**
     * Display a listing of the resource.
     */
    public function __construct(){
        $this->view = [];
    }

    public function index()
    {
        $objPro = new Product();
        $this->view['listPro'] = $objPro->loadAllDateProductWithPager();
      //  dd($this->view['listPro']);
        return view('product.index',$this->view);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $objCate = new Category();
        $this->view['listCate'] = $objCate->loadAllDataCategory();
      //  dd($this->view['listCate']);
        return view('product.create',$this->view);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validate = $request->validate(
            [
                'name' => ['required', 'string', 'max:255'],
                'price' => ['required', 'integer', 'min:1'],
                'quantity' => ['required', 'integer', 'min:1'],
                'image' => ['required', 'image', 'mimes:jpg,png,jpeg', 'max:2048'],
                'category_id' => ['required', 'exists:categories,id'],
            ],
            [
                'name.required' => 'Trường tên không được bỏ trống',
                'name.string' => 'Trường tên yêu cầu là ký tự',
                'name.max' => 'Trường tên không được vượt quá 255 ký tự',
                'price.required' => 'Trường giá không được bỏ trống',
                'price.integer' => 'Trường giá yêu cầu là số nguyên',
                'price.min' => 'Trường giá phải lớn hơn hoặc bằng 1',
                'quantity.required' => 'Trường số lượng không được bỏ trống',
                'quantity.integer' => 'Trường số lượng yêu cầu là số nguyên',
                'quantity.min' => 'Trường số lượng phải lớn hơn hoặc bằng 1',
                'image.required' => 'Trường hình ảnh không được bỏ trống',
                'image.image' => 'Trường hình ảnh yêu cầu là định dạng ảnh',
                'image.mimes' => 'Trường hình ảnh yêu cầu định dạng jpg, png hoặc jpeg',
                'image.max' => 'Trường hình ảnh không được vượt quá 2MB',
                'category_id.required' => 'Trường danh mục không được bỏ trống',
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
