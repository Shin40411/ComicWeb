<?php

namespace App\Console\Commands\Crawler;

use Illuminate\Console\Command;
use App\Models\Crawler\CrawTruyen;
use Illuminate\Support\Str;
use Goutte\Client;



class CrawlerStoryTestCommand extends Command
{
    
    protected $signature = 'crawler:story-test';

    protected $description = 'Crawler Story test';

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
        $link = 'https://truyentranh.net/comic-latest';
        $this->warn("-- Link: ". $link);
        $html = file_get_html($link);
        $pageArr = [];

        //lay tong so trang
        foreach($html->find(" #main > div.section.section-body > div > div > div > div > div.chapter-list-pagination > nav > ul > li > a ") as $key => $item)
        {
        $page = $item->plaintext ??  '';
        $pageArr[] = $page;
        
        }
        $lastPage = array_pop($pageArr) ?? 0;
        if ($lastPage && !preg_match('/^[0-9]+$/', $lastPage)) {
            $lastPage = $pageArr[count($pageArr) - 1];
          }

        // dump($lastPage);

        $this->info("-- -- Total Page: ". $lastPage);
        for ($i = 1; $i <= $lastPage; $i++)
        {
            $linkContent = $link."?page=".$i;
            $this->warn("-- -- Link: ". $linkContent);
            $html = file_get_html($linkContent);

            //lay chi tiet truyen (ten truyen, slug truyen, link truyen, link trang)
            foreach($html->find(" div.card-list > div.card ") as $item)
            {   
                $title      = $item->find("div.card-list > div > div > p", 0)->plaintext;
                $slugcomic  = Str::slug($title);
                $linkDetail = $item->find("div.card-list > div > a", 0)->href ?? "";

                $data       = [
                    'tentruyen'     => $title,
                    'slug_truyen' => $slugcomic,
                    'link_goc'    => $linkDetail  
                            ];

                // $this->getDetailComic($lastPage, $data);
                dump($data);
                // CrawTruyen::insert($data);
            }
        }
    }

    protected function getDetailComic($lastPage, $story)
    {
        // $client = new Client();
        // $link = $story['s_link'];
        // $crawler = $client->request('GET', $link);

        // //lay anh truyen
        // $thumbnail = $crawler->filter("div.col-sm-4.col-12.comic-left > div.image-info > img.image-comic")->eq(0)->attr('src') ?? null;

        // $story['thumbnail'] = $thumbnail;

        //lay chapter
        // $chapterArr   =  $crawler->filter("div.col-sm-6.col-5.chapters > a")->each(function($node){
        //     $nameChap = $node->text();
        //     $linkChap = $node->attr('href');
        //     $linkChap = ( false !== strpos( $linkChap, 'https://toptruyen.net') ) ? $linkChap : 'https://toptruyen.net' . $linkChap;

            // $html = file_get_html($linkChap);
            // foreach($html->find(".page-chapter > img") as $key => $item){
            //     $image_C = $item->attr["src"];
            //     $image_A = $item->attr["alt"];
            //     $imgChapArr = [
            //         'img' => $image_C,
            //         'alt' => $image_A
            //     ];
            //     dump($imgChapArr);
            // }
        //     return compact('nameChap', 'linkChap');
        // });




        // $story['chapter_arr'] = $chapterArr;

        // dd($story);
    }
}
