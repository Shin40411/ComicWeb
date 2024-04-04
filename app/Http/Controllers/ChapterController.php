<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Str;
use App\Models\Chapter;
use App\Models\Truyen;

class ChapterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $truyen = Truyen::orderBy('id_truyen','DESC')->paginate(7);
        // dd($chapter); 
        return view('admincp.chapter.index')->with(compact('truyen'));
    }
 
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $truyen = Truyen::orderBy('id_truyen','DESC')->get();
        return view('admincp.chapter.create')->with(compact('truyen'));
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
            'tuade' => 'required|max:255',
            'slug_chapter' => 'required|max:255',
            'noidung' => 'required',
            'kichhoat' => 'required',
            'truyen_id' => 'required',
            ],
            [
            'tuade.required' => 'Tên chapter truyện chưa có',
            'slug_chapter.required' => 'Slug chapter chưa có',
            'noidung.required' => 'Nội dung chưa có',
            ]
        ); 
        $chapter = new Chapter();
        $chapter->tuade = $data['tuade'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->noidung = $data['noidung'];
        $chapter->kichhoat = $data['kichhoat'];
        $chapter->truyen_id = $data['truyen_id'];
        $chapter->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        $chapter->save();

        $chapter->slug_chapter = Str::slug($request->input('slug_chapter').' '.$chapter->id_chapter, '-');
        $chapter->save();

        return redirect()->back()->with('status','Thêm chapter truyện thành công');
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
        $chapter = Chapter::find($id);
        $truyen = Truyen::orderBy('id_truyen','DESC')->get();
        return view('admincp.chapter.edit')->with(compact('truyen','chapter'));
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
            'tuade' => 'required|max:255',
            'slug_chapter' => 'required|max:255',
            'noidung' => 'required',
            'kichhoat' => 'required',
            'truyen_id' => 'required',
            ],
            [
            'tuade.required' => 'Tên chapter truyện chưa có',
            'slug_chapter.required' => 'Slug chapter chưa có',
            'noidung.required' => 'Nội dung chưa có',
            ]
        ); 
        $chapter = Chapter::find($id);
        $chapter->tuade = $data['tuade'];
        $chapter->slug_chapter = $data['slug_chapter'];
        $chapter->noidung = $data['noidung'];
        $chapter->kichhoat = $data['kichhoat'];
        $chapter->truyen_id = $data['truyen_id'];
        $chapter->updated_at = Carbon::now('Asia/Ho_Chi_Minh');

        $chapter->save();

        $chapter->slug_chapter = Str::slug($request->input('slug_chapter'));
        $chapter->save();
        return redirect()->back()->with('status','Cập nhật chapter truyện thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Chapter::find($id)->delete();  
        return redirect()->back()->with('status','Xóa chapter truyện thành công');
    }
}
