<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Http;

class DashboardController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    
    public $cryptoUnitAry = [
        "USDT",
        "TRX", 
        "LTC", 
        "BTC", 
        "XRP", 
        "BNB", 
        "DOGE"
    ];
    
    public $cryptoAry = [
        "ETH",
        "TRX", 
        "BSC", 
        "LTC", 
        "BTC", 
        "BNB", 
        "XRP",
        "DOGE"
    ];
    
    public $imgPath = [
        [
            "/usdt_erc20.png",
            "/usdt_trc20.png",
            "/usdt_bep20.png"
        ]
    ];
    
    public $addrAry = [
        [
            "0xca1fc2116492696f1eed50711a744c161a2fc040",
            "TL9LKM44nayYsGkVi8TieBJTDdtu9cqim3",
            "0xca1fc2116492696f1eed50711a744c161a2fc040"
        ]
    ];
    
    public $titleAry = [
        "Tether"
    ];
    
    public $textAry = [
        [
            '<div class="m-b-10">
                <span style="color: #dd0000;">1. ¡Atención!</span> Esta dirección solo admite transferencias Tether a través del protocolo ERC20.  
                No envíe transferencias desde contratos inteligentes, monedas ETH o cualquier otra criptomoneda. Tales depósitos no serán acreditados.
            </div>
            <div class="m-b-10">
                Envía la cantidad exacta de <b>moneymoney</b> a la dirección que se muestra en esta página en una sola transacción.</b>
            </div>
            <div class="m-b-10">
                Envíe exactamente el monto que se muestra en una transacción; de lo contrario, su depósito puede fallar. No se admiten pagos en transacciones múltiples.
            </div>
            <div class="m-b-10">
                Los fondos se acreditarán en su cuenta tan pronto nuestro equipo de soporte verifique y confirme su deposito.
            </div>',
            
            '<div class="m-b-10">
                <span style="color: #dd0000;">1. ¡Atención!</span> Esta dirección solo admite transferencias Tether a través del protocolo TRC20.  
                No envíe transferencias desde contratos inteligentes, monedas ETH o cualquier otra criptomoneda. Tales depósitos no serán acreditados.
            </div>
            <div class="m-b-10">
                Envía la cantidad exacta de <b>moneymoney</b> a la dirección que se muestra en esta página en una sola transacción.</b>
            </div>
            <div class="m-b-10">
                Envíe exactamente el monto que se muestra en una transacción; de lo contrario, su depósito puede fallar. No se admiten pagos en transacciones múltiples.
            </div>
            <div class="m-b-10">
                Los fondos se acreditarán en su cuenta tan pronto nuestro equipo de soporte verifique y confirme su deposito.
            </div>',
            
            '<div class="m-b-10">
                <span style="color: #dd0000;">1. ¡Atención!</span> Esta dirección solo admite transferencias Tether a través del protocolo BEP20.  
                No envíe transferencias desde contratos inteligentes, monedas ETH o cualquier otra criptomoneda. Tales depósitos no serán acreditados.
            </div>
            <div class="m-b-10">
                Envía la cantidad exacta de <b>moneymoney</b> a la dirección que se muestra en esta página en una sola transacción.</b>
            </div>
            <div class="m-b-10">
                Envíe exactamente el monto que se muestra en una transacción; de lo contrario, su depósito puede fallar. No se admiten pagos en transacciones múltiples.
            </div>
            <div class="m-b-10">
                Los fondos se acreditarán en su cuenta tan pronto nuestro equipo de soporte verifique y confirme su deposito.
            </div>'
        ]
    ];
        
    public function __invoke(Request $request)
    {
        //
    }

    public $totalAry = [
        ["name" => "Tiger Nixon", "type" => "Enviar", "position" => "System Architect", "unit" => "USD", "startDate" => "2011-04-25 09:11:21", "salary" => "+320", "finish"=>"Completado"],
        ["name" => "Garrett Winters", "type" => "Enviar", "position" => "Accountant", "unit" => "USD", "startDate" => "2011-07-25 09:11:21", "salary" => "+170", "finish"=>"Completado"],
        ["name" => "Ashton Cox", "type" => "Enviar", "position" => "Junior Technical Author", "unit" => "USD", "startDate" => "2009-01-12 09:11:21", "salary" => "+86", "finish"=>"Completado"],
        ["name" => "Cedric Kelly", "type" => "Recivir", "position" => "Senior Javascript Developer", "unit" => "USD", "startDate" => "2012-03-29 09:11:21", "salary" => "-433", "finish"=>"Completado"],
        ["name" => "Airi Satou", "type" => "Recivir", "position" => "Accountant", "unit" => "USD", "startDate" => "2008-11-28 09:11:21", "salary" => "-162", "finish"=>"Completado"],
        ["name" => "Brielle Williamson", "type" => "Recivir", "position" => "Integration Specialist", "unit" => "USD", "startDate" => "2012-12-02 09:11:21", "salary" => "-372", "finish"=>"Completado"],
        ["name" => "Haley Kennedy", "type" => "Recivir", "position" => "Senior Marketing Designer", "unit" => "USD", "startDate" => "2012-12-18 09:11:21", "salary" => "-313", "finish"=>"Completado"],
        ["name" => "Tatyana Fitzpatrick", "type" => "Recivir", "position" => "Regional Director", "unit" => "USD", "startDate" => "2010-03-17 09:11:21", "salary" => "-385", "finish"=>"Completado"],
        ["name" => "Michael Silva", "type" => "Recivir", "position" => "Marketing Designer", "unit" => "USD", "startDate" => "2012-11-27 09:11:21", "salary" => "-1980", "finish"=>"Completado"]
    ];
    
    public $yourAry = [
        ["name" => "Cedric Kelly", "type" => "Recivir", "position" => "Senior Javascript Developer", "unit" => "USD", "startDate" => "2012-03-29 09:11:21", "salary" => "-433", "finish"=> "Completado"],
        ["name" => "Airi Satou", "type" => "Enviar", "position" => "Accountant", "unit" => "USD", "startDate" => "2008-11-28 09:11:21", "salary" => "162", "finish"=> "Completado"],
        ["name" => "Brielle Williamson", "type" => "Enviar", "position" => "Integration Specialist", "unit" => "USD", "startDate" => "2012-12-02 09:11:21", "salary" => "372", "finish"=> "Completado"]
    ];
    
    public function index()
    {
        return view('admin.dashboard.default', ["totalAry" => $this->totalAry]);
    }

    public function getTableData(Request $req, $id) {
        
        // return view('admin.dashboard.default', ["ary" => $id == 2 ? $yourAry : $totalAry]);
        return response()->json($id == 1 ? $this->totalAry : $this->yourAry);
    }
    
    public function depositFund(Request $req) {
        $money = $req->get('value');
        $kind = $req->get('kind');
        
        return view('admin.dashboard.deposit-fund', ["val" => $money, "kind" => $kind]);
    }
    
    public function gotoFund(Request $req) {
        $money = $req->get('money');
        $value = $req->get('value');
        $kind = $req->get('kind');
        $kind /= 10;
        
        
        
        $search = '0';
        switch($kind) {
            case 1:
                $search = '279';    //USDT
                break;
            case 2:
                $search = '1094';   //TRX
                break;
            case 3:
                $search = '2';  //LTC
                break;
            case 4:
                $search = '1';  //BTC
                break;
            case 5:
                $search = '44';  //XRP
                break;
            case 6:
                $search = '825';    //BNB
                break;
            case 7:
                $search = '5'; //DOGE
                break;
            // case 8:
            //     $search = '5';
            //     break;
        }
        if($kind == 1){
            $el = 1;
        }
        else {
            $url = 'https://www.coingecko.com/price_charts/'.$search.'/usd/24_hours.json';
            $data = Http::get($url);
            $json = json_decode($data->getBody()->getContents());
            // return count($json->stats);
            $len = count($json->stats);
            $el = $json->stats[$len-1][1];
        }
        // return '{{asset(assets/images/dashboard/deposit/fund/'.$imgPath[$kind-1][$value-1].')}}';
        // return $addrAry[$kind-1][$value-1];
        
        return view('admin.dashboard.usdt', ["val" => $money, "data"=> $el, "unit"=> $this->cryptoUnitAry[$kind-1], "qr"=> $this->imgPath[$kind-1][$value-1], "addr"=> $this->addrAry[$kind-1][$value-1], 
                        "title"=> $this->titleAry[$kind-1], "text"=> $this->textAry[$kind-1][$value-1]]);
    }
    
    function gotoSend(Request $req) {
        $money = $req->get('money');
        $unit = $req->get('unit');
        
        return view('admin.dashboard.send', ["money"=> $money, "unit"=> $unit]);
    }
}
