<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Catalog;
use App\Models\Conference;
use App\Models\Journal;
use App\Models\News;
use App\Models\NewsViewer;
use App\Models\Page;
use App\Models\Proceeding;
use App\Models\SellingMaster;
use App\Models\Slider;
use App\Models\Supported;
use App\Models\Workshop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class WebController extends Controller
{
    public function index()
    {
        $slider = Slider::get();
        $news = News::orderBy('id', 'DESC')->limit(6)->get();
        
        $textbook = Catalog::where('type','textbook')->orderBy('id', 'DESC')->limit(5)->get();
        $catalog1 = Catalog::where('type','textbook')->orderBy('id', 'DESC')->limit(3)->get();
        $catalog2 = Catalog::where('type','monograph')->orderBy('id', 'DESC')->limit(3)->get();
        $catalog3 = Catalog::where('type','reference')->orderBy('id', 'DESC')->limit(3)->get();
        $catalog4 = Catalog::where('type','novel')->orderBy('id', 'DESC')->limit(3)->get();
        $journal = Journal::orderBy('id', 'DESC')->limit(4)->get();
        $proceeding = Proceeding::orderBy('id', 'DESC')->limit(5)->get();
        $supported = Supported::get();
        return view('web.home', compact('slider','news','textbook','catalog1','catalog2','catalog3','catalog4','journal','proceeding','supported'));
    }
    
    public function about()
    {
        $title = "Tentang Kami";
        $about_us = Page::where('menu', 'about_us')->first();
        return view('web.about',compact('title','about_us'));
    }

    public function publishing_process()
    {
        $title = "Proses Publish";
        $publishing_process = Page::where('menu', 'publishing_process')->first();
        return view('web.publishing_process',compact('title','publishing_process'));
    }

    public function news()
    {
        $title = "Berita";
        $news2 = News::latest()->paginate(6)->onEachSide(1);
        return view('web.news',compact('title','news2'));
    }

    public function news_search(Request $request)
    {
        $title = "Berita";
        $search = $request->get('search');
        $news2 = News::where(function ($query) use ($search) {
                            $query->where('title', 'LIKE', '%' . $search . '%');
                        })->orderBy('id', 'DESC')->paginate(6)->onEachSide(1);
        return view('web.news', compact('title','news2'));
    }

    public function news_detail(Request $request)
    {
        $title = "Berita";
        $news2 = $request->get('q');
        $news2 = News::where('slug',$news2)->first();

        $ipAddress = $request->ip();

        $viewer = NewsViewer::where('news_id', $news2->id)
            ->where('ip_address', $ipAddress)
            ->first();

        if (!$viewer) {
            $news2->news_viewer()->create([
                'ip_address' => $ipAddress,
            ]);

            $news2->count_view = $news2->count_view+1;
            $news2->save();
        }
        
        return view('web.news_detail', compact('title','news2'));
    }

    public function catalog(Request $request)
    {
        if($request->segment(1)=="page-textbook"){
            $title = "Buku Ajar";
            $catalog = Catalog::where('type','textbook')->paginate(12);
            return view('web.catalog',compact('title','catalog'));
        } elseif($request->segment(1)=="page-monograph"){
            $title = "Monograf";
            $catalog = Catalog::where('type','monograph')->paginate(12);
            return view('web.catalog',compact('title','catalog'));
        } elseif($request->segment(1)=="page-reference"){
            $title = "Referensi";
            $catalog = Catalog::where('type','reference')->paginate(12);
            return view('web.catalog',compact('title','catalog'));
        } elseif($request->segment(1)=="page-novel"){
            $title = "Novel";
            $catalog = Catalog::where('type','novel')->paginate(12);
            return view('web.catalog',compact('title','catalog'));
        }
    }

    public function catalog_detail(Request $request, Catalog $catalog)
    {
        if($request->segment(1)=="page-textbook"){
            $title = "Buku Ajar";
        } elseif($request->segment(1)=="page-monograph"){
            $title = "Monograf";
        } elseif($request->segment(1)=="page-reference"){
            $title = "Referensi";
        } elseif($request->segment(1)=="page-novel"){
            $title = "Novel";
        }
        
        return view('web.catalog_detail',compact('title','catalog'));
    }

    public function journal()
    {
        $title = "Jurnal";
        $journal = Journal::paginate(12);
        return view('web.journal',compact('title','journal'));
    }

    public function journal_detail(Journal $journal)
    {
        $title = "Jurnal";
        return view('web.journal_detail',compact('title','journal'));
    }

    public function proceeding()
    {
        $title = "Proseding";
        $proceeding = Proceeding::paginate(12);
        return view('web.proceeding',compact('title','proceeding'));
    }

    public function proceeding_detail(Proceeding $proceeding)
    {
        $title = "Proseding";
        return view('web.proceeding_detail',compact('title','proceeding'));
    }

    public function conference()
    {
        $title = "Konferensi";
        return view('web.conference',compact('title'));
    }
    
    public function get_conference_index(Request $request)
    {

        if ($request->ajax()) {
            $counter = 1;

            $conference = Conference::limit(10);

            return DataTables::of($conference)
            ->addIndexColumn()
            ->addColumn('number', function () use (&$counter) {
                return $counter++;
            })
            ->addColumn('start_date', function ($v){
                return 'Mulai Tanggal : '.date('d M Y', strtotime($v->start_date)).' Sampai '.date('d M Y', strtotime($v->end_date));
            })
            ->addColumn('user', function ($v) {
                return $v->user ? $v->user->name : '';
            })
            ->rawColumns([])->make(true);
        }
        
    }

    public function workshop()
    {
        $title = "Workshop";
        return view('web.workshop',compact('title'));
    }

    public function get_workshop_index(Request $request)
    {

        if ($request->ajax()) {
            $counter = 1;

            $workshop = Workshop::limit(10);

            return DataTables::of($workshop)
            ->addIndexColumn()
            ->addColumn('number', function () use (&$counter) {
                return $counter++;
            })
            ->addColumn('start_date', function ($v){
                return 'Mulai Tanggal : '.date('d M Y', strtotime($v->start_date)).' Sampai '.date('d M Y', strtotime($v->end_date));
            })
            ->addColumn('user', function ($v) {
                return $v->user ? $v->user->name : '';
            })
            ->rawColumns([])->make(true);
        }
        
    }

    public function author_and_affiliation()
    {
        $title = "Penulis dan Afiliasi";
        $author_and_affiliation = Page::where('menu', 'author_and_affiliation')->first();
        return view('web.author_and_affiliation',compact('title','author_and_affiliation'));
    }

    public function term_and_condition()
    {
        $title = "Syarat dan Ketentuan";
        $term_and_condition = Page::where('menu', 'term_and_condition')->first();
        return view('web.term_and_condition',compact('title','term_and_condition'));
    }

    public function contact()
    {
        $title = "Kontak Kami";
        return view('web.contact',compact('title'));
    }

    public function register()
    {
        $title = "Registrasi";
        return view('web.register',compact('title'));
    }

    public function login()
    {
        $title = "Login";
        return view('web.login',compact('title'));
    }

    public function add_cart($id)
    {
        $selling_master = SellingMaster::where('status','CART')->where('user_id',Auth::user()->id)->latest()->first();
        
        $index = SellingMaster::count() + 1;

        if ($selling_master == NULL) {
            $selling_master = new SellingMaster();
            $selling_master->transaction_number = 'TRX'.time().$index;
            $selling_master->status = "CART";
            $selling_master->date = date('Y-m-d');
            $selling_master->time = date('H:i:s');
            $selling_master->user_id = Auth::user()->id;
            $selling_master->save();
        }


            $selling_master_id = $selling_master->id ;

            ## Check Stock
            $stock = Catalog::where('id',$id)->first();

            ## Check Cart
            $count_cart = Cart::where('selling_master_id',$selling_master_id)->where('catalog_id',$id)->count();
            
            if($count_cart == 0){
                $cart = new Cart();
            } else {
                $cart = Cart::where('selling_master_id',$selling_master_id)->where('catalog_id',$id)->first();
            }

            ## Cek Stock
            if(($cart->qty +1) > $stock->stock ){
                $qty = $stock->stock;
            } else {
                $qty = $cart->qty + 1;
            }

            $qty2 = $cart->qty + 1;

            $cart->selling_master_id = $selling_master_id;
            $cart->catalog_id = $id;
            $cart->purchase_price = $cart->catalog->purchase_price;
            $cart->selling_price = $cart->catalog->selling_price;
            $cart->qty = $qty;
            $cart->total = $cart->selling_price * $qty;
            $cart->user_id = Auth::user()->id;
            $cart->save();

            $total = Cart::where('selling_master_id',$cart->selling_master_id)->sum('total');
            $qty = Cart::where('selling_master_id',$cart->selling_master_id)->sum('qty');

            if($qty2 > $stock->stock ){
                return response()->json(['failed' => true,'message' => 'Melebihi Stok Yang Tersedia','qty' => $qty,'total' => $total]);
            } else {
                activity()->log('Create Data Cart');
                return response()->json(['success' => true,'message' => 'Tambah Keranjang Berhasil','qty' => $qty,'total' => $total]);
            }
        
    }

    public function refresh_cart()
    {
        $selling_master = SellingMaster::where('status','CART')->where('user_id',Auth::user()->id)->latest()->first();
        $cart = Cart::where('selling_master_id',$selling_master->id)->get();
            
		return view('web.refresh_cart',compact('cart'));
    }

    public function total_cart()
    {
        
        // $selling_master = SellingMaster::where('status','CART')->where('user_id',Auth::user()->id)->latest()->first();
        $cart = Cart::where('user_id',Auth::user()->id)->get();
        $total = 0;
        foreach($cart as $v){
            $total =+ $total + ($v->total);
        }

        return "Rp. ".number_format($total, 0, ',', '.');
    }
    
}
