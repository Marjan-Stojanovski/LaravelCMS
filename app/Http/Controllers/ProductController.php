<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Helpers\ImageStore;
use App\Models\Product;
use App\Models\Role;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $products = Product::all();
        $productsCount = $products->count();
        $data = ['products' => $products, 'productsCount' => $productsCount];
        return view('dashboard.products.index')->with($data);
    }

    public function create()
    {
        $products = Product::all();
        $users = User::all();
        $data = ['products' => $products, 'users' => $users];
        return view('dashboard.products.create')->with($data);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|max:255',
            'price' => 'required',
            'quantity' => 'required',
            'image' => 'required',
            'user_id' => 'required'
        ]);

        if ($validator->fails()) {
            return redirect()->route('products.create')
                ->withErrors($validator)
                ->withInput();
        }

        $name = $request->get('name');
        $price = $request->get('price');
        $quantity = $request->get('quantity');
        $description = $request->get('description');
        $image = $request->get('image');
        $user_id = $request->get('user_id');

        $imageObj = new ImageStore($request, 'products');
        $image = $imageObj->imageStore();

        Product::create([
        'name' => $name,
        'price' => $price,
        'quantity' => $quantity,
        'description' => $description,
        'image' => $image,
        'user_id' => $user_id
        ]);

        $products = Product::all();
        $users = User::all();
        $productsCount = $products->count();
        $data = ['products' => $products, 'users' => $users, 'productsCount' => $productsCount];
        return view('dashboard.products.index')->with($data);

    }

}
