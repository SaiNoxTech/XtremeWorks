<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;
use DB;

class UserDashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:web');
    }
    
    public function UserDashboard()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
        return view('user.dashboard')->with(compact('wallet'));
    }


    //Wallet Function 
    public function AddBalance()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
        $trans = DB::select('select * from walletTransactions where username = ? AND email = ?',[$username, $email]);
        return view('user.wallet.addBalance')->with(compact('wallet', 'trans'));
    }

    public function paymenttranscations()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
        $trans = DB::select('select * from walletTransactions WHERE username = ? AND email = ?',[$username, $email]);
        return view('user.wallet.transcations')->with(compact('wallet', 'trans')); 
    }

    public function paymentwithdrawl()
    {
        $username = Auth::user()->username;
        $email = Auth::user()->email;
        $wallet = DB::select('select * from wallets where username = ? AND email = ?',[$username, $email]);
        return view('user.wallet.withdrawlform')->with(compact('wallet')); 
    }

    

    //cashfree integration
    public function DepositBalance(Request $request)
    {
        $AmountInUsd = $request->input('AmountInUsd');
        $convertUSDtoINR = round(env("USDtoINR", "75.50")) * $AmountInUsd + 30;
        $mode = "Test";
        $secretKey = env("Cashfree_Test_Secret");
        $appId = env("Cashfree_Test_ID");

        //orderId Generation
        $today = date("Ymd");
        $rand = strtoupper(substr(uniqid(sha1(time())),0,4));
        $unique = $today . $rand; 
        $orderId = $unique;

        $orderAmount = round($convertUSDtoINR);
        $orderCurrency = "INR"; 
        $orderNote = "Wallet Credit";

        $customerName = Auth::user()->fullname;
        $username = Auth::user()->username;
        $customerPhone = Auth::user()->phone;
        $customerEmail = Auth::user()->email;

        $returnUrl = "http://localhost:8000/user/wallet/PaymentStatus";
        $notifyUrl = "http://localhost:8000/user/wallet/deposit";

            $created_at = new \DateTime();
            $updated_at = new \DateTime();

        $postData = array( 
            "appId" => $appId, 
            "orderId" => $orderId, 
            "orderAmount" => $orderAmount, 
            "orderCurrency" => $orderCurrency, 
            "orderNote" => $orderNote, 
            "customerName" => $customerName, 
            "customerPhone" => $customerPhone, 
            "customerEmail" => $customerEmail,
            "returnUrl" => $returnUrl, 
            "notifyUrl" => $notifyUrl,
          );

          if($orderAmount >= 500) {
            ksort($postData);
            $signatureData = "";
            foreach ($postData as $key => $value){
                $signatureData .= $key.$value;
            }
            $signature = hash_hmac('sha256', $signatureData, $secretKey,true);
            $signature = base64_encode($signature);
        
            if ($mode == "PROD") {
              $url = "https://www.cashfree.com/checkout/post/submit";
            } else {
              $url = "https://test.cashfree.com/billpay/checkout/post/submit";
            }
        } else {
                return back()->with('status','Please enter amount more then or equal to 7$');
        }
            $data=array('orderId'=>$orderId, 'referenceId'=>$orderId, 'orderAmount'=>$orderAmount, 'txMsg'=>'Incomplete', 'paymentMode'=>'Incomplete', 'username'=>$username, 'email'=>$customerEmail, 'txStatus'=>'Incomplete', 'created_at'=>$created_at, 'updated_at'=>$updated_at);
            DB::table('walletTransactions')->insert($data);
            return view('PaymentGateway.pay')->with(compact('mode', 'secretKey','appId', 'orderId', 'orderAmount', 'orderCurrency', 'orderNote', 'customerName', 'customerPhone', 'customerEmail', 'returnUrl', 'notifyUrl', 'signature', 'url'));
    
    }

}
 