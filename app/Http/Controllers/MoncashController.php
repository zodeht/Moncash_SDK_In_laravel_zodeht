<?php

namespace App\Http\Controllers;

use App\Models\ApiMoncash\Configuration;
use App\Models\ApiMoncash\Credentials;
use App\Models\ApiMoncash\Order;
use App\Models\ApiMoncash\PaymentMaker;
use App\Models\ApiMoncash\TransactionCaller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class MoncashController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Making payment to Moncash.
     * With Redirection secure payment moncash web Page
     * 
     * @return \Illuminate\Http\Response
     */
    public function makepayment(Request $request){

        $configArray = Configuration::getSandboxConfigs();
        $credential = new Credentials($this->client, $this->secret, $configArray);

        $amount = $request->amount;
        
        $orderId = $request->orderId;

        $theOrder = new Order( $orderId, $amount );

        $paymentObj = PaymentMaker::makePaymentRequest( $theOrder, $credential, $configArray );

        return redirect($paymentObj->getRedirect());

    }

}
