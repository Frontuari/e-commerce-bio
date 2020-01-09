<?php

namespace App\Http\Controllers\API;

use App\Favorite;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Http\Resources\Favorite as FavoriteResource;
class FavoriteController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //$id_usuario=$request->user()->id;
        $id_usuario=1;
        $a=Favorite::where('users_id',$id_usuario)->get();
        return $this->sendResponse($a);        


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
        $favorite = new Favorite;
        $favorite->users_id=1;
        if($request->products_id and $favorite->users_id){
            $favorite->products_id=$request->products_id;
            $favorite->save();
            return $this->sendResponse($favorite);
        }else{
            
            return $this->sendError();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function show(favorite $favorite)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function edit(Favorite $favorite)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Favorite $favorite)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Favorite  $favorite
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $id_usuario=1;
      //  $row_favorite=Favorite::where('users_id',$id_usuario)->where('id',$id)->get();
      
        $res=Favorite::where('id',$id)->where('users_id',$id_usuario)->delete();
        if($res==0){
            return $this->sendError();
        }else{
            $msg='Eliminado de favoritos';
        }
        return $this->sendResponse('',$msg);
        
    }
}
