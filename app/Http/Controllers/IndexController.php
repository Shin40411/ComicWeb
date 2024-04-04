<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DanhmucTruyen;
use App\Models\Truyen;
use App\Models\ThuocDanh;
use App\Models\Comment;
use App\Models\Chapter;
use App\Models\TuKhoa;
use App\Models\Rating;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
session_start();


class IndexController extends Controller
{
    public function timkiem_ajax(Request $request){
        $data = $request->all();
        $data_key = $data['keywords'];
        
        if($data_key){
            $truyen = Truyen::where('kichhoat',0)->where('tentruyen','LIKE','%'.$data['keywords'].'%')->orWhere('tacgia','LIKE','%'.$data['keywords'].'%')->orWhere('tomtat','LIKE','%'.$data['keywords'].'%')->get();
            
            $output = '
            <div class="dropdown">
            <ul class="dropdown-menu listtruyen" style="display:block;">
            ';

            foreach($truyen as $key => $tr){

                $img = asset('/public/uploads/truyen/' . $tr->hinhanh );
                $output .= '
                  <li class="li_search_ajax">
                  <a href="' . url('xem-truyen/'.$tr->slug_truyen) . '">
                  <img src="' . $img . '">
                  <h3>'.$tr->tentruyen.'</h3> ';
            foreach ($tr->chapter->reverse()->take(1) as $ch) {
                    $output .= '<h4><i>'.$ch->tuade.'</i>';
                }
                 $output .= '  
                  <i><b>'.$tr->tacgia.'</b></i>';
                  $output .= '<i>';
            foreach ($tr->thuocnhieudanhmuctruyen as $da){
                    $output .= ' '.$da->tieudedanhmuc.',';
                }
                $output .= '</i>';
                  $output .= '  
                  </h4>
                  </a>
                  </li>
                ';
            }
            $output .= '
                        </ul>
                        </div>
                        ';
            echo $output;  
        }
    }

    public function login_customer(){
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();  
        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();
        $meta_title = "Đăng nhập | Đăng ký - ThemTruyen";
        if(session()->has('customer_id')){
            return redirect()->back();
        }else{
            return view('pages.login')->with(compact('meta_title','danhmuc','tukhoatruyen'));
        }
    }

    public function dang_nhap(Request $request){
        $email = $request->email_account;
        $password = md5($request->password_account);
        $result = Customer::where('customer_email',$email)->where('customer_password',$password)->first();
        if($result){
        Session::put('customer_id',$result->customer_id);   
        Session::put('customer_name',$result->customer_name);   
        Session::put('customer_email',$result->customer_email);   
            return redirect('/');
        }else{
            return redirect()->back();
        }
    }

    public function logout_customer(){
        Session::flush();
       return redirect()->back();
    }

    public function add_customer(Request $request){
        $data = $request->all();

        $customer = new Customer();

        $customer->customer_name = $data['customer_name'];
        $customer->customer_email = $data['customer_email'];
        $customer->customer_password = md5($data['customer_password']);
        $customer->customer_phone = $data['customer_phone'];

        $customer->save();
        $customer_id = $customer->customer_id;
        Session::put('customer_id',$customer_id);
        Session::put('customer_name',$request->customer_name);
        Session::put('customer_name',$request->customer_email);
        return redirect('/');
    }

    public function home(){
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();  

        $truyen = Truyen::with('chapter')->orderBy('id_truyen','DESC')->where('kichhoat',0)->paginate(32);

        $truyentranh = Truyen::with('chapter')->orderBy('luotxem','DESC')->where('truyen_noibat',1)->where('kichhoat',0)->get();

        $truyentranhhot = Truyen::with('chapter')->orderBy('luotxem','DESC')->where('truyen_noibat',2)->where('kichhoat',0)->get();

        $slide_truyen = Truyen::orderBy('luotxem','DESC')->where('kichhoat',0)->take(8)->get();

        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();

        $comments = Comment::orderBy('id_comment', 'DESC')->take(10)->get();

        $meta_title = "Đọc truyện miễn phí - ThemTruyen";
        
        return view('pages.home')->with(compact('danhmuc', 'truyen','truyentranh', 'truyentranhhot','slide_truyen', 'comments','tukhoatruyen','meta_title'));
    }

    public function truyenhot(){
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();  
        
        $truyen = Truyen::with('chapter')->orderBy('luotxem','DESC')->where('truyen_noibat',2)->where('kichhoat',0)->paginate(32);
        
        $truyentranh = Truyen::with('chapter')->orderBy('luotxem','DESC')->where('truyen_noibat',1)->where('kichhoat',0)->get();
        
        $truyentranhhot = Truyen::with('chapter')->orderBy('luotxem','DESC')->where('truyen_noibat',2)->where('kichhoat',0)->get();
        
        $slide_truyen = Truyen::orderBy('luotxem','DESC')->where('kichhoat',0)->take(8)->get();

        $comments = Comment::orderBy('id_comment', 'DESC')->take(10)->get();
        
        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();
        
        $meta_title = "Truyện tranh hot được xem nhiều - ThemTruyen";

        return view('pages.truyenhot')->with(compact('danhmuc','truyen','truyentranh','comments','truyentranhhot','slide_truyen','tukhoatruyen','meta_title'));
    }

    public function danhmuc($slug){
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();

        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();

        $danhmuc_id = DanhmucTruyen::with('nhieutruyen')->where('slug_danhmuc',$slug)->first();

        $danhmuctruyen = DanhmucTruyen::find($danhmuc_id->id_danhmuc);

        $truyendanhpage = $danhmuctruyen->nhieutruyen()->paginate(12);
      
        $slide_truyen = Truyen::orderBy('id_truyen','DESC')->where('kichhoat',0)->take(8)->get();

        $slugdanhmuc = $danhmuc_id->slug_danhmuc;

        $tieudedanhmuc = $danhmuc_id->tieudedanhmuc;

        $motadanhmuc = $danhmuc_id->motadanhmuc;

        if(isset($_GET['sort_by']))
        {
            $sort_by = $_GET['sort_by'];

            if($sort_by == 'truyen_hot')
            {
                $truyendanhpage = $danhmuctruyen->nhieutruyen()->where('truyen_noibat',2)->where('kichhoat',0)->paginate(8)->appends(request()->query());
                $meta_title = $tieudedanhmuc." - Truyện hot"." - ThemTruyen";
            } elseif($sort_by == 'truyen_noi_bat') {
                $truyendanhpage = $danhmuctruyen->nhieutruyen()->where('truyen_noibat',1)->where('kichhoat',0)->paginate(8)->appends(request()->query());
                $meta_title = $tieudedanhmuc." - Truyện nổi bật"." - ThemTruyen";
            } elseif($sort_by == 'top_all') {
                $truyendanhpage = $danhmuctruyen->nhieutruyen()->orderBy('luotxem','DESC')->where('kichhoat',0)->paginate(8)->appends(request()->query());
                $meta_title = $tieudedanhmuc." - Truyện xem nhiều"." - ThemTruyen";
            } else {
                return redirect()->back();
             }
        }
        elseif(isset($_GET['status'])) 
        {
            $status = $_GET['status'];

            if($status == 'dang_tien_hanh')
            {
                $truyendanhpage = $danhmuctruyen->nhieutruyen()->where('tinh_trang',0)->paginate(8)->appends(request()->query());
                $meta_title = $tieudedanhmuc." - Đang tiến hành"." - ThemTruyen";
            } elseif($status == 'hoan_thanh')
            {
                $truyendanhpage = $danhmuctruyen->nhieutruyen()->where('tinh_trang',1)->paginate(8)->appends(request()->query());
                $meta_title = $tieudedanhmuc." - Đã full"." - ThemTruyen";
            } else {
                $truyendanhpage = $danhmuctruyen->nhieutruyen()->paginate(12);
                $meta_title = $tieudedanhmuc." - ThemTruyen";
            }
        } 
        else
        {
            $truyendanhpage = $danhmuctruyen->nhieutruyen()->orderBy('id_truyen','DESC')->paginate(12);
            $meta_title = $tieudedanhmuc." - ThemTruyen";
        }

        // $truyen = Truyen::with('thuocnhieudanhmuctruyen')->orderBy('id_truyen','DESC')->where('kichhoat',0)->whereIn('id_truyen',$nhiutruyen)->get();

        return view('pages.danhmuc')->with(compact('danhmuc','meta_title','danhmuc_id','slugdanhmuc','tieudedanhmuc','motadanhmuc','slide_truyen','truyendanhpage','tukhoatruyen'));
    }
    
    public function xemtruyen($slug){
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();

        $truyentranh = Truyen::with('chapter')->orderBy('luotxem','DESC')->where('truyen_noibat',1)->where('kichhoat',0)->get();

        $truyentranhhot = Truyen::with('chapter')->orderBy('luotxem','DESC')->where('truyen_noibat',2)->where('kichhoat',0)->get();

        $truyen = Truyen::with('thuocnhieudanhmuctruyen')->where('slug_truyen',$slug)->where('kichhoat',0)->first();

        $rating = Rating::where('truyen_id',$truyen->id_truyen)->avg('rating');

        $rate = Rating::with('truyennhieurate')->where('truyen_id',$truyen->id_truyen)->count();

        $chapter = Chapter::with('truyen')->orderBy('id_chapter','DESC')->where('kichhoat',0)->where('truyen_id',$truyen->id_truyen)->get();
        
        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();

        $slide_truyen = Truyen::orderBy('id_truyen','DESC')->where('kichhoat',0)->take(8)->get();

        $chapter_dau = Chapter::with('truyen')->orderBy('id_chapter','ASC')->where('truyen_id',$truyen->id_truyen)->first();

        $chapter_cuoi = Chapter::with('truyen')->orderBy('id_chapter','DESC')->where('truyen_id',$truyen->id_truyen)->first();
        // dd($truyen);

        $meta_title = $truyen->tentruyen." - ThemTruyen";
        // dd($rating);
        return view('pages.truyen')->with(compact('danhmuc', 'truyen', 'truyentranh', 'truyentranhhot', 'chapter','rating','rate','chapter_dau','chapter_cuoi','slide_truyen','tukhoatruyen','meta_title'));
    }

    public function insert_rating(Request $request){
        $data = $request->all();
        $rating = new Rating();
        $rating->truyen_id = $data['truyen_id'];
        $rating->rating = $data['index'];
        $rating->save();
        echo 'done';
    }

    public function xemchapter($slug_truyen,$slug){
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();

        $truyen = Chapter::where('slug_chapter',$slug)->where('kichhoat',0)->first();

        $chapter = Chapter::with('truyen')->where('slug_chapter',$slug)->where('truyen_id',$truyen->truyen_id)->first();

        $chapter->truyen->luotxem  =  $chapter->truyen->luotxem + 1;

        $chapter->truyen->save();

        $chapter->luotxemchap = $chapter->luotxemchap + 1;

        $chapter->save();

        $truyen_breadcrumb = Truyen::with('danhmuctruyen')->where('id_truyen',$truyen->truyen_id)->first();
        
        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();

        $slide_truyen = Truyen::orderBy('id_truyen','DESC')->where('kichhoat',0)->take(8)->get();

        $all_chapter = Chapter::with('truyen')->orderBy('id_chapter','ASC')->where('truyen_id',$truyen->truyen_id)->get();

        $next_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id_chapter','>',$chapter->id_chapter)->min('slug_chapter');

        $max_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id_chapter','DESC')->first();
        $min_id = Chapter::where('truyen_id',$truyen->truyen_id)->orderBy('id_chapter','ASC')->first();

        $previous_chapter = Chapter::where('truyen_id',$truyen->truyen_id)->where('id_chapter','<',$chapter->id_chapter)->max('slug_chapter');

        $meta_title = $chapter->truyen->tentruyen." ".$chapter->tuade." - ThemTruyen";

        return view('pages.chapter')->with(compact('danhmuc','chapter','all_chapter','next_chapter','previous_chapter','max_id','min_id','slide_truyen','truyen_breadcrumb','tukhoatruyen','meta_title'));
    }

    public function send_comment(Request $request){
        $chapter_id = $request->chapter_id;
        $truyen_id   = $request->truyen_id;
        $comment_user = $request->comment_user;
        $comment_email = $request->comment_email;
        $comment_content = $request->comment_content;

        $comment = new Comment();

        $comment->comment = $comment_content;
        $comment->comment_user = $comment_user;
        $comment->comment_email = $comment_email;
        $comment->comment_chapter_id = $chapter_id;
        $comment->comment_truyen_id = $truyen_id;
        

        $comment->save();
    }

    public function reply_comment(Request $request){
        $data = $request->all();

        $comment = new Comment();
        
        $comment->comment = $data['reply'];
        $comment->comment_replied = $data['replycmt_id'];
        $comment->comment_chapter_id = $data['chapter_id'];
        $comment->comment_truyen_id = $data['truyen_id'];
        $comment->comment_user = $data['reply_user'];
        $comment->comment_email = $data['reply_email'];

        $comment->save();
    }

    public function load_comment(Request $request){
        $chapter_id = $request->chapter_id;
        $truyen_id = $request->truyen_id;
        $comment = Comment::where('comment_chapter_id',$chapter_id)->orderBy('id_comment','DESC')->where('comment_truyen_id',$truyen_id)->where('comment_replied',NULL)->get();
        $comment_rep = Comment::where('comment_chapter_id',$chapter_id)->orderBy('id_comment','DESC')->where('comment_truyen_id',$truyen_id)->get();
        $counts = count($comment_rep);
        $customer_id = Session::get('customer_id');
        $customer_name = Session::get('customer_name');
        $customer_email = Session::get('customer_email');          
        $countcom = '
        <ul class="comment-nav">
        <li><i class="fas fa-comment"></i> Bình luận chung ('.$counts.')</li>
        </ul>
        ';
        $output = '<div class="commenter">';
        //Bình luận 
            foreach($comment as $key => $cmt){
                $output .= '
                <div class="main_cmt">
                <div class="card mb-4 card-cmt">
                    <div class="card-body">
                        <div class="d-flex justify-content-between" id="user_cmt">
                            <div class="d-flex flex-row align-items-center">
                                <img src="'.url('/public/images/images.png').'" alt="avatar" width="25" height="25"/>
                                <p class="small mb-0 ms-2">'.$cmt->comment_user.'</p>
                            </div>
                            <div class="d-flex flex-row align-items-center">
                                <i class="fa fa-clock fa-xs text-black"style="margin-top: -0.16rem;margin-right: 1px;"></i>
                                <p class="small text-muted mb-0">'.$cmt->comment_date.'</p>
                            </div>
                        </div>
                            <p class="commentshow">'.$cmt->comment.'</p>
                        <div class="d-flex justify-content-between" id="user_reply">
                            <div class="d-flex flex-row align-items-center">               
                            
                                <i class="far fa-thumbs-up fa-xs text-black"style="margin-top: -0.16rem;margin-right: 5px;"></i>
                                <i class="far fa-thumbs-down fa-xs text-black"style="margin-top: -0.16rem;"></i>
                                <span class="small text-muted mx-2 mb-0">
                                <a href="javascript:void(0)" class="showhidereply" data-id="'.$cmt->id_comment.'">
                                Trả lời
                                </a> 
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="replies replycomment-'.$cmt->id_comment.'">';
                if($customer_id!=NULL){
                $output .='
                    <div class="form-outline mb-4">
                            <div class="mrt5" style="color:red;font-size:12px;font-style:italic;">
                            Trả lời <b>@'.$cmt->comment_user.'</b>
                            </div>
                                <textarea class="form-control replied_'.$cmt->id_comment.'" rows="2" placeholder="Mời bạn phản hồi, vui lòng không spam,..."></textarea>
                    </div>
                        <div class="form-group clearfix sort_by mb-4">
                            <div class="row comic_filter">
                                <div class="col-sm-5 infouser" style="display: flex;">
                                    <input type="email" value="'.$customer_email.'" class="form-control rep_email reply_email_'.$cmt->id_comment.'" placeholder="Email">
                                    <input type="text"  value="'.$customer_name.'" class="form-control rep_user reply_user_'.$cmt->id_comment.'"  placeholder="Tên bạn">
                                    <button type="button" data-comment_id="'.$cmt->id_comment.'" class="btn btn-primary offset-md send-reply">Gửi</button>
                                </div>
                            </div>
                        </div>';
                }else{
                    $output .='
                    <div class="form-outline mb-4">
                            <div class="mrt5" style="color:red;font-size:12px;font-style:italic;">
                            Trả lời <b>@'.$cmt->comment_user.'</b>
                            </div>
                                <textarea class="form-control replied_'.$cmt->id_comment.'" rows="2" placeholder="Mời bạn phản hồi, vui lòng không spam,..."></textarea>
                    </div>
                        <div class="form-group clearfix sort_by mb-4">
                            <div class="row comic_filter">
                                <div class="col-sm-5 infouser" style="display: flex;">
                                    <input type="email" class="form-control rep_email reply_email_'.$cmt->id_comment.'" placeholder="Email">
                                    <input type="text" class="form-control rep_user reply_user_'.$cmt->id_comment.'"  placeholder="Tên bạn">
                                    <button type="button" data-comment_id="'.$cmt->id_comment.'" class="btn btn-primary offset-md send-reply">Gửi</button>
                                </div>
                            </div>
                        </div>';
                }
                $output .='
                </div>
                ';
                //Phản hồi bình luận 
                foreach($comment_rep as $key => $replied_cmt){

                    if($replied_cmt->comment_replied==$cmt->id_comment){
                    $output .= '
                        <div class="list_replied repp-'.$cmt->id_comment.'">
                            <div class="card mb-4 card-cmt">
                                <div class="card-body">
                                    <div class="d-flex justify-content-between" id="user_cmt">
                                        <div class="d-flex flex-row align-items-center">
                                            <img src="'.url('/public/images/replyava.jpg').'" alt="avatar" width="25" height="25"/>
                                            <p class="small mb-0 ms-2">'.$replied_cmt->comment_user.'</p>
                                        </div>
                                        <div class="d-flex flex-row align-items-center">
                                            <i class="fa fa-clock fa-xs text-black"style="margin-top: -0.16rem;margin-right: 1px;"></i>
                                            <p class="small text-muted mb-0"> '.$replied_cmt->comment_date.'</p>
                                        </div>
                                    </div>
                                        <p class="commentshow">'.$replied_cmt->comment.'</p>
                                    <div class="d-flex justify-content-between" id="user_reply">
                                        <div class="d-flex flex-row align-items-center">               
                                        
                                            <i class="far fa-thumbs-up fa-xs text-black"style="margin-top: -0.16rem;margin-right: 5px;"></i>
                                            <i class="far fa-thumbs-down fa-xs text-black"style="margin-top: -0.16rem;"></i>
                                            <span class="small text-muted mx-2 mb-0">
                                            <a href="javascript:void(0)" class="showhidereply" data-id="'.$replied_cmt->id_comment.'">
                                            Trả lời
                                            </a> 
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="replies replycomment-'.$replied_cmt->id_comment.'">';
                            if($customer_id!=NULL){
                            $output .='
                                <div class="form-outline mb-4">
                                        <div class="mrt5" style="color:red;font-size:12px;font-style:italic;">
                                            Trả lời
                                        </div>
                                            <textarea class="form-control repliess_'.$cmt->id_comment.'" rows="2" placeholder="Mời bạn phản hồi, để hạn chế spam hệ thống sẽ giới hạn lượt phản hồi của một bình luận...">@'.$replied_cmt->comment_user.' </textarea>
                                </div>
                                    <div class="form-group clearfix sort_by mb-4">
                                        <div class="row comic_filter">
                                            <div class="col-sm-5 infouser" style="display: flex;">
                                                <input type="email" value="'.$customer_email.'" class="form-control rep_email repliess_email_'.$replied_cmt->comment_replied.'" placeholder="Email">
                                                <input type="text" value="'.$customer_name.'" class="form-control rep_user repliess_user_'.$replied_cmt->comment_replied.'"  placeholder="Tên bạn">
                                                <button type="button" data-reply_id="'.$replied_cmt->comment_replied.'" class="btn btn-primary offset-md send-replies">Gửi</button>
                                            </div>
                                        </div>
                                    </div>';
                            }else{
                                $output .='
                                <div class="form-outline mb-4">
                                        <div class="mrt5" style="color:red;font-size:12px;font-style:italic;">
                                            Trả lời
                                        </div>
                                            <textarea class="form-control repliess_'.$cmt->id_comment.'" rows="2" placeholder="Mời bạn phản hồi, để hạn chế spam hệ thống sẽ giới hạn lượt phản hồi của một bình luận...">@'.$replied_cmt->comment_user.' </textarea>
                                </div>
                                    <div class="form-group clearfix sort_by mb-4">
                                        <div class="row comic_filter">
                                            <div class="col-sm-5 infouser" style="display: flex;">
                                                <input type="email" class="form-control rep_email repliess_email_'.$replied_cmt->comment_replied.'" placeholder="Email">
                                                <input type="text" class="form-control rep_user repliess_user_'.$replied_cmt->comment_replied.'"  placeholder="Tên bạn">
                                                <button type="button" data-reply_id="'.$replied_cmt->comment_replied.'" class="btn btn-primary offset-md send-replies">Gửi</button>
                                            </div>
                                        </div>
                                    </div>';
                            }
                    $output .='
                            </div>
                        </div>';
                    }
                }

                    $output .=' 
                    <a class="view-morerep mb-3" href="javascript:void(0)" data-target="'.$cmt->id_comment.'">
                     Xem phản hồi
                    </a>';

                $output .='
                    </div>
                    ';
            }
            $output .= '
            </div> 
            ';
        echo $countcom;
        echo $output;
    }

    public function timkiem(Request $request){
        // $data = $request->all();
        $title  =   'Kết quả cho: ';
        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();
        $slide_truyen = Truyen::orderBy('id_truyen','DESC')->where('kichhoat',0)->take(8)->get();
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();
        $tukhoa = $_GET['tukhoa'];
        $keywords = [
            'keyword'   =>  $tukhoa,
            'noibat'    =>  0
        ];
        TuKhoa::insert($keywords);
        // dd($tukhoa);
        $truyen = Truyen::with('danhmuctruyen')->where('tentruyen','LIKE','%'.$tukhoa.'%')->orWhere('tacgia','LIKE','%'.$tukhoa.'%')->orWhere('tomtat','LIKE','%'.$tukhoa.'%')->get();

        $meta_title = "Tìm truyện tranh online - ThemTruyen";

        return view('pages.timkiem')->with(compact('danhmuc','truyen','slide_truyen','tukhoa','tukhoatruyen','title','meta_title'));
    }

    public function tags($tag){
        $title  =   'Kết quả cho: ';
        $tags  = explode("-", $tag);
        // dd($tag);
        $truyen = Truyen::with('thuocnhieudanhmuctruyen')->where(
            function ($query) use($tags){
                for ($i = 0; $i < count($tags); $i++){
                    $query->orwhere('tentruyen', 'LIKE', '%' . $tags[$i] . '%')->orwhere('tacgia', 'LIKE', '%' . $tags[$i] . '%')->orwhere('tomtat', 'LIKE', '%' . $tags[$i] . '%');
                }
            })->paginate(12);
        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();
        $slide_truyen = Truyen::orderBy('id_truyen','DESC')->where('kichhoat',0)->take(8)->get();
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();

        $meta_title = "Tìm truyện tranh theo tag - ThemTruyen";
        return view('pages.tags')->with(compact('danhmuc','truyen','slide_truyen','tukhoatruyen','tag','title','meta_title'));
    }

    public function theodoi(){
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();  

        $truyen = Truyen::with('chapter')->orderBy('id_truyen','DESC')->where('kichhoat',0)->paginate(10);

        $truyentranh = Truyen::with('chapter')->orderBy('id_truyen','DESC')->where('truyen_noibat',1)->where('kichhoat',0)->get();

        $truyentranhhot = Truyen::with('chapter')->orderBy('id_truyen','DESC')->where('truyen_noibat',2)->where('kichhoat',0)->get();

        $slide_truyen = Truyen::orderBy('id_truyen','DESC')->where('kichhoat',0)->take(8)->get();

        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();

        $meta_title = "Truyện đang theo dõi - ThemTruyen";

        return view('pages.theodoi')->with(compact('danhmuc', 'truyen', 'truyentranh', 'truyentranhhot','slide_truyen','tukhoatruyen','meta_title'));
    }

    public function lichsu(){
        $danhmuc = DanhmucTruyen::orderBy('id_danhmuc','DESC')->get();  

        $truyen = Truyen::with('chapter')->orderBy('id_truyen','DESC')->where('kichhoat',0)->paginate(10);

        $truyentranh = Truyen::with('chapter')->orderBy('id_truyen','DESC')->where('truyen_noibat',1)->where('kichhoat',0)->get();

        $truyentranhhot = Truyen::with('chapter')->orderBy('id_truyen','DESC')->where('truyen_noibat',2)->where('kichhoat',0)->get();

        $slide_truyen = Truyen::orderBy('id_truyen','DESC')->where('kichhoat',0)->take(8)->get();

        $tukhoatruyen  = TuKhoa::orderBy('id_tukhoa', 'DESC')->where('noibat',1)->take(18)->get();

        $meta_title = "Lịch sử đọc truyện - ThemTruyen";

        return view('pages.lichsuxem')->with(compact('danhmuc', 'truyen', 'truyentranh', 'truyentranhhot','slide_truyen','tukhoatruyen','meta_title'));
    }
}
