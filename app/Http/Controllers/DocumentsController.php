<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;

class DocumentsController extends Controller
{
    public function index()
    {
        $documents = Document::all();

        return view('website.sections.documents', compact( 'documents'));
    }

    public function show(Document $document)
    {
        return view('website.show.showDocument', compact('document'));
    }

    public function create()
    {
        return view('backend.createDocument');
    }

    public function store(Request $request)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
        ]);

        // Create and save document
        $document = Document::create([
            'title' => request('title'),
            'content' => request('content'),
            'description' => request('description'),
        ]);

        // Redirect to documents
        return redirect()->route('documents.index')->with('success', 'Document created.');
    }

    public function edit(Document $document)
    {
        return view('backend.editDocument', compact('document'));
    }

    public function update(Request $request, Document $document)
    {
        // Validate request
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'description' => 'required',
        ]);

        // Update document
        $document->update([
            'title' => request('title'),
            'content' => request('content'),
            'description' => request('description'),
        ]);

        // Redirect to documents
        return redirect()->route('documents.index')->with('success', 'Document updated.');
    }

    public function destroy(Document $document)
    {
        $document->delete();

        return redirect()->route('documents.index')->with('success', 'Document deleted.');
    }
}
