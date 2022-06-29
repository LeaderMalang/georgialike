<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToursController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item = new Items;
        $item->name = strip_tags($request->item_name);
        $item->description = strip_tags($request->item_description);
        $item->price = strip_tags($request->item_price);
        $item->prepare_time = strip_tags($request->prepare_time);
        $item->category_id = strip_tags($request->category_id);
        if($request->hasFile('item_image')){
            $item->image=$this->saveImageVersions(
                $this->imagePath,
                $request->item_image,
                [
                    ['name'=>'large','w'=>590,'h'=>400],
                    //['name'=>'thumbnail','w'=>300,'h'=>300],
                    ['name'=>'medium','w'=>295,'h'=>200],
                    ['name'=>'thumbnail','w'=>200,'h'=>200]
                ]
            );
        }

        $item->save();

        if (count($request->course)>0) {
            foreach($request->course as $item => $value)
                $data[$value]=array(
                    'nsu_id'=>$nsu_id,
                    'course'=>$request->course[$item],
                    'section'=>$request->section[$item],
                    'class_start'=>$request->class_start[$item],
                    'class_end'=>$request->class_end[$item],
                );
                Course::insert($data);
        }

        return redirect()->route('items.index')->withStatus(__('Item successfully updated.'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($tour)
    {
        $tour->delete();

        return redirect()->route('items.index')->withStatus(__('Item successfully deleted.'));
    }
}
