<?php

namespace App\Http\Controllers;

use App\Services\PaymentServices\StripeService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Stripe\Stripe;
use Stripe\Charge;
use Stripe\Payout;
use Stripe\Transfer;

class StripeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }      
    public function showConnect(Request $request)
    {
        $stripe_client_id = env('STRIPE_CLIENT_ID');
        $url = 'https://connect.stripe.com/express/oauth/authorize?response_type=code&client_id=ca_Iignvmkj4ALoFMgNMXhGtJM7AiUTA7YD&scope=read_write&redirect_uri='.route('stripe.connect.post');
        return redirect($url);
    }
    public function verifyConnect(Request $request)
    {
        $code = $request->code;
        $token_request_body = array(
            'grant_type' => 'authorization_code',
            'code' => $code,
            'client_secret' => 'sk_test_51I6rk8IwloEcEGxLYDWaJGO8e0TqXa031RofdKLtlakAIXpy3P7B8HoknKJy461anBiFdLFLnRCEaQFWRw9ZQbXu00qt7qai6h'
        );
        $tokenUri="https://connect.stripe.com/oauth/token";
        $request = curl_init($tokenUri);
        curl_setopt($request, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($request, CURLOPT_POST, true);
        curl_setopt($request, CURLOPT_POSTFIELDS, $token_request_body);
        $response = json_decode(curl_exec($request), true);
        curl_close($request);
        $stripe_id = $response['stripe_user_id'];
        $user = auth()->user();
        $user->stripe_id = $stripe_id;
        $user->save();
        return redirect()->route('profile');
    }
    public function Getpayment($trade_id,Request $request)
    {
        $data = $request->all();
        $iduser = Auth::id();
        $product=[];
        $partner=[];
        $tradde=DB::table('traddes')->where('id','=',$trade_id)->first();
        $user=DB::table('users')->where('id','=',$iduser)->first();
        if($tradde->host_user_id==$iduser){
          $product=DB::table('products')->where('id','=',$tradde->exchange_id)->first();
          $partner=DB::table('users')->where('id','=',$tradde->target_user_id)->first();
          $Stripe_IDPartner=$partner->stripe_id;
        }
        else{
          $product=DB::table('products')->where('id','=',$tradde->product_id)->first();
          $partner=DB::table('users')->where('id','=',$tradde->host_user_id)->first();
          $Stripe_IDPartner=$partner->stripe_id;
        }
        $amount=$product->amount;
        Stripe::setApiKey('sk_test_51I6rk8IwloEcEGxLYDWaJGO8e0TqXa031RofdKLtlakAIXpy3P7B8HoknKJy461anBiFdLFLnRCEaQFWRw9ZQbXu00qt7qai6h');
        $token=$data['id'];
        $created=$data['created'];
        $charge = Charge::create([
                            "amount" => 100*(int)$amount,
                            "currency" => "usd",
                            "source" => $token,
                            "metadata" => ["order_id" => $trade_id],
                            "destination"=> $Stripe_IDPartner
                            ]);
        $payment=DB::table('payments')->insert([
                'user_id' => $iduser,
                'tradde_number' => $tradde->tradde_number,
                'amount' => (int)$amount,
                'tradde_id' => $trade_id,
                'token' => $charge->id,
                'created'=> $created,
                'status' => $charge->outcome->network_status,
                'type' => 'charge'
        ]);
        $payout=DB::table('payments')->insert([
                'user_id' => $partner->id,
                'tradde_number' => $tradde->tradde_number,
                'amount' => (int)$amount,
                'tradde_id' => $trade_id,
                'token' => $charge->transfer,
                'created'=> $created,
                'status' => $charge->status,
                'type' => 'transfer'
        ]);
        $trade = DB::table('traddes')->where('id','=',$trade_id)->update(['status'=>6]);
        return response()->json($charge);
    }  
    public function GetUrlConnectStripe(){
        $url = 'https://connect.stripe.com/express/oauth/authorize?response_type=code&client_id=ca_Iignvmkj4ALoFMgNMXhGtJM7AiUTA7YD&scope=read_write&redirect_uri='.route('stripe.connect.post');
        return response()->json($url);
    }
}