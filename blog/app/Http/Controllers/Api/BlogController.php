<?php

namespace App\Http\Controllers\Api;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
          $blog = DB::table('blog')->get();

        $result = $blog->toArray();
        if ($result  ===  []) {
            $retorno = array('retorno' => 'Meu blog!');
            return json_encode($retorno);   
        }else{
            return json_encode($result);
        
 


        }
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        DB::table('users')->insert(
    ['email' => 'john@example.com', 'votes' => 0]
);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $blog = DB::table('blog')->find($id);

        $result = $blog->toArray();
        if ($result  ===  []) {
            $retorno = array('retorno' => 'Meu blog!');
            return json_encode($retorno);   
        }else{
            return json_encode($result);
        
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
        DB::table('users')
            ->where('id', 1)
            ->update(['votes' => 1]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('users')->delete();

DB::table('users')->where('votes', '>', 100)->delete();
    }
}
