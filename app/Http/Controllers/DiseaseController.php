<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Disease;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DiseaseController extends Controller
{
    public function home($category_id = 0){
        $keyword = request()->query('search', '');
        // dd($keyword);
        if($category_id != 0) $diseases = Disease::where('category_id', $category_id)->paginate(8);
        else if($keyword != ""){
            $diseases = Disease::where('name', 'LIKE', "%".$keyword."%")
            ->orWhere('description', 'LIKE', "%$keyword%")
            ->orWhere('symptoms', 'LIKE', "%$keyword%")
            ->orWhere('cause', 'LIKE', "%$keyword%")
            ->orWhere('treatment', 'LIKE', "%$keyword%")
            ->paginate(8)
            ->appends(['search' => $keyword]);

            // dd($keyword);
        }
        else $diseases = Disease::paginate(8);

        // dd($diseases);

        $categories = Category::all();
        return view('home', ['categories'=>$categories, 'diseases'=>$diseases]);
    }

    public function detail(Disease $disease){
        //related data form the same category but not the same id
        $related = Disease::where('category_id', $disease->category->id)->where('id', '!=', $disease->id)->get();

        return view('disease-details', [
            'disease' => $disease,
            'related' => $related
        ]);
    }

    public function categories(){
        $category = Category::all();
        return view('categories', ['category'=>$category]);
    }

    public function showAddForm(){
        $categories = Category::all();
        return view('add-disease', ['categories'=>$categories]);
    }
    
    public function edit(Disease $disease){
        $categories = Category::all();
        return view('edit', [
            'disease' => $disease,
            'categories' => $categories
        ]);
    }

    public function delete($id){
        // find id
        $disease = Disease::findOrFail($id);
        $disease->delete();

        return redirect()->route('disease')->with('success', 'Disease removed successfully');
    }

    public function update(Request $request, $id)
    {
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'string|max:255',
            'category_id' => 'exists:categories,id',
            'overview' => 'string',
            'symptoms' => 'string',
            'causes' => 'string',
            'treatment' => 'string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048'
        ]);

        // Find the disease
        $disease = Disease::findOrFail($id);

        // Handle image upload if present
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($disease->image) {
                Storage::disk('public')->delete($disease->image);
            }
            $imagePath = $request->file('image')->store('diseases', 'public');
            $disease->image = $imagePath;
        }

        // Update disease details
        $disease->name = $validatedData['name'];
        $disease->category_id = $validatedData['category_id'];
        $disease->description = $validatedData['overview'];
        $disease->symptoms = $validatedData['symptoms'];
        $disease->cause = $validatedData['causes'];
        $disease->treatment = $validatedData['treatment'];
        $disease->save();

        return redirect()->route('disease')->with('success', 'Disease updated successfully');
    }
    
    public function create(Request $request){
        // Validate the incoming request
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'overview' => 'required|string',
            'symptoms' => 'required|string',
            'causes' => 'required|string',
            'treatment' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048' // Optional image upload
        ]);
    
        // Handle image upload if present
        $imagePath = null;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('diseases', 'public');
        }
    
        // Create new disease
        $disease = new Disease();
        $disease->name = $validatedData['name'];
        $disease->category_id = $validatedData['category_id'];
        $disease->description = $validatedData['overview'];
        $disease->symptoms = $validatedData['symptoms'];
        $disease->cause = $validatedData['causes'];
        $disease->treatment = $validatedData['treatment'];
        $disease->photo = $imagePath;
        $disease->save();
    
        return redirect()->route('disease')->with('success', 'Disease added successfully');
    }

}
