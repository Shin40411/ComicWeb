<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TuKhoa;


class TuKhoaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
                    //       
        $tukhoatruyen = TuKhoa::select('keyword','id_tukhoa','noibat')->distinct()->groupBy('keyword')->orderBy('id_tukhoa', 'DESC')->paginate(10);
        //dd($tukhoatruyen);
        return view('admincp.tukhoatruyen.index')->with(compact('tukhoatruyen'));
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
        $data = $request->validate(
            [
            'keyword' => 'required',
            'noibat' => 'required',
            ],
            [
            'keyword.required' => 'Không được bỏ trống từ khóa',
            ]
        ); 
        $tukhoatruyen = new TuKhoa();
        $tukhoatruyen->keyword = $data['keyword'];
        $tukhoatruyen->noibat = $data['noibat'];
        $tukhoatruyen->save();
        return redirect()->back()->with('status','Cập nhật từ khóa thành công');
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
        $tukhoa = TuKhoa::find($id);
        return view('admincp.tukhoatruyen.edit')->with(compact('tukhoa'));
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
        $data = $request->validate(
            [
            'keyword' => 'required',
            'noibat' => 'required',
            ],
            [
            'keyword.required' => 'Không được bỏ trống từ khóa',
            ]
        ); 
        $tukhoatruyen = TuKhoa::find($id);

        $tukhoatruyen->keyword = $data['keyword'];
        $tukhoatruyen->noibat = $data['noibat'];
        $tukhoatruyen->save();
        return redirect()->back()->with('status','Cập nhật từ khóa thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        TuKhoa::find($id)->delete();
        return redirect()->back()->with('status', 'Xóa từ khóa thành công');    
    }
}
