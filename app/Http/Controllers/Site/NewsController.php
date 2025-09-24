<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;
use App\Models\Category;
use App\Models\Advertisement;

class NewsController extends Controller
{
    public function list($category)
    {
        $news = News::whereHas('category', function ($query) use ($category) {
            $query->where('name', [$category]);
        })->orderByDesc('id')->paginate(6);

        $categories = Category::where('name', [$category])->get();

        /* Ultimas noticias - Trás as 3 ultimas noticias*/
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->get()->take(3);

        /* Subscrição - mostrando um  modal com a imagem da noticia mais recentes */
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        /* Footer - trazendo os primeiros 5 nomes das categorias sem repetir nenhum e trás tmbm as duas ultimas noticias*/
        $footerCategory = Category::select('name')
            ->distinct()
            ->get()
            ->take(5);


        $Recent = News::orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::orderBy('updated_at', 'desc')->get()->take(4);

        $ads = Advertisement::orderByDesc('id')->take(1)->get();

        return view('site.news.list.index', compact(
            'news',
            'categories',
            'breaknews',
            'footerCategory',
            'subscription',
            'Recent',
            'RecentPost',
            'ads'
        ));
    }

    public function details(News $news)
    {
        // Busca a notícia atual
        $news = News::with('category')->findOrFail($news->id);

        // Busca notícias relacionadas pela categoria
        $Related = News::where('category_id', $news->category_id)
            ->where('id', '!=', $news->id) // exclui a própria notícia
            ->latest()
            ->get()
            ->take(6); // quantidade de relacionadas

        /* Ultimas noticias - Trás as 3 ultimas noticias*/
        $breaknews = News::where('detach', 'destaque')->orderByDesc('id')->take(3)->get();

        /* Subscrição - mostrando um  modal com a imagem da noticia mais recentes */
        $subscription = News::where('detach', 'destaque')->orderByDesc('id')->first();

        /* Footer - trazendo os primeiros 5 nomes das categorias sem repetir nenhum e trás tmbm as duas ultimas noticias*/
        $footerCategory = Category::select('name')
            ->distinct()
            ->take(5)
            ->get();

        $Recent = News::orderBy('updated_at', 'desc')->get()->take(2);

        $RecentPost = News::orderBy('updated_at', 'desc')->get()->take(4);

        $categories = Category::all();
        /* $categories = Category::where('name')->get(); */

        return view('site.news.details.index', compact('news', 'breaknews', 'footerCategory', 'subscription', 'Recent', 'RecentPost', 'Related', 'categories'));
    }
}
