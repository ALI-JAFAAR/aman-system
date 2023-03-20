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
        return view('backend.'.Auth::user()->type.'.index',compact(['guildcard','emp','print','damage']));

    }

    function index_accountant(){
        $guildcard = Customer::where('guild_id','!=',null)->where('guild_id','!=',"")->get()->count();
        $print     = CardPrinted::all()->count();
        $damage    = DamagedBlank::all()->count();
        return view('backend.'.Auth::user()->type.'.index',compact(['guildcard','print','damage']));

    }

    function index_checker(){
        $guildcard = Customer::where('guild_id','!=',null)->where('guild_id','!=',"")->get()->count();
        $print     = CardPrinted::all()->count();
        return view('backend.'.Auth::user()->type.'.index',compact(['guildcard','print']));

    }

    function index_data_entry(){
        $guildcard = Customer::where('guild_id','!=',null)->where('guild_id','!=',"")->get()->count();
        $print     = CardPrinted::all()->count();
        return view('backend.'.Auth::user()->type.'.index',compact(['guildcard','print']));

    }

    function index_guild(){
        $guildcard = Customer::where('guild_id','!=',null)->where('guild_id','!=',"")->get()->count();
        $print     = CardPrinted::all()->count();
        // dd($guildcard);
        return view('backend.'.Auth::user()->type.'.index',compact(['guildcard','print']));

    }

    function index_hr(){

        $emp       = User::where('org_id',1)->get()->count();
        // dd($guildcard);
        return view('backend.'.Auth::user()->type.'.index',compact(['emp']));

    }

    function index_merchant(){
        $guildcard = Customer::where('guild_id','!=',null)->where('guild_id','!=',"")->get()->count();
        $print     = CardPrinted::all()->count();

        return view('backend.'.Auth::user()->type.'.index',compact(['guildcard','print']));

    }

    function index_police(){
        $cus = Customer::all()->count();

        return view('backend.'.Auth::user()->type.'.index',compact(['cus']));

    }

    function index_union(){
        $guildcard = Customer::where('guild_id','!=',null)->where('guild_id','!=',"")->get()->count();
        $print     = CardPrinted::all()->count();

        // dd($guildcard);
        return view('backend.'.Auth::user()->type.'.index',compact(['guildcard','print']));

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

            switch(Auth::user()->type){
                case "admin":
                    return redirect()->route('index-admin');
                break;
                case "accountant":
                    return redirect()->route('index-accountant');
                break;
                case "checker":
                    return redirect()->route('index-checker');
                break;
                case "data_entry":
                    return redirect()->route('index-data_entry');
                break;
                case "guild":
                    return redirect()->route('index-guild');
                break;
                case "hr":
                    return redirect()->route('index-hr');
                break;
                case "merchant":
                    return redirect()->route('index-merchant');
                break;
                case "union":
                return redirect()->route('index-union');
                break;
                case "police":
                    return redirect()->route('index-police');
                break;
                default:
                    return redirect()->route('cus-table');
                break;

            }

        }else{
    
            return back()->with('eros','Wrong login details');
    
        }
    
    }
    
    function logout(){
    
        Auth::logout();
    
        return redirect('login');
    
    }
    
    
}








