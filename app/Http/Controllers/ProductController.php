<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::latest()->paginate(5);

        if (auth()->user()->role == 'Administrator') {
            $products = Product::latest()->paginate(5);
            return view('products.index', compact('products'))
                ->with('i', (request()->input('page', 1) - 1) * 5);
        } else {
            return back();
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'suhu' => 'required',
            'vaksin1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vaksin2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vaksin3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'covid' => 'required',
        ]);

        $input = $request->all();

        // ($vaksin1 = $request->file('vaksin1')) {
        //     $destinationPath = 'vaksin/';
        //     $profileImage = date('YmdHis') . "." . $vaksin1->getClientOriginalExtension();
        //     $vaksin1->move($destinationPath, $profileImage);
        //     $input['vaksin1'] = "$profileImage";
        // }
        // ($vaksin2 = $request->file('vaksin2')) {
        //     $destinationPath = 'vaksin/';
        //     $profileImage = date('YmdHis') . "." . $vaksin2->getClientOriginalExtension();
        //     $vaksin2->move($destinationPath, $profileImage);
        //     $input['vaksin2'] = "$profileImage";
        // }
        // ($vaksin3 = $request->file('vaksin3')) {
        //     $destinationPath = 'vaksin/';
        //     $profileImage = date('YmdHis') . "." . $vaksin3->getClientOriginalExtension();
        //     $vaksin3->move($destinationPath, $profileImage);
        //     $input['vaksin3'] = "$profileImage";
        // }

        $input['vaksin1'] = $this->storeImage($request->file('vaksin1'));
        $input['vaksin2'] = $this->storeImage($request->file('vaksin2'));
        $input['vaksin3'] = $this->storeImage($request->file('vaksin3'));

        Product::create($input);

        return redirect()->route('products.index')
            ->with('success', 'Data Berhasil Dibuat!');
    }

    public function storeImage($file)
    {
        $namafile = md5_file($file->getRealPath());
        $getExtension = $file->guessExtension();
        $fullNameFile = $namafile . '.' . $getExtension;
        $file->move(base_path('\storage\app\public\image'), $fullNameFile);

        return $fullNameFile;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'name' => 'required',
            'kelas' => 'required',
            'alamat' => 'required',
            'suhu' => 'required',
            'vaksin1' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vaksin2' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'vaksin3' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'covid' => 'required',
        ]);

        $input = $request->all();

        if ($vaksin1 = $request->file('vaksin1')) {
            $destinationPath = 'vaksin/';
            $profileImage = date('YmdHis') . "." . $vaksin1->getClientOriginalExtension();
            $vaksin1->move($destinationPath, $profileImage);
            $input['vaksin1'] = "$profileImage";
        }
        if ($vaksin2 = $request->file('vaksin2')) {
            $destinationPath = 'vaksin/';
            $profileImage = date('YmdHis') . "." . $vaksin2->getClientOriginalExtension();
            $vaksin2->move($destinationPath, $profileImage);
            $input['vaksin1'] = "$profileImage";
        }
        if ($vaksin3 = $request->file('vaksin3')) {
            $destinationPath = 'vaksin/';
            $profileImage = date('YmdHis') . "." . $vaksin3->getClientOriginalExtension();
            $vaksin3->move($destinationPath, $profileImage);
            $input['vaksin3'] = "$profileImage";
        } else {
            unset($input['vaksin1']);
            unset($input['vaksin2']);
            unset($input['vaksin3']);
        }

        $product->update($input);

        return redirect()->route('products.index')
            ->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect()->route('products.index')
            ->with('success', 'Data Berhasil Dihapus!');
    }
}
