<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Variant;
use Illuminate\Support\Facades\Storage;

class AdminController extends Controller
{

  public function tambahKategori(Request $request)
  {
    $validasi = $request->validate([
      'box' => 'numeric'
    ]);

    $data = $request->all();
    $insertKategory = DB::table('categories')->insertGetId([
      'name' => $request->name,
      'panjang' => $request->panjang,
      'lebar' => $request->lebar,
      'box' => $request->box,
      'waste' => $request->waste,
      'created_at' => now()
    ]);

    return redirect('admin/categories')->with('message', 'successfully added category')->with('message_type', 'success');
  }

  // {idCategory}/{idLayout}
  public function addLayoutCategory($idCategory, $idLayout)
  {
    $layout = DB::table('layouts')->find($idLayout);
    if (!$layout) {
      return redirect()->back()->with('message', 'Layout not found')->with('message_type', 'danger');
    }

    $cek = DB::table('variants')->where('category_id', $idCategory)->where('layout_id', $idLayout)->first();
    if ($cek) {
      return redirect()->back()->with('message', 'layout already exists')->with('message_type', 'info');
    }

    $insert = DB::table('variants')->insertGetId([
      'layout_id' => $idLayout,
      'category_id' => $idCategory,
      'created_at' => now()
    ]);
    return redirect()->back()->with('message', 'success add layout for this category')->with('message_type', 'success');
  }

  public function editKategori($id)
  {

    $data = DB::table('categories')->find($id);
    $layoutCategory = $layouts = DB::table('layouts')
      ->leftJoin('variants', 'layouts.id', 'variants.layout_id')
      ->leftJoin('categories', 'variants.category_id', 'categories.id')
      ->select('layouts.*', 'variants.id as id_variant', 'variants.category_id')
      ->where('variants.category_id', $id)
      ->where('variants.id', '!=', null)
      ->get();
    // dd($layoutCategory);

    $layouts = DB::table('layouts')
      ->get();

    // dd($layouts);

    return view('admin.edit-kategori', ['item' => $data, 'layouts' => $layouts, 'layoutCategory' => $layoutCategory]);
  }

  public function destroyVariant($id)
  {
    $variant = DB::table('variants')->where('id', $id)->delete();
    return redirect()->back()->with('message', 'success delete layout for this category')->with('message_type', 'success');
  }

  public function updateKategori(Request $request, $id)
  {
    $validasi = $request->validate([
      'box' => 'numeric'
    ]);

    $data = [
      'name' => $request->name,
      'panjang' => $request->panjang,
      'lebar' => $request->lebar,
      'box' => $request->box,
      'waste' => $request->waste,
      'updated_at' => now()
    ];

    $updatekategori = Category::where('id', $id)->update($data);

    return redirect('admin/categories')->with('message', 'berhasil update data')->with('message_type', 'success');
  }

  public function tambahLayout(Request $request, $id)
  {
    $validasi = $request->validate([
      'image' => 'image|required'
    ]);

    $img = $request->file('image')->store('image/layout', 'public');
    $path = 'storage/' . $img;

    $insertLayout = DB::table('layouts')->insertGetId([
      // 'category_id' => $id,
      'name' => $request->name_layout,
      'image' => $path,
      'waste' => $request->waste,
      'created_at' => now()
    ]);

    return redirect()->back()->with('message', 'success add layout')->with('message_type', 'success');
  }

  public function tambahProduk($idKategori)
  {
    $products = DB::table('products')->where('category_id', $idKategori)->get();

    return view('admin.tambah-product', [
      'kategori_id' => $idKategori,
      'products' => $products
    ]);
  }

  public function storePorduct($idKategori, Request $request)
  {
    $validasi = $request->validate([
      'image' => 'image|required'
    ]);

    // dd($request->all());

    $img = $request->file('image')->store('image/product', 'public');
    $path = 'storage/' . $img;

    $insertProduct = DB::table('products')->insertGetId([
      'category_id' => $idKategori,
      'name' => $request->name,
      'image' => $path,
      'created_at' => now()
    ]);

    return redirect()->back()->with('message', 'berhasil tambah product')->with('message_type', 'success');
  }

  public function storeAsset(Request $request, $idProduct)
  {
    $request->validate([
      'image' => 'required|image',
      'layout_id' => 'required'
    ]);

    // dd($request->all());
    $cekExists = DB::table('assets')->where('layout_id', $request->layout_id)->where('product_id', $idProduct)->exists();
    if ($cekExists) {
      return redirect()->back()->with('message', 'the asset already exists, if you want to change it, please delete it')->with('message_type', 'danger');
    }

    $img = $request->file('image')->store('image/asset', 'public');
    $path = 'storage/' . $img;

    $insert = DB::table('assets')->insertGetId([
      // 'name' => $request->name,
      'image' => $path,
      'layout_id' => $request->layout_id,
      'product_id' => $idProduct,
      'created_at' => now()
    ]);

    return redirect()->back()->with('message', 'successfully added assets')->with('message_type', 'success');
  }

  public function destroyProduct($id)
  {
    $asset = DB::table('products')->find($id);

    Storage::disk('public')->delete($asset->image);

    $delete = DB::table('products')->where('id', $id)->delete();

    return redirect()->back()->with('message', 'success delete asset')->with('message_type', 'success');
  }

  public function tambahAsset($idKategori, $idProduct)
  {
    $modelLayout = Product::where('id', $idProduct)->get();

    $variant = Variant::with('layout', 'category')->where('category_id', $idKategori)->get();

    $assets = DB::table('assets')->where('product_id', $idProduct)->get();

    return view('admin.tambah-asset', [
      'product' => $product,
      'assetItems' => $assets,
      'idProduct' => $idProduct,
      // 'layouts' => $layouts,
      'variants' => $variant
    ]);
  }

  public function destroyAsset($id)
  {
    $asset = DB::table('assets')->find($id);

    Storage::disk('public')->delete($asset->image);

    $delete = DB::table('assets')->where('id', $id)->delete();

    return redirect()->back()->with('message', 'success delete asset')->with('message_type', 'success');
  }
}
