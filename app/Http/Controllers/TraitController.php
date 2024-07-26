<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Traits\ImageTrait;

class TraitController extends Controller
{
    use ImageTrait;
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('imageUpload');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $input = $request->all();

        $input['image'] = $this->verifyAndUpload($request, 'image', 'images');

        Item::create($input);

        return back()
            ->with('success','record created successfully.');

    }
}
