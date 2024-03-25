<?php

namespace App\Http\Controllers;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        // Create sample data
        $news = News::all();
        // Pass the data to the view

        return view('website.main', ['news' => $news]);
    }

    public function manage()
    {
        $news = News::all();
        return view('backend.newsManager', ['news' => $news]);
    }

    public function create()
    {
        return view('backend.Add.AddNews');
    }

    public function show($id)
    {
        $news = News::findOrFail($id);

        return view('website.show.showNews', compact('news'));
    }

 
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'author' => 'required',
            'date' => 'required',
            'category' => 'required',
            'content' => 'required',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Add image validation rules
        ]);
    
        $news = new News;
        $news->title = $request->title;
        $news->author = $request->author;
        $news->date = $request->date;
        $news->category = $request->category;
        $news->content = $request->content;
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('images', $image, $imageName);
            $news->image = $imageName;
        }
    
        $news->save();
    
        return redirect()->route('ManageNews')->with('success', 'News created successfully.');
    }
    
    
public function edit($id)
{
    // Find the news item to edit
    $news = News::findOrFail($id);

    // Pass the news item to the view
    return view('backend.Edit.EditNews', compact('news'));
}


    public function update(Request $request, $id)
    {
        // Retrieve the news record to update
        $news = News::findOrFail($id);
    
        $news->title = $request->input('title');
        $news->author = $request->input('author');
        $news->category = $request->input('category');
        $news->date = $request->input('date');
        $news->content = $request->input('content');
    
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            Storage::disk('public')->putFileAs('images', $image, $imageName);
            $news->image = $imageName;
        }
    
        $news->save();
    
        return redirect()->route('ManageNews')->with('success', 'News updated successfully');
    }


public function delete($id)
{
    $news = News::findOrFail($id);

    $news->delete();

    return redirect()->route('ManageNews')->with('success', 'News deleted successfully');
}

}