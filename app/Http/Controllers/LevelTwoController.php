<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreLevel_TwoRequest;
use App\Http\Requests\UpdateLevel_TwoRequest;
use App\Models\Level_Two;
use App\Models\Subcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Monolog\Level;
use Twilio\TwiML\Voice\Leave;

class LevelTwoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $alllevel_two = Level_Two::where('added_from', session()->get('user_added'))->latest()->get();
        $array_data = [];
        $array_category = [];
        foreach ($alllevel_two as $level_two) {
            $subcatname = Subcategory::where('id', $level_two->subcategory)->first();
            if (!empty($subcatname)) {
                $array_data[$subcatname->id] = $subcatname;
            } else {
                continue;
            }
        }
        foreach ($array_data as $key => $data) {
            $category = Category::where('id', $key)->first();
            if (!empty($category)) {
                $array_category[$key] = $category;
            } else {
                continue;
            }
        }
        $compact = compact("alllevel_two", "array_data", "array_category");
        return view('LevelTwo.view')->with($compact);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $user = DB::table('users')->where("id", session()->get('user_added'))->first();
        $allsubcategory = Subcategory::where('added_from', session()->get('user_added'))->where('subcategory_status', 1)->latest()->get();
        return view('LevelTwo.add', compact("user", "allsubcategory"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreLevel_TwoRequest $request)
    {
        $input = $request->all();
        $input['level_two_title'] = strtolower($request->level_two_title);
        $input['added_from'] = session()->get('user_added');
        if ($request->hasFile('add_favicon')) {
            $favicon_file = $request->file('add_favicon');
            $extension = $favicon_file->getClientOriginalExtension();
            $name = rand(10000, 90000) . '.' . $extension;
            $favicon_file->move('./images/', $name);
            $favicon = 200;
        }
        if ($request->hasFile('level_two_banner')) {
            $level_two_banner = $request->file('level_two_banner');
            $extension = $level_two_banner->getClientOriginalExtension();
            $bannername = rand(10000, 90000) . '.' . $extension;
            $level_two_banner->move('./images/', $bannername);
            $banner = 200;
        }
        if ($favicon == 200) {
            $input['add_favicon'] = $name;
        }
        if ($banner == 200) {
            $input['level_two_banner'] = $bannername;
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
            foreach ($request->input('section_name') as $key => $val) {
                $arr_section_product_title = $request->input("section_product_title_" . $key) ?: "No Product Title";
                $variation_section_product_title[$val] = $arr_section_product_title;

                $arr_section_product_supplier = $request->input("section_product_supplier_" . $key) ?: "No Product Supplier";
                $variation_section_product_supplier[$val] = $arr_section_product_supplier;

                $arr_section_product_description = $request->input("section_product_description_" . $key) ?: "No Product Description";
                $variation_section_product_description[$val] = $arr_section_product_description;

                $arr_section_product_url = $request->input("section_product_url_" . $key) ?: "No Product URL";
                $variation_section_product_url[$val] = $arr_section_product_url;

                $arr_section_product_image = $request->file("section_product_image_{$key}");
                $imageNames = array();
                if (!empty($arr_section_product_image)) {
                    foreach ($arr_section_product_image as $index => $image) {
                        $imageName = rand(10000, 90000) . "_{$val}_{$index}." . $image->getClientOriginalExtension();
                        $image->move('./images/', $imageName);
                        $imageNames[] = $imageName;
                    }
                }
                $variation_section_product_image[$val] = $imageNames;

                $arr_section_product_brand = $request->file("section_product_brand_{$key}");
                $brandimageNames = array();
                if (!empty($arr_section_product_brand)) {
                    foreach ($arr_section_product_brand as $index => $image) {
                        $brandimageName = rand(10000, 90000) . "_{$val}_{$index}." . $image->getClientOriginalExtension();
                        $image->move('./images/', $brandimageName);
                        $brandimageNames[] = $brandimageName;
                    }
                }
                $variation_section_product_brand[$val] = $brandimageNames;
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
        $input['level_two_status'] = 1;
        Level_Two::create($input);
        return response()->json([
            "message" => 200,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $level_two = Level_Two::where('id', $id)->first();
        $status = $level_two->level_two_status;
        if ($status == 1) {
            Level_Two::where('id', $level_two->id)->update([
                "level_two_status" => 2,
            ]);
        } else {
            Level_Two::where('id', $level_two->id)->update([
                "level_two_status" => 1,
            ]);
        }
        return response()->json([
            "message" => $level_two,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $level_two = Level_Two::where('id', $id)->first();
        $user = DB::table('users')->where("id", session()->get('user_added'))->first();
        $allsubcategory = Subcategory::where('added_from', session()->get('user_added'))->where('subcategory_status', 1)->latest()->get();
        return view('LevelTwo.edit', compact("user", "allsubcategory", "level_two"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $level_two = Level_Two::where('id', $id)->first();
        $request->validate(
            [
                "level_two_title" => "unique:level__twos,level_two_title,$level_two->id",
            ]
        );
        $input = $request->all();
        $input['level_two_title'] = strtolower($request->level_two_title);
        $input['added_from'] = session()->get('user_added');
        $favicon = "";
        $banner = "";
        if ($request->hasFile('add_favicon')) {
            $favicon_file = $request->file('add_favicon');
            $extension = $favicon_file->getClientOriginalExtension();
            $name = rand(10000, 90000) . '.' . $extension;
            File::delete('./images/' . $level_two->add_favicon);
            $favicon_file->move('./images/', $name);
            $favicon = 200;
        } else {
            $input['add_favicon'] = $level_two->add_favicon;
        }
        if ($request->hasFile('level_two_banner')) {
            $level_two_banner = $request->file('level_two_banner');
            $extension = $level_two_banner->getClientOriginalExtension();
            $bannername = rand(10000, 90000) . '.' . $extension;
            File::delete('./images/' . $level_two->level_two_banner);
            $level_two_banner->move('./images/', $bannername);
            $banner = 200;
        } else {
            $input['level_two_banner'] = $level_two->level_two_banner;
        }
        if ($favicon == 200) {
            $input['add_favicon'] = $name;
        }
        if ($banner == 200) {
            $input['level_two_banner'] = $bannername;
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
        $unserializecatproductImage = isset($level_two->section_product_image) ? unserialize($level_two->section_product_image) : [];
        $unserializecatproductBrand = isset($level_two->section_product_brand) ? unserialize($level_two->section_product_brand) : [];
        if ($request->has('section_name')) {
            foreach ($request->input('section_name') as $key => $val) {
                $arr_section_product_title = $request->input("section_product_title_" . $key) ?: "No Product Title";
                $variation_section_product_title[$val] = $arr_section_product_title;

                $arr_section_product_supplier = $request->input("section_product_supplier_" . $key) ?: "No Product Supplier";
                $variation_section_product_supplier[$val] = $arr_section_product_supplier;

                $arr_section_product_description = $request->input("section_product_description_" . $key) ?: "No Product Description";
                $variation_section_product_description[$val] = $arr_section_product_description;

                $arr_section_product_url = $request->input("section_product_url_" . $key) ?: "No Product URL";
                $variation_section_product_url[$val] = $arr_section_product_url;

                $arr_section_product_image = $request->file("section_product_image_{$key}");
                $imageNames = array();
                if (!empty($arr_section_product_image)) {
                    foreach ($arr_section_product_image as $index => $image) {
                        if (isset($image)) {
                            $imageName = rand(10000, 90000) . "_{$val}_{$index}." . $image->getClientOriginalExtension();
                            $image->move('./images/', $imageName);
                            $imageNames[] = $imageName;
                        } else {
                            foreach ($unserializecatproductImage as $brand_value) {
                                if (strpos($brand_value, "_" . $index . ".")) {
                                    $imageNames[] = $brand_value;
                                }
                            }
                        }
                    }
                } else {
                    foreach ($unserializecatproductImage as $k => $image) {
                        foreach ($image as $get_val) {
                            $imageNames[] = $get_val;
                        }
                    }
                }
                $variation_section_product_image[$val] = $imageNames;

                $arr_section_product_brand = $request->file("section_product_brand_{$key}");
                $brandimageNames = array();
                if (!empty($arr_section_product_brand)) {
                    foreach ($arr_section_product_brand as $index => $image) {
                        if (isset($image)) {
                            $brandimageName = rand(10000, 90000) . "_{$val}_{$index}." . $image->getClientOriginalExtension();
                            $image->move('./images/', $brandimageName);
                            $brandimageNames[] = $brandimageName;
                        } else {
                            foreach ($unserializecatproductBrand as $brand_value) {
                                if (strpos($brand_value, "_" . $index . ".")) {
                                    $brandimageNames[] = $brand_value;
                                }
                            }
                        }
                    }
                } else {
                    foreach ($unserializecatproductBrand as $k => $image) {
                        foreach ($image as $get_val) {
                            $brandimageNames[] = $get_val;
                        }
                    }
                }
                $variation_section_product_brand[$val] = $brandimageNames;
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
        $level_two->update($input);
        return response()->json([
            "message" => 200,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $level_two = Level_Two::findorFail($id);
        File::delete(public_path('images/' . $level_two->add_favicon));
        File::delete(public_path('images/' . $level_two->level_two_banner));
        $unserializelevelSection = isset($level_two->section_name) ? unserialize($level_two->section_name) : [];
        $unserializelevelproductImage = isset($level_two->section_product_image) ? unserialize($level_two->section_product_image) : [];
        $unserializelevelproductBrand = isset($level_two->section_product_brand) ? unserialize($level_two->section_product_brand) : [];
        foreach ($unserializelevelSection as $key => $subsection) {
            if (isset($unserializelevelproductImage[$subsection][$key])) {
                File::delete(public_path('images/' . $unserializelevelproductImage[$subsection][$key]));
            }
            if (isset($unserializelevelproductBrand[$subsection][$key])) {
                File::delete(public_path('images/' . $unserializelevelproductBrand[$subsection][$key]));
            }
        }
        Level_Two::where('id', $id)->delete();
        return response()->json([
            "message" => 200,
        ]);
    }
    public function details($id)
    {
        $level_two = Level_Two::findorFail($id);
        return view('LevelTwo.details', compact("level_two"));
    }
}
