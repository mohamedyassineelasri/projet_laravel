<?php

namespace App\Http\Controllers;

use App\Exports\ProduitExport;
use App\Models\Profile;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Excel;

class LoginController extends Controller
{
    //
    public function show(){
        return view('login.show');
    }
    public function login(Request $request){
        // $request->post() katjib li donne kamlin
        $login=$request->login;
        $password=$request->password;
        $values=['email'=>$login,"password"=>$password];
        if(Auth::attempt($values)){
            //connecter
            $request->session()->regenerate();
            return redirect()->route('profile.index')->with('success','Vous étes bien connecté '.$login.' .');
        }else{
            //xi hj ghalta
            return back()->withErrors([
                'login'=>'Email ou mot de passe incorrect.',
            ])->onlyInput('login'); //back=kan9ola rja3 min jiti
        };
    }
    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect()->route('login')->with('success','Vous étes bien déconnecté .');
    }
    private $excel;
    public function __construct(Excel $excel)
    {
        $this->excel = $excel ;
    }
    public function pdf()
    {
        return $this->excel->download(new ProduitExport, 'Profile_Projet.pdf', Excel::DOMPDF);
    }

}
