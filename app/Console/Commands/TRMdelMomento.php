<?php

namespace Buromall\Console\Commands;

use Illuminate\Console\Command;
use Carbon\Carbon;
use DB;

class TRMdelMomento extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'trm:hora';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Guarda la TRM cada hora';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $ch = curl_init('http://apilayer.net/api/live?access_key=a5c9db90b76a9b96b7afa2c6f9070b74&currencies=EUR,USD,COP,BRL&source=USD&format=1');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        // Submit the POST request
        $result = curl_exec($ch);
        // Close cURL session handle
        curl_close($ch);

        $data_result = json_decode($result);
        $data_usd_eur = $data_result->quotes->USDEUR;
        $data_usd_usd = $data_result->quotes->USDUSD;
        $data_usd_cop = $data_result->quotes->USDCOP;
        $data_usd_brl = $data_result->quotes->USDBRL;
        $data_timestamp = $data_result->timestamp;

        //print_r($data_usd_brl);

        DB::table('currency_days')->insert(
            [
                'usd_eur' => $data_usd_eur,
                'usd_usd' => $data_usd_usd,
                'usd_cop' => $data_usd_cop,
                'usd_brl' => $data_usd_brl,
                'timestamp' => $data_timestamp,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        );
    }
}
