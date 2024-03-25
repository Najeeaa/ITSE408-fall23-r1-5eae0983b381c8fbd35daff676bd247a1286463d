<?php
namespace App\Http\Controllers;
use App\Models\Faculty;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FacultyController extends Controller
{
    public function index()
    {

        $faculties = Faculty::all();

        return view('website.sections.faculties', compact('faculties'));
    }

    public function manage()
    {
        $faculties = Faculty::all();
        return view('backend.FacultyManager', compact('faculties'));
    }

    public function create()
    {
        return view('backend.Add.AddFaculty');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name'=>'required|max:225|string',
            'created_at'=>'required',
            'description_ar'=>'required',
            'image'=>'required',
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extenstion;
            $file->move('storage/',$fileName);
        }

        Faculty::create([
            'name_ar'=>$request->name,
            'description_ar'=>$request->description_ar,
            'image'=>$fileName,
            'created_at'=>$request->created_at
        ]);
        return redirect()->route('ManageFaculty')->with('status','Faculty Created');
    }

    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $faculty= Faculty::findOrFail($id);
        return view('backend.Edit.EditFaculty',compact('faculty'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name'=>'required|max:225|string',
            'created_at'=>'required',
            'description_ar'=>'required',
            'image'=>'required',
        ]);

        if($request->has('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $fileName = time().'.'.$extenstion;
            $file->move('storage/',$fileName);
        }

        Faculty::findOrFail($id)->update([
            'name_ar'=>$request->name,
            'description_ar'=>$request->description_ar,
            'image'=>$fileName,
            'created_at'=>$request->created_at
        ]);
        return redirect()->route('ManageFaculty')->with('status','Faculty Created');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $faculty =Faculty::findOrFail($id);
        $faculty->delete();
        return redirect()->back()->with('status','Faculty deleted');
    }

}
