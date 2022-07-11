<?php

namespace App\Http\Controllers;
use App\Http\Requests\NewsRequest;
use Illuminate\Http\Request;
use App\Models\News;
class NewsController extends Controller
{
    public function index()
    {
        $news = News::all();
        return view('admin.news.index')->with(['news' => $news]);
    }
    public function create()
    {
        return view('admin.news.create');
    }
    public function postCreate(NewsRequest $request)
    {
        $news = $request->all();
        if ($request->hasFile('news_image')) {
            $file = $request->file('news_image');
            $imageName = $file->getClientOriginalName();
            $file->move('images', $imageName);
        } else {
            $imageName = null;
        }
        $p = new News($news);
        $p->news_image = $imageName;
        $p->save();
        return redirect()->route('admin.news.index');
    }
    public function update($news_id)
    {
        $p = News::find($news_id);
        return view('admin.news.update', ['p' => $p]);
    }
    public function postUpdate(NewsRequest $request, $news_id)
    {
        $news = $request->all();
        if ($request->hasFile('news_image')) {
            $file = $request->file('news_image');
            $imageName = $file->getClientOriginalName();
            $file->move('news_images', $imageName);
        } else {
            $p = News::find($news_id);
            $imageName = $p->image;
        }
        $p = News::find($news_id);
        $p->news_date = $news['news_date'];
        $p->news_topic = $news['news_topic'];
        $p->news_content = $news['news_content'];
        $p->save();
        return redirect()->route('admin.news.index');
    }
    public function delete($news_id)
    {
        $p = News::find($news_id);
        $p->delete();
        return redirect()->route('admin.news.index');
    }
    public function details($news_id)
    {
        $p = News::find($news_id);
        return view('admin.news.details', ['p' => $p]);
    }
}
