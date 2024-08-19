<?php

namespace App\Http\Controllers;

use DB;
use Auth;
use Goutte\Client;
use App\Product;
use App\Product2;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function index(){
    	$client = new Client();

        $crawler = $client->request('GET', 'https://www.fool.com/investing/2017/11/21/the-30-dow-jones-stocks.aspx'); // US Dow Johns

        $crawler2 = $client->request('GET', 'https://markets.businessinsider.com/index/components/nasdaq_100'); 
        // US NASDAQ

        //https://www.cnbc.com/nasdaq-100/

        $crawler3 = $client->request('GET', 'https://www.hl.co.uk/shares/stock-market-summary/ftse-100'); 
        // US FTSE

        //https://www.fool.com/investing/etf/2011/10/12/5-star-etfs-poised-to-pop-powershares-ftse-rafi-u.aspx
        
        //$crawle2 = $client->request('GET', 'https://www.fool.com/quote/nyse/american-express/axp/');//American Express

        $status =  $crawler->filter('aside > h4 > span')->each(function ($node) {
            return $node->text();
        });
        //dd($status);

        $symbol =  $crawler->filter('h4 > span > a')->each(function ($node) {
            return $node->text();
        });
        //dd($symbol);

        $image =  $crawler->filterXpath('//img')->extract(array('data-img-src'));
        //dd($image);

        $data = $crawler->filter('.current-price')->each(function ($node) {
            return $node->text();
        });
        //dd($data);

        $otherdata = $crawler->filter('.price-change-amount')->each(function ($node) {
            return $node->text();
        });
        //dd($otherdata);

        $diffdata = $crawler->filter('.price-change-percent')->each(function ($node) {
            return $node->text();
        });
        //dd($diffdata);

        $status2 =  $crawler2->filter('tr > td')->each(function ($node) {
            return $node->text();
        });
        //dd($status2); // 100 Companies NASDAQ
        
        $status3 =  $crawler3->filter('table > tbody > tr > td')->each(function ($node) {
            return $node->text();
        });
        //dd($status3); // 100 Companies FTSE



        //ExxonMobil   $data[0]
        //Intel   $data[1]
        //Goldman Sachs   $data[2]
        //The Travelers  $data[3]
        //General Electric  $data[4]
        //American Exp   $data[5]
        //Merck & Co.  $data[6]
        //Boeing  $data[7]
        //Coca-Cola  $data[8]
        //iShares Dow   $data[9]
        //Nike  $data[10]
        //United Techno  $data[11]
        //Microsoft  $data[12]
        //Caterpillar   $data[13]
        //Home Depot  $data[14]
        //Pfizer  $data[15]
        //Walt Disney  $data[16]
        //Procter & Gambl  $data[17]
        //Dow Jones Industr  $data[18]
        //Apple  $data[19]
        //UnitedHealth Group  $data[20]
        //Verizon Commun $data[21]
        //IBM $data[22]
        //Cisco Systems $data[23]
        //DowDuPont Inc. $data[24]
        //Walmart Inc. $data[25]
        //Johnson & Johnson $data[26]
        //McDonald's $data[27]
        //3M $data[28]
        //JPMorgan  $data[29]
        //Chevron $data[30]
        //Visa $data[31]


        /*for ($i=0; $i < count($status3) ; $i=$i+6) { 
          $j=$i;
          DB::table('ftses')->insert(
              [
                'symbol' => $status3[$i],
                'name' => $status3[$j+1],
                'current_price' => $status3[$j+2],
                'price_change_amount' => $status3[$j+3],
                'price_change_percent' => $status3[$j+4]
              ]
          );
        }*/


        DB::table('products2')
              ->where('name', 'Exxon Mobil')
              ->update(
                [
                  'image' => $image[6],
                  'symbol' => $symbol[0],
                  'status' => $status[0],
                  'current_price' => $data[0],
                  'price_change_amount' => $otherdata[0],
                  'price_change_percent' => $diffdata[0]
                ]);

          DB::table('products2')
              ->where('name', 'Intel')
              ->update(
                [
                  'image' => $image[8],
                  'symbol' => $symbol[2],
                  'status' => $status[1],
                  'current_price' => $data[1],
                  'price_change_amount' => $otherdata[1],
                  'price_change_percent' => $diffdata[1]
                ]);


          DB::table('products2')
              ->where('name', 'Goldman Sachs')
              ->update(
                [
                  'image' => $image[9],
                  'symbol' => $symbol[3],
                  'status' => $status[2],
                  'current_price' => $data[2],
                  'price_change_amount' => $otherdata[2],
                  'price_change_percent' => $diffdata[2]
                ]);

          DB::table('products2')
              ->where('name', 'The Travelers Companies')
              ->update(
                [
                  'image' => $image[10],
                  'symbol' => $symbol[4],
                  'status' => $status[3],
                  'current_price' => $data[3],
                  'price_change_amount' => $otherdata[3],
                  'price_change_percent' => $diffdata[3]
                ]);

          DB::table('products2')
              ->where('name', 'General Electric')
              ->update(
                [
                  'image' => $image[11],
                  'symbol' => $symbol[5],
                  'status' => $status[4],
                  'current_price' => $data[4],
                  'price_change_amount' => $otherdata[4],
                  'price_change_percent' => $diffdata[4]
                ]);

          DB::table('products2')
              ->where('name', 'American Express')
              ->update(
                [
                  'image' => $image[12],
                  'symbol' => $symbol[6],
                  'status' => $status[5],
                  'current_price' => $data[5],
                  'price_change_amount' => $otherdata[5],
                  'price_change_percent' => $diffdata[5]
                ]);

          DB::table('products2')
              ->where('name', 'Merck & Co.')
              ->update(
                [
                  'image' => $image[13],
                  'symbol' => $symbol[7],
                  'status' => $status[6],
                  'current_price' => $data[6],
                  'price_change_amount' => $otherdata[6],
                  'price_change_percent' => $diffdata[6]
                ]);

          DB::table('products2')
              ->where('name', 'Boeing')
              ->update(
                [
                  'image' => $image[14],
                  'symbol' => $symbol[8],
                  'status' => $status[7],
                  'current_price' => $data[7],
                  'price_change_amount' => $otherdata[7],
                  'price_change_percent' => $diffdata[7]
                ]);

          DB::table('products2')
              ->where('name', 'Coca-Cola')
              ->update(
                [
                  'image' => $image[15],
                  'symbol' => $symbol[9],
                  'status' => $status[8],
                  'current_price' => $data[8],
                  'price_change_amount' => $otherdata[8],
                  'price_change_percent' => $diffdata[8]
                ]);
          

          DB::table('products2')
              ->where('name', 'Dow Jones Transport. Avg.')
              ->update(
                [
                  'image' => $image[16],
                  'symbol' => $symbol[10],
                  'status' => $status[9],
                  'current_price' => $data[9],
                  'price_change_amount' => $otherdata[9],
                  'price_change_percent' => $diffdata[9]
              ]);          

          DB::table('products2')
              ->where('name', 'Nike')
              ->update(
                [
                  'image' => $image[17],
                  'symbol' => $symbol[11],
                  'status' => $status[10],
                  'current_price' => $data[10],
                  'price_change_amount' => $otherdata[10],
                  'price_change_percent' => $diffdata[10]
              ]);

          DB::table('products2')
              ->where('name', 'United Technologies')
              ->update(
                [
                  'image' => $image[18],
                  'symbol' => $symbol[12],
                  'status' => $status[11],
                  'current_price' => $data[11],
                  'price_change_amount' => $otherdata[11],
                  'price_change_percent' => $diffdata[11]
              ]);

          DB::table('products2')
              ->where('name', 'Microsoft')
              ->update(
                [
                  'image' => $image[19],
                  'symbol' => $symbol[13],
                  'status' => $status[12],
                  'current_price' => $data[12],
                  'price_change_amount' => $otherdata[12],
                  'price_change_percent' => $diffdata[12]
              ]);


          DB::table('products2')
              ->where('name', 'Caterpillar')
              ->update(
                [
                  'image' => $image[20],
                  'symbol' => $symbol[14],
                  'status' => $status[13],
                  'current_price' => $data[13],
                  'price_change_amount' => $otherdata[13],
                  'price_change_percent' => $diffdata[13]
              ]);

          DB::table('products2')
              ->where('name', 'Home Depot')
              ->update(
                [
                  'image' => $image[21],
                  'symbol' => $symbol[15],
                  'status' => $status[14],
                  'current_price' => $data[14],
                  'price_change_amount' => $otherdata[14],
                  'price_change_percent' => $diffdata[14]
              ]);

          DB::table('products2')
              ->where('name', 'Pfizer')
              ->update(
                [
                  'image' => $image[22],
                  'symbol' => $symbol[16],
                  'status' => $status[15],
                  'current_price' => $data[15],
                  'price_change_amount' => $otherdata[15],
                  'price_change_percent' => $diffdata[15]
              ]);


          DB::table('products2')
              ->where('name', 'Walt Disney')
              ->update(
                [
                  'image' => $image[23],
                  'symbol' => $symbol[17],
                  'status' => $status[16],
                  'current_price' => $data[16],
                  'price_change_amount' => $otherdata[16],
                  'price_change_percent' => $diffdata[16]
              ]);


          DB::table('products2')
              ->where('name', 'Procter & Gamble')
              ->update(
                [
                  'image' => $image[24],
                  'symbol' => $symbol[18],
                  'status' => $status[17],
                  'current_price' => $data[17],
                  'price_change_amount' => $otherdata[17],
                  'price_change_percent' => $diffdata[17]
              ]);

          DB::table('products2')
              ->where('name', 'Dow Jones Industrial Average')
              ->update(
                [
                  'image' => $image[25],
                  'symbol' => $symbol[20],
                  'status' => $status[18],
                  'current_price' => $data[18],
                  'price_change_amount' => $otherdata[18],
                  'price_change_percent' => $diffdata[18]
              ]);

          DB::table('products2')
              ->where('name', 'Apple')
              ->update(
                [
                  'image' => $image[27],
                  'symbol' => $symbol[21],
                  'status' => $status[19],
                  'current_price' => $data[19],
                  'price_change_amount' => $otherdata[19],
                  'price_change_percent' => $diffdata[19]
              ]);

          DB::table('products2')
              ->where('name', 'United Health Group')
              ->update(
                [
                  'image' => $image[28],
                  'symbol' => $symbol[22],
                  'status' => $status[20],
                  'current_price' => $data[20],
                  'price_change_amount' => $otherdata[20],
                  'price_change_percent' => $diffdata[20]
              ]);

          DB::table('products2')
              ->where('name', 'Verizon Communications')
              ->update(
                [
                  'image' => $image[29],
                  'symbol' => $symbol[23],
                  'status' => $status[21],
                  'current_price' => $data[21],
                  'price_change_amount' => $otherdata[21],
                  'price_change_percent' => $diffdata[21]
              ]);

          DB::table('products2')
              ->where('name', 'IBM')
              ->update(
                [
                  'image' => $image[30],
                  'symbol' => $symbol[24],
                  'status' => $status[22],
                  'current_price' => $data[22],
                  'price_change_amount' => $otherdata[22],
                  'price_change_percent' => $diffdata[22]
              ]);


          DB::table('products2')
              ->where('name', 'Cisco Systems')
              ->update(
                [
                  'image' => $image[31],
                  'symbol' => $symbol[25],
                  'status' => $status[23],
                  'current_price' => $data[23],
                  'price_change_amount' => $otherdata[23],
                  'price_change_percent' => $diffdata[23]
              ]);

          DB::table('products2')
              ->where('name', 'Dow Du Pont Inc.')
              ->update(
                [
                  'image' => $image[32],
                  'symbol' => $symbol[26],
                  'status' => $status[24],
                  'current_price' => $data[24],
                  'price_change_amount' => $otherdata[24],
                  'price_change_percent' => $diffdata[24]
              ]);

          DB::table('products2')
              ->where('name', 'Walmart Inc.')
              ->update(
                [
                  'image' => $image[33],
                  'symbol' => $symbol[27],
                  'status' => $status[25],
                  'current_price' => $data[25],
                  'price_change_amount' => $otherdata[25],
                  'price_change_percent' => $diffdata[25]
              ]);

          DB::table('products2')
              ->where('name', 'Johnson & Johnson')
              ->update(
                [
                  'image' => $image[34],
                  'symbol' => $symbol[28],
                  'status' => $status[26],
                  'current_price' => $data[26],
                  'price_change_amount' => $otherdata[26],
                  'price_change_percent' => $diffdata[26]
              ]);

          DB::table('products2')
              ->where('name', 'McDonald\'s')
              ->update(
                [
                  'image' => $image[35],
                  'symbol' => $symbol[29],
                  'status' => $status[27],
                  'current_price' => $data[27],
                  'price_change_amount' => $otherdata[27],
                  'price_change_percent' => $diffdata[27]
              ]);

          DB::table('products2')
              ->where('name', '3M')
              ->update(
                [
                  'image' => $image[36],
                  'symbol' => $symbol[30],
                  'status' => $status[28],
                  'current_price' => $data[28],
                  'price_change_amount' => $otherdata[28],
                  'price_change_percent' => $diffdata[28]
              ]);

          DB::table('products2')
              ->where('name', 'JPMorgan Chase')
              ->update(
                [
                  'image' => $image[37],
                  'symbol' => $symbol[31],
                  'status' => $status[29],
                  'current_price' => $data[29],
                  'price_change_amount' => $otherdata[29],
                  'price_change_percent' => $diffdata[29]
              ]);

          DB::table('products2')
              ->where('name', 'Chevron')
              ->update(
                [
                  'image' => $image[38],
                  'symbol' => $symbol[32],
                  'status' => $status[30],
                  'current_price' => $data[30],
                  'price_change_amount' => $otherdata[30],
                  'price_change_percent' => $diffdata[30]
              ]);

              DB::table('products2')
              ->where('name', 'Visa')
              ->update(
                [
                  'image' => $image[39],
                  'symbol' => $symbol[33],
                  'status' => $status[31],
                  'current_price' => $data[31],
                  'price_change_amount' => $otherdata[31],
                  'price_change_percent' => $diffdata[31]
              ]);

              //echo "Ok";

              /*echo json_encode($image);
              echo "<br>";
              echo json_encode($symbol);
              echo "<br>";
              echo json_encode($status);
              echo "<br>";
              echo json_encode($data);
              echo "<br>";
              echo json_encode($otherdata);
              echo "<br>";
              echo json_encode($diffdata);
              echo "<br>";

              exit;*/

    }

    public function data(){
      return view('live-data');
    }


    public function live_product2_data(){
      $products = Product2::all();
      return json_encode($products);
    }

    public function live_product_data(){
      $products = DB::table('products')->join('products2', 'products.product_id', '=', 'products2.id')->where('user_id', Auth::id())->orderBy('products.created_at', 'desc')->get();
      return json_encode($products);
    }

}
