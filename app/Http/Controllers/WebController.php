<?php

namespace App\Http\Controllers;

use App\Models\Conference;
use App\Models\Journal;
use App\Models\Monograph;
use App\Models\News;
use App\Models\NewsViewer;
use App\Models\Novel;
use App\Models\Page;
use App\Models\Proceeding;
use App\Models\Reference;
use App\Models\Slider;
use App\Models\Supported;
use App\Models\Textbook;
use App\Models\Workshop;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index()
    {
        $slider = Slider::get();
        $news = News::orderBy('id', 'DESC')->limit(6)->get();
        $textbook = Textbook::orderBy('id', 'DESC')->limit(5)->get();
        $catalog1 = Textbook::orderBy('id', 'DESC')->limit(3)->get();
        $catalog2 = Monograph::orderBy('id', 'DESC')->limit(3)->get();
        $catalog3 = Reference::orderBy('id', 'DESC')->limit(3)->get();
        $catalog4 = Novel::orderBy('id', 'DESC')->limit(3)->get();
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

    public function catalog_1()
    {
        $title = "Buku Ajar";
        $catalog = Textbook::paginate(12);
        return view('web.catalog',compact('title','catalog'));
    }

    public function catalog_1_detail(Textbook $textbook)
    {
        $title = "Buku Ajar";
        $catalog = $textbook;
        return view('web.catalog_detail',compact('title','catalog'));
    }

    public function catalog_2()
    {
        $title = "Monograf";
        $catalog = Monograph::paginate(12);
        return view('web.catalog',compact('title','catalog'));
    }

    public function catalog_2_detail(Monograph $monograph)
    {
        $title = "Monograf";
        $catalog = $monograph;
        return view('web.catalog_detail',compact('title','catalog'));
    }

    public function catalog_3()
    {
        $title = "Referensi";
        $catalog = Reference::paginate(12);
        return view('web.catalog',compact('title','catalog'));
    }

    public function catalog_3_detail(Reference $reference)
    {
        $title = "Referensi";
        $catalog = $reference;
        return view('web.catalog_detail',compact('title','catalog'));
    }

    public function catalog_4()
    {
        $title = "Novel";
        $catalog = Novel::paginate(12);
        return view('web.catalog',compact('title','catalog'));
    }

    public function catalog_4_detail(Novel $novel)
    {
        $title = "Novel";
        $catalog = $novel;
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
        $conference = Conference::paginate(12);
        return view('web.conference',compact('title','conference'));
    }

    public function workshop()
    {
        $title = "Workshop";
        $workshop = Workshop::paginate(12);
        return view('web.workshop',compact('title','workshop'));
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

}
