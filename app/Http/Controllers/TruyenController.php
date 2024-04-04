<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;
use Carbon\Carbon;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\ThuocDanh;
use App\Models\Rating;


class TruyenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $lietke_truyen = Truyen::with('thuocnhieudanhmuctruyen')->orderBy('id_truyen','DESC')->paginate(5);
        
        return view('admincp.truyen.index')->with(compact('lietke_truyen'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc', 'DESC')->get();
        return view('admincp.truyen.create')->with(compact('danhmuc'));
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
            'tentruyen' => 'required|unique:truyen|max:255',
            'tenkhac' => 'max:255',
            'tacgia' => 'required|unique:truyen|max:100',
            'slug_truyen' => 'required|unique:truyen|max:255',
            'hinhanh' => 'required|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=1000,max_height=1000',
            'tomtat' => 'required',
            'truyennoibat' => 'required',
            'tinhtrang'   => 'required',
            'kichhoat' => 'required',
            'danhmuc' => 'required',
            ],
            [
            'tentruyen.unique' => 'Tên truyện đã có, xin điền tên khác',
            'tacgia.unique' => 'Tên tác giả đã có, xin điền tên khác',
            'slug_truyen.unique' => 'Slug truyện đã có, xin điền slug khác',
            'slug_truyen.required' => 'Slug truyện chưa có',
            'hinhanh.required' => 'Hình ảnh truyện chưa có',
            'tentruyen.required' => 'Tên truyện chưa có',
            'tacgia.required' => 'Tên tác giả chưa có',
            'tomtat.required' => 'Tóm tắt truyện chưa có',
            ]
        ); 
        $data = $request->all();
        // dd($data['danhmuc']);
        $truyen = new Truyen();
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->tenkhac = $data['tenkhac'];
        $truyen->tacgia = $data['tacgia'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->truyen_noibat = $data['truyennoibat'];
        $truyen->tinh_trang = $data['tinhtrang'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->theloai_id = $data['danhmuc'];
        
        $truyen->created_at = Carbon::now('Asia/Ho_Chi_Minh');

        foreach($data['danhmuc'] as $key => $danh)
        {
            $truyen->theloai_id = $danh[0];
        }

        $get_image = $request->hinhanh;
        $path = 'public/uploads/truyen/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $truyen->hinhanh = $new_image;

        $truyen->save();

        $truyen->thuocnhieudanhmuctruyen()->attach($data['danhmuc']);

        return redirect()->back()->with('status','Thêm truyện thành công');
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
        $truyen = Truyen::find($id);
        $thuocdanhmuc = $truyen->thuocnhieudanhmuctruyen;
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc', 'DESC')->get();
        return view('admincp.truyen.edit')->with(compact('truyen','danhmuc','thuocdanhmuc'));
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
            'tentruyen' => 'required|max:255',
            'tenkhac' => 'max:255',
            'tacgia' => 'required|max:100',
            'slug_truyen' => 'required|max:255',
            'tomtat' => 'required',
            'truyennoibat' => 'required',
            'tinhtrang'   => 'required',
            'kichhoat' => 'required',
            'danhmuc' => 'required',
            ],
            [
            'slug_truyen.required' => 'Slug truyện chưa có',
            'tentruyen.required' => 'Tên truyện chưa có',
            'tacgia.required' => 'Tên tác giả chưa có',
            'tomtat.required' => 'Tóm tắt truyện chưa có',
            ]
        ); 
        $truyen = Truyen::find($id);
        $truyen->tentruyen = $data['tentruyen'];
        $truyen->tenkhac = $data['tenkhac'];
        $truyen->tacgia = $data['tacgia'];
        $truyen->slug_truyen = $data['slug_truyen'];
        $truyen->tomtat = $data['tomtat'];
        $truyen->truyen_noibat = $data['truyennoibat'];
        $truyen->tinh_trang = $data['tinhtrang'];
        $truyen->kichhoat = $data['kichhoat'];
        $truyen->theloai_id = $data['danhmuc'];

        $truyen->updated_at = Carbon::now('Asia/Ho_Chi_Minh');
        foreach($data['danhmuc'] as $key => $danh)
        {
            $truyen->theloai_id = $danh[0];
        }

        $get_image = $request->hinhanh;
        if($get_image){
        $path = 'public/uploads/truyen/'.$truyen->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        $path = 'public/uploads/truyen/';
        $get_name_image = $get_image->getClientOriginalName();
        $name_image = current(explode('.',$get_name_image));
        $new_image = $name_image.rand(0,99).'.'.$get_image->getClientOriginalExtension();
        $get_image->move($path,$new_image);

        $truyen->hinhanh = $new_image;
        }
        $truyen->save();

        $truyen->thuocnhieudanhmuctruyen()->sync($data['danhmuc']);
        return redirect()->back()->with('status','Cập nhật truyện thành công');
    }

    public function truyennoibat(Request $request)
    {
        $data = $request->all();
        $truyen = Truyen::find($data['truyen_id']);
        $truyen->truyen_noibat = $data['truyennoibat'];
        $truyen->save();
    } 

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $truyen = Truyen::find($id);
        $path = 'public/uploads/truyen/'.$truyen->hinhanh;
        if(file_exists($path)){
            unlink($path);
        }
        ThuocDanh::whereIn('truyen_id',[$truyen->id_truyen])->delete();
        Chapter::whereIn('truyen_id',[$truyen->id_truyen])->delete();
        
        $truyen->delete();
        return redirect()->back()->with('status','Xóa truyện thành công');
    }

}
