<?php

namespace App\Http\Controllers;


use Exception;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $data['products']=Product::paginate(12);

        return view('product.productindex', $data);
    }
    public function productShop()
    {
        $data['products']=Product::with('category')->paginate(12);
        return view('product.productshopgeneral', $data);
    }

    
}
