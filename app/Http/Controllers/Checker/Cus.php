<?php

namespace App\Http\Controllers\Checker;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Stichoza\GoogleTranslate\GoogleTranslate;
use Illuminate\Support\Facades\Hash;

use Illuminate\Support\Str;
use App\Traits\Constants;
use Auth;
use App\Models\Customer;
use App\Models\CustomerImgs;
use App\Models\Union;
use App\Models\Guild;
use App\Models\GuildSub;
use App\Models\Governorate;
use App\Models\Package;
use App\Models\Card;
use App\User;
use App\Models\Partners;
use App\Models\PackagePocket;
use App\Models\PackagePocketArchive;
use App\Models\Pocket;
use App\Models\PocketArchive;
use App\Models\CardStock;
use App\Models\CardPrinted;
use App\Models\DamagedBlank;
use DNS2D;
class Cus extends Controller{
    
    use Constants;

    function index(){

        $union    = Union::all();
        $gov      = Governorate::all();
        $guild    = Guild::all();
        $guildsub = GuildSub::all();
        $card     = Card::all();
        $package  = Package::all();

        return view("backend.".Auth::user()->type.".cus.chose",compact(['union','gov','guildsub','guild','package','card']));
    
    }

    
    function create_org($id,$id2){
        
        $union    = Union::all();
        $gov      = Governorate::all();
        $guild    = Guild::all();
        $guildsub = GuildSub::all();
        $card1     = Card::where('id','=',$id)->get();
        $card2     = Card::where('id','=',$id2)->get();
        $package  = Package::all();
        $card = $card1->merge($card2);
        
        return view("backend.".Auth::user()->type.".cus.create_org",compact(['union','gov','guildsub','guild','package','card']));
    
    }


    function create_guild($id,$id2){
        
        $union     = Union::all();
        $gov       = Governorate::all();
        $guild     = Guild::all();
        $guildsub  = GuildSub::all();
        $card1     = Card::where('id','=',$id)->get();
        $card2     = Card::where('id','=',$id2)->get();
        $package   = Package::all();
        $card = $card1->merge($card2);
        
        return view("backend.".Auth::user()->type.".cus.create_guild",compact(['union','gov','guildsub','guild','package','card']));
    
    }
    
    function show(Request $res){
        
        try{
            $cus = Customer::with('union','employeer','user','guild','guildsub','govs','partner','imgs')->when($res->search , function($query) use($res){

                return $query->where('name','like','%'.$res->search.'%')

                    ->orWhere('id', $res->search);

            })->get();

    
            return view('backend.'.Auth::user()->type.'.cus.show',compact(['cus']));

           
        }catch (\Throwable $th) {

            echo '<scrip>alert('.$th.');</script>';
           
        }
    
    }


    function showgrid(Request $res){

        try{
            $cus = Customer::with('union','employeer','user','guild','guildsub','govs','partner','imgs')->when($res->search , function($query) use($res){

                return $query->where('name','like','%'.$res->search.'%')

                    ->orWhere('id', $res->search);

            })->paginate(9);

    
            return view('backend.'.Auth::user()->type.'.cus.gridview',compact(['cus']));

           
        }catch (\Throwable $th) {
            echo '<scrip>alert('.$th.');</script>';
           
        }
    }

    function save(Request $res){

        $tr = new GoogleTranslate('en');

        $end_date = date('Y-m-d', strtotime($res->join_date . ' + 1 year'));
        //dd($res);
        $cus = Customer::create([
            'name'          => $res->name,
            'phone'         => $res->phone,
            'password'      => $this->password_generator(10),
            'mother'        => $res->mother,
            'dob'           => $res->dob,
            'address'       => $res->address,
            'email'         => $res->email,
            'gov_id'        => $res->gov_id,
            'package_id'    => $res->package_id,
            'union_id'      => $res->union_id,
            'guild_id'      => $res->guild_id,
            'point'         => $res->point,
            'guild_sub_id'  => $res->guild_sub_id,
            'job'           => $res->job,
            'work_years'    => $res->work_years,
            'job_address'   => $res->job_address,
            'country'       => $res->country,
            'card_id'       => $res->card_id,
            'card_no'       => $this->card_no_generator(10),
            'gov_insurance' => $res->gov_insurance,
            'insurance'     => $res->insurance,
            'job_govs'      => $res->job_govs,
            'reverral'      => $res->reverral,
            'reverral_user' => $this->reveral_generator(15),
            'join_date'     => $res->join_date,
            'end_date'      => $end_date,
            'name_en'       => $tr->translate($res->name),
            'gender'        => $res->gender,
            'img'           => 'storage/'.$res->file('img')->store('public/cus','public'),
            'categorize'    => $res->categorize,
            'q1'            => $res->q1,
            'q2'            => $res->q2,
            'q3'            => $res->q3,
            'q4'            => $res->q4,
            'q5'            => $res->q5,
            'q6'            => $res->q6,
            'q7'            => $res->q7,
            'q8'            => $res->q8,
            'q9'            => $res->q9,
            'q10'           => $res->q10,
            'q11'           => $res->q11,
            'q12'           => $res->q12,
            'q13'           => $res->q13,
            'q14'           => $res->q14,
            'q15'           => $res->q15,
            'q16'           => $res->q16,
            'q17'           => $res->q17,
            'note'          => $res->note,
            'status'        => 0,
            'user_id'       => Auth::user()->id,

        ]);


        foreach ($res->file('imgs') as $imagefile) {
            
            CustomerImgs::create([
                'cus_id'   => $cus->id,
                'img'       => 'storage/'.$imagefile->store('public/customer_ids','public'), 
            ]);
        
        }

    
        return redirect()->route(Auth::user()->type.'.cus-table');
    
    }


    function view($id){
       
        $data = Customer::where('id',$id)->with('union','employeer','user','guild','guildsub','govs','partner','imgs')->first();
        
        $union    = Union::all();
        $gov      = Governorate::all();
        $guild    = Guild::all();
        $guildsub = GuildSub::all();
        $card     = Card::all();
        $package  = Package::all();
        
        return view("backend.".Auth::user()->type.".cus.edit",compact(['data','union','gov','guildsub','guild','package','card']));
    
    }

    function edit($id,Request $res){
       
        $customer = Customer::findOrFail($id);
        
        $attributes = $res->only(['name', 'mother','job_govs', 'phone', 'dob', 'genderemail', 'email', 'address', 'point', 'gov_id', 'package_id', 'union_id', 'guild_id', 'guild_sub_id', 'job', 'work_years', 'categorize', 'job_address', 'country', 'card_id', 'gov_insurance','insurance', 'join_date', 'img', 'reverral', 'note']);

        $customer->update($attributes);

        if ($res->img != "") {
            $customer->img = 'storage/' . $res->file('img')->store('public/cus', 'public');
        }

        $customer->save();

        if ($res->imgs != "") {
            foreach ($res->file('imgs') as $imagefile) {
                CustomerImgs::create([
                'cus_id' => $customer->id,
                'img' => 'storage/' . $imagefile->store('public/customer_ids', 'public'),
                ]);
            }
        }

    
        return redirect()->route(Auth::user()->type.'.cus-table');
    
    }

    function del($id){
       
        $row = Customer::findOrFail($id);
    
        $row->delete();
    
        return redirect()->route('cus-table');
    
    }


    function del_imgs($id){
        $img =CustomerImgs::findOrFail($id);
        $cus_id = $img->cus_id;
        $img->delete();
        return redirect()->route(Auth::user()->type.'.cus-single',$cus_id);
    
    }




    function cus_single($id){

        $cus = Customer::where('id',$id)->with('union','employeer','user','guild','guildsub','govs','partner','imgs')->first();
        $ans = array();
        for($i =0 ;$i<17;$i++){
            $qs =  $i+1;
            $x ='q'.$qs;
            if($cus->$x== 0){
                $ans[$i] = "كلا";
            }else{
                $ans[$i] = "نعم";
            }
        }
        $ques = $this->question();
        return view('backend.'.Auth::user()->type.'.cus.single',compact('cus','ques','ans'));
    }






















    function change_status_print($id){

        $cus = Customer::with(['package' => function ($query) {
            $query->with('partner');
        }])->find($id);
        
        
        
        if($cus->status !=0){
            $tr = new GoogleTranslate('en');
            $cardstock = CardStock::where('card_id',$cus->card_id)->first();
            $cardstock->qty -= 1;
            $cardstock->save();
            $cus = Customer::where('id',$id)->with('union','employeer','user','guild','guildsub','govs','partner','imgs')->first();
            $manager = User::where('guild_id',$cus->guild_id)->first();
            try {
                $i =$cus->imgs[0]->img;
            } catch (Throwable $e) {
                report($e);
         
                return false;
            }
            $qrCode = DNS2D::getBarcodePNG($i, 'QRCODE');
            if($cus->card_id == "3")
                return view('print.master',compact('cus','manager','tr','qrCode'));
            if($cus->card_id == "5")
                return view('print.guild',compact('cus','manager','tr','qrCode'));
        }
        
        
        
        
        
        
        $package = $cus->package;
        $card_price = $package->cost;
        $partner = $package->partner;


        $cus->status = 1;

        $cus->save();

        $packagepocket = PackagePocket::firstOrCreate(
            ['partner_id' => $partner->id],
            ['amount' => $partner->cost, 'status' => 0]
        );
        $packagepocket->amount += $partner->cost;
        $packagepocket->save();

        $x = PackagePocketArchive::create([
            'partner_id' => $partner->id,
            'amount' => $partner->cost,
            'status' => 0,
            'note' => 'اصدار هوية جديدة'
        ]);
        $card_price -= $partner->cost;

        // SECOND give the guild admin 10000

        if ($cus->guild_id && $cus->guild_id != 0) {
            $guild = Guild::with('user')->find($cus->guild_id);
            $pocket = Pocket::firstOrCreate(
                ['user_id' => $guild->user->id],
                ['amount' => $guild->cost, 'status' => 0]
            );
            $pocket->amount += $guild->cost;
            $pocket->save();

            $x = PocketArchive::create([
                'user_id' => $guild->user->id,
                'amount' => $guild->cost,
                'status' => 0,
                'note' => 'اصدار هوية جديدة'
            ]);
            $card_price -= $guild->cost;
        }


        if ($cus->union_id != null && $cus->union_id != 0) {
            $union = Union::where('id', $cus->union_id)->with('user')->first();

            if ($union->cost_persent != null && $union->cost_persent != 0) {
                $percent = $package->cost / 100 * $union->cost_persent;

                $pocket = Pocket::firstOrCreate([
                    'user_id' => $union->user->id
                ], [
                    'amount'  => $percent,
                    'status'  => 0
                ]);
                $pocket->amount += $percent;
                $pocket->save();

                $x = PocketArchive::create([
                    'user_id'    => $union->user->id,
                    'amount'     => $percent,
                    'status'     => 0,
                    'note'       => 'اصدار هوية جديدة'
                ]);
                $card_price -= $percent;
            }
        }


        // SECOND give the Union admin there persent or cost

        if ($cus->union_id != null && $cus->union_id != 0) {
          $union = Union::where('id', $cus->union_id)->with('user')->first();

          if ($union && ($union->cost_persent != null || $union->cost != null)) {
            $percent = $union->cost_persent ? ($package->cost / 100) * $union->cost_persent : $union->cost;

            $pocket = Pocket::firstOrCreate(['user_id' => $union->user->id], [
              'user_id' => $union->user->id,
              'amount' => 0,
              'status' => 0,
            ]);
            $pocket->amount += $percent;
            $pocket->save();

            PocketArchive::create([
              'user_id' => $union->user->id,
              'amount' => $percent,
              'status' => 0,
              'note' => 'اصدار هوية جديدة',
            ]);

            $card_price -= $percent;
          }
        }

        
        $user = User::where([['org_id', 1], ['position', 0]])->first();

        $pocket = Pocket::firstOrCreate(['user_id' => $user->id], [
            'amount' => 0,
            'status' => 0
        ]);

        $pocket->amount += $card_price;
        $pocket->save();

        $x = PocketArchive::create([
            'user_id' => $user->id,
            'amount' => $card_price,
            'status' => 0,
            'note' => 'اصدار هوية جديدة'
        ]);




        // Stock will be implemented later 

        $cardstock = CardStock::where('card_id',$cus->card_id)->first();
        $cardstock->qty -= 1;
        $cardstock->save();
        
        $cardPrinted = CardPrinted::where([['cus_id', $cus->id],['card_id', $cus->card_id]])->first();
        
        $printed = CardPrinted::create([
                'cus_id' => $cus->id,
                'card_id' => $cus->card_id
        ]);
        
        if($cus->guild_id != null){
            $tr = new GoogleTranslate('en');
            $cus = Customer::where('id',$id)->with('union','employeer','user','guild','guildsub','govs','partner','imgs')->first();
            $manager = User::where('guild_id',$cus->guild_id)->first();
            try {
                $i =$cus->imgs[1]->img;
            } catch (Throwable $e) {
                report($e);
         
                return false;
            }
            $qrCode = DNS2D::getBarcodePNG($i, 'QRCODE');
            if($cus->card_id == "3")
                return view('print.master',compact('cus','manager','tr','qrCode'));
            if($cus->card_id == "5")
                return view('print.guild',compact('cus','manager','tr','qrCode'));
        }
    }
    
    
    
    function print($id){
        $cus = Customer::where('id',$id)->with('union','employeer','user','guild','guildsub','govs','partner','imgs')->first();
        $cardstock = CardStock::where('card_id',$cus->card_id)->first();
        $cardstock->qty -= 1;
        $cardstock->save();
        if($cus->guild_id != null){
            $tr = new GoogleTranslate('en');
            $cus = Customer::where('id',$id)->with('union','employeer','user','guild','guildsub','govs','partner','imgs')->first();
            $manager = User::where('guild_id',$cus->guild_id)->first();
            $i =$cus->imgs[0]->img;
            $qrCode = DNS2D::getBarcodePNG($i, 'QRCODE');

            if($cus->card_id == "3")
                return view('print.master',compact('cus','manager','tr','qrCode'));
            else if($cus->card_id == "5")
                return view('print.guild',compact('cus','manager','tr','qrCode'));
        }
    }
    


    private function password_generator($length){

        return substr(str_shuffle(str_repeat('0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ',100)),0,$length);;

    }

    private function card_no_generator($length){

        return 'AJ'.substr(str_shuffle(str_repeat('0123456789',100)),0,$length);

    }

    private function reveral_generator($length){

        return 'ALI'.substr(str_shuffle(str_repeat('0123456789',100)),0,$length);

    }




    function union_api($id){
        return ["data" => Guild::where('union_id',$id)->get()];
    }

    function guild_api($id){
        return ["data" => GuildSub::where('guild_id',$id)->get()];
    }
    
    
    
}
