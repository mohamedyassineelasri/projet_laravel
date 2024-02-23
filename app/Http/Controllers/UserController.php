<?php

namespace App\Http\Controllers;

use App\Exports\ProduitExport;
use App\Imports\ProfileImport;
use App\Models\Profile;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $profile = Profile::all();
        $search = $request->input('search');
        $results = Profile::where('name', 'like', '%' . $search . '%')
            ->orWhere('bio', 'like', '%' . $search . '%')
            ->paginate(1000);
        return view('home', compact('profile', 'results'));
    }
    public function export()
    {
        return Excel::download(new ProduitExport(), 'Profile_Projet.xlsx');
    }
    public function import(Request $request)
    {
        $request->validate([
            'file'=>'required|mimes:csv,xlsx',
        ]);
        // dd($request);
        // dd($importRequest->all());
        Excel::import(new ProfileImport, $request->file('file')->store('temp'));
        // return $this->sendResponse('Save ...');
        return redirect()->route('profile.index')->with('success', 'Good Import');
    }
}
