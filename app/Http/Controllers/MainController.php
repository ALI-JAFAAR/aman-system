<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Validator;
use Auth;
use App\User;
use App\Traits\Helpers;
use App\Models\Customer;
use App\Models\CustomerImgs;
use App\Models\Union;
use App\Models\Guild;
use App\Models\GuildSub;
use App\Models\Governorate;
use App\Models\Package;
use App\Models\Card;
use App\Models\Partners;
use App\Models\PackagePocket;
use App\Models\PackagePocketArchive;
use App\Models\Pocket;
use App\Models\PocketArchive;
use App\Models\CardStock;
use App\Models\CardPrinted;
use App\Models\DamagedBlank;
class MainController extends Controller{
    use Helpers;

    function index(){
        $guildcard = Customer::where('guild_id','!=',null)->where('guild_id','!=',"")->get()->count();
        $print     = CardPrinted::all()->count();
        $damage    = DamagedBlank::all()->count();
        $emp       = User::where('org_id',1)->get()->count();
        // dd($guildcard);
        return view('backend.admin.index',compact(['guildcard','emp','print','damage']));

    }

    function login(){
        
        return view('backend.login');

    }


    function check_login(Request $res){
    
        $this->validate($res,[
    
            'email'     => 'required',
    
            'password'  => 'required|min:3',
    
        ]);
    
        $data = array(
    
            'email'     => $res->email,
    
            'password'  => $res->password
    
        );
    
        if(Auth::attempt($data)){
            
                return redirect()->route('index');

        }else{
    
            return back()->with('eros','Wrong login details');
    
        }
    
    }
    
    function logout(){
    
        Auth::logout();
    
        return redirect('login');
    
    }
    
    
}








