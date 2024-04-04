<?php

namespace App\Console\Commands\Crawler;

use App\Models\Crawler\CrawDanhmuc;
use App\Models\Crawler\CrawChapter;
use Illuminate\Console\Command;
use Illuminate\Support\Str;
use Goutte\Client;

class CrawlerDataCommand extends Command
{

    protected $signature = 'crawler:init';

    protected $description = 'Crawler';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
       $this->init();
    }

    protected function init()
    {
        // $this->crawlerDanhmuc();
        $this->crawlerTruyen();
    }

    protected function crawlerDanhmuc()
    {
        $url      = 'https://toptruyen.net';
        $this->info("-- Danhmuc");
        $this->warn("-- Link: ". $url);
        $html = file_get_html($url);
        $menu_top = $html->find( '.menu-top', 0 );

        if ( $menu_top ) {
            $menu_cat = $menu_top->find( '.menu', 2 );
            if ( $menu_cat ) {
                $categories = $menu_top->find( 'a.category-detail-1' );
                foreach ( $categories as $category ) {
                    $title             = $category->plaintext;
                    $slugcat           = Str::slug($title);
                    $category_url_desc = $category->attr['data-title'];
                    // dump($title, $slugcat, $category_url_desc );
                    $Category = [
                        'tieudedanhmuc'  => $title,
                        'slug_danhmuc'   => $slugcat,
                        'motadanhmuc'    => $category_url_desc,
                        'kichhoat'       => 0
                    ];
                    dump($Category);
                    crawDanhmuc::insert($Category);
                }
            }
        }
    }

    protected function crawlerTruyen()
    {
        $link = 'https://toptruyen.net/truyen-tranh/vlog-kham-pha-nhung-dieu-bi-an/7271';
        $this->warn("-- Link: ". $link);
        $html = file_get_html($link);
        foreach($html->find("div.col-sm-6.col-5.chapters > a") as $item)
        {  
            $chapter = $item->plaintext;
            $chapslug = Str::slug($chapter);
            $chapurl = $item->href ?? "";

            $data = [
                'tuade'  =>   $chapter,
                'slug_chapter'  =>   $chapslug
            ];

            dump($data);
            $chapurl = ( false !== strpos( $chapurl, 'https://toptruyen.net') ) ? $chapurl : 'https://toptruyen.net' . $chapurl;
            
            $html = file_get_html($chapurl);
                foreach($html->find(".page-chapter > img") as $key => $item){
                    $image_C = $item->attr["src"];
                    $image_A = $item->attr["alt"];
                    $data = [
                        'hinhanh' => $image_C,
                        'alt' => $image_A
                    ];
                  dump($data);  
                }

                // CrawChapter::insert($data);
        }
    }    
}
