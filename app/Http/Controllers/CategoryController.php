<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\Subcategory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Testing\Constraints\SeeInOrder;

use function Ramsey\Uuid\v1;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $allcategory = Category::where('added_from', session()->get('user_added'))->latest()->get();
        $compact = compact("allcategory");
        return view('Category.view')->with($compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = DB::table('users')->where("id", session()->get('user_added'))->first();
        return view('Category.add', compact("user"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCategoryRequest $request)
    {
        $input = $request->all();
        $input['category_title'] = strtolower($request->category_title);
        $input['added_from'] = session()->get('user_added');
        if ($request->hasFile('add_favicon')) {
            $favicon_file = $request->file('add_favicon');
            $extension = $favicon_file->getClientOriginalExtension();
            $name = rand(10000, 90000) . '.' . $extension;
            $favicon_file->move('./images/', $name);
            $favicon = 200;
        }
        if ($request->hasFile('category_banner')) {
            $category_banner = $request->file('category_banner');
            $extension = $category_banner->getClientOriginalExtension();
            $bannername = rand(10000, 90000) . '.' . $extension;
            $category_banner->move('./images/', $bannername);
            $banner = 200;
        }
        if ($favicon == 200) {
            $input['add_favicon'] = $name;
        }
        if ($banner == 200) {
            $input['category_banner'] = $bannername;
        }
        $variation_section_name = array();
        $variation_section_description = array();
        $arrt_section_name = $request->input("section_name");
        if ($request->has('section_name')) {
            foreach ($request->input('section_name') as $key => $val) {
                $variation_section_name[] = $arrt_section_name[$key];
            }
        }
        $arrt_section_description = $request->input("section_description");
        if ($request->has('section_description')) {
            foreach ($request->input('section_description') as $key => $val) {
                $variation_section_description[] = $arrt_section_description[$key];
            }
        }
        $variation_section_product_title = array();
        $variation_section_product_supplier = array();
        $variation_section_product_image = array();
        $variation_section_product_description = array();
        $variation_section_product_brand = array();
        $variation_section_product_url = array();
        if ($request->has('section_name')) {
            $num = 0;
            foreach ($request->input('section_name') as $key => $val) {
                $arr_section_product_title = $request->input("section_product_title_" . $key) ?: "No Product Title";
                $variation_section_product_title["section_" . $key] = $arr_section_product_title;

                $arr_section_product_supplier = $request->input("section_product_supplier_" . $key) ?: "No Product Supplier";
                $variation_section_product_supplier["section_" . $key] = $arr_section_product_supplier;

                $arr_section_product_description = $request->input("section_product_description_" . $key) ?: "No Product Description";
                $variation_section_product_description["section_" . $key] = $arr_section_product_description;

                $arr_section_product_url = $request->input("section_product_url_" . $key) ?: "No Product URL";
                $variation_section_product_url["section_" . $key] = $arr_section_product_url;

                $arr_section_product_image = $request->file("section_product_image_{$key}");
                $imageNames = array();
                if (!empty($arr_section_product_image)) {
                    foreach ($arr_section_product_image as $index => $image) {
                        $imageName = rand(10000, 90000) . "." . $image->getClientOriginalExtension();
                        $image->move('./images/', $imageName);
                        $imageNames[] = $imageName;
                    }
                }
                $variation_section_product_image["section_" . $key] = $imageNames;

                $arr_section_product_brand = $request->file("section_product_brand_{$key}");
                $brandimageNames = array();
                if (!empty($arr_section_product_brand)) {
                    foreach ($arr_section_product_brand as $index => $image) {
                        $brandimageName = rand(10000, 90000) . "." . $image->getClientOriginalExtension();
                        $image->move('./images/', $brandimageName);
                        $brandimageNames[] = $brandimageName;
                    }
                }
                $variation_section_product_brand["section_" . $key] = $brandimageNames;
            }
        }
        $input['section_name'] = serialize($variation_section_name);
        $input['section_description'] = serialize($variation_section_description);
        $input['section_product_title'] = serialize($variation_section_product_title);
        $input['section_product_supplier'] = serialize($variation_section_product_supplier);
        $input['section_product_image'] = serialize($variation_section_product_image);
        $input['section_product_brand'] = serialize($variation_section_product_brand);
        $input['section_product_url'] = serialize($variation_section_product_url);
        $input['section_product_description'] = serialize($variation_section_product_description);
        $input['category_status'] = 1;
        Category::create($input);
        return response()->json([
            "message" => 200,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        $status = $category->category_status;
        if ($status == 1) {
            Category::where('id', $category->id)->update([
                "category_status" => 2,
            ]);
        } else {
            Category::where('id', $category->id)->update([
                "category_status" => 1,
            ]);
        }
        return response()->json([
            "message" => $category,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        return view('Category.edit', compact("category"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, Category $category)
    {
        $request->validate(
            [
                "category_title" => "unique:categories,category_title,$category->id",
            ]
        );
        $input = $request->all();
        $input['category_title'] = strtolower($request->category_title);
        $input['added_from'] = session()->get('user_added');
        $favicon = "";
        $banner = "";
        if ($request->hasFile('add_favicon')) {
            $favicon_file = $request->file('add_favicon');
            $extension = $favicon_file->getClientOriginalExtension();
            $name = rand(10000, 90000) . '.' . $extension;
            File::delete('./images/' . $category->add_favicon);
            $favicon_file->move('./images/', $name);
            $favicon = 200;
        } else {
            $input['add_favicon'] = $category->add_favicon;
        }
        if ($request->hasFile('category_banner')) {
            $category_banner = $request->file('category_banner');
            $extension = $category_banner->getClientOriginalExtension();
            $bannername = rand(10000, 90000) . '.' . $extension;
            File::delete('./images/' . $category->category_banner);
            $category_banner->move('./images/', $bannername);
            $banner = 200;
        } else {
            $input['category_banner'] = $category->category_banner;
        }
        if ($favicon == 200) {
            $input['add_favicon'] = $name;
        }
        if ($banner == 200) {
            $input['category_banner'] = $bannername;
        }
        $variation_section_name = array();
        $variation_section_description = array();
        $arrt_section_name = $request->input("section_name");
        if ($request->has('section_name')) {
            foreach ($request->input('section_name') as $key => $val) {
                $variation_section_name[] = $arrt_section_name[$key];
            }
        }
        $arrt_section_description = $request->input("section_description");
        if ($request->has('section_description')) {
            foreach ($request->input('section_description') as $key => $val) {
                $variation_section_description[] = $arrt_section_description[$key];
            }
        }
        $variation_section_product_title = array();
        $variation_section_product_supplier = array();
        $variation_section_product_image = array();
        $variation_section_product_description = array();
        $variation_section_product_brand = array();
        $variation_section_product_url = array();
        $unserializecatproductImage = isset($category->section_product_image) ? unserialize($category->section_product_image) : [];
        $unserializecatproductBrand = isset($category->section_product_brand) ? unserialize($category->section_product_brand) : [];
        if ($request->has('section_name')) {
            $num = 0;
            foreach ($request->input('section_name') as $key => $val) {
                $arr_section_product_title = $request->input("section_product_title_" . $key) ?: "No Product Title";
                $variation_section_product_title["section_" . $key] = $arr_section_product_title;

                $arr_section_product_supplier = $request->input("section_product_supplier_" . $key) ?: "No Product Supplier";
                $variation_section_product_supplier["section_" . $key] = $arr_section_product_supplier;

                $arr_section_product_description = $request->input("section_product_description_" . $key) ?: "No Product Description";
                $variation_section_product_description["section_" . $key] = $arr_section_product_description;

                $arr_section_product_url = $request->input("section_product_url_" . $key) ?: "No Product URL";
                $variation_section_product_url["section_" . $key] = $arr_section_product_url;

                $arr_section_product_image = $request->file("section_product_image_{$key}");
                $imageNames = array();
                if (!empty($arr_section_product_image)) {
                    foreach ($arr_section_product_image as $index => $image) {
                        echo "Image:".$index;
                        $imageName = rand(10000, 90000) . "." . $image->getClientOriginalExtension();
                        $image->move('./images/', $imageName);
                        $imageNames[] = $imageName;
                    }
                } else {
                    foreach ($unserializecatproductImage["section_" . $key] as $key => $value) {
                        $imageNames[] = $value;
                    }
                }
                $variation_section_product_image["section_" . $key] = $imageNames;

                $arr_section_product_brand = $request->file("section_product_brand_{$key}");
                $brandimageNames = array();
                if (!empty($arr_section_product_brand)) {
                    foreach ($arr_section_product_brand as $index => $image) {
                        $brandimageName = rand(10000, 90000) . "." . $image->getClientOriginalExtension();
                        $image->move('./images/', $brandimageName);
                        $brandimageNames[] = $brandimageName;
                    }
                } else {
                    foreach ($unserializecatproductBrand["section_" . $key] as $key => $value) {
                        $brandimageNames[] = $value;
                    }
                }
                $variation_section_product_brand["section_" . $key] = $brandimageNames;
            }
        }
        // return $variation_section_product_image;
        // $input['section_name'] = serialize($variation_section_name);
        // $input['section_description'] = serialize($variation_section_description);
        // $input['section_product_title'] = serialize($variation_section_product_title);
        // $input['section_product_supplier'] = serialize($variation_section_product_supplier);
        // $input['section_product_image'] = serialize($variation_section_product_image);
        // $input['section_product_brand'] = serialize($variation_section_product_brand);
        // $input['section_product_url'] = serialize($variation_section_product_url);
        // $input['section_product_description'] = serialize($variation_section_product_description);
        // $category->update($input);
        // return response()->json([
        //     "message" => 200,
        // ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        if (Subcategory::where('category', $category->id)->count() > 0) {
            $subcategories = Subcategory::where('category', $category->id)->get();
            foreach ($subcategories as $subcategory) {
                File::delete(public_path('images/' . $subcategory->add_favicon));
                File::delete(public_path('images/' . $subcategory->subcategory_banner));
                $unserializesubSection = isset($subcategory->section_name) ? unserialize($subcategory->section_name) : [];
                $unserializesubproductImage = isset($subcategory->section_product_image) ? unserialize($subcategory->section_product_image) : [];
                $unserializesubproductBrand = isset($subcategory->section_product_brand) ? unserialize($subcategory->section_product_brand) : [];
                foreach ($unserializesubSection as $key => $subsection) {
                    if (isset($unserializesubproductImage[$subsection][$key])) {
                        File::delete(public_path('images/' . $unserializesubproductImage[$subsection][$key]));
                    }
                    if (isset($unserializesubproductBrand[$subsection][$key])) {
                        File::delete(public_path('images/' . $unserializesubproductBrand[$subsection][$key]));
                    }
                }
            }
            Subcategory::where('category', $category->id)->delete();
            $category->delete();
            return response()->json([
                "message" => 200,
            ]);
        } else {
            File::delete(public_path('images/' . $category->add_favicon));
            File::delete(public_path('images/' . $category->category_banner));
            $unserializecatSection = isset($category->section_name) ? unserialize($category->section_name) : [];
            $unserializecatproductImage = isset($category->section_product_image) ? unserialize($category->section_product_image) : [];
            $unserializecatproductBrand = isset($category->section_product_brand) ? unserialize($category->section_product_brand) : [];
            foreach ($unserializecatSection as $key => $subsection) {
                if (isset($unserializecatproductImage[$subsection][$key])) {
                    File::delete(public_path('images/' . $unserializecatproductImage[$subsection][$key]));
                }
                if (isset($unserializecatproductBrand[$subsection][$key])) {
                    File::delete(public_path('images/' . $unserializecatproductBrand[$subsection][$key]));
                }
            }
            $category->delete();
            return response()->json([
                "message" => 200,
            ]);
        }
    }
    public function details($id)
    {
        $category = Category::findorFail($id);
        return view('Category.details', compact("category"));
    }
}
