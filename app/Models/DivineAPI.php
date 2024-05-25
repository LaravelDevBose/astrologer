<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\CssSelector\Node\FunctionNode;

class DivineAPI extends Model
{

    /**
     * @param $key string api key for Divine API access
     */
    private $apiKey = null;
    public function __construct($key)
    {
        $this->apiKey = $key;
    }

    public function getTodaysPrediction($postData) {
        $resource = 'get_daily_horoscope.php';
        $response = self::getCurlReponse($this->apiKey, $resource, $postData);

        return json_decode($response);


    }

    public function getCurlReponse($apiKey, $resource, array $data) {
        $apiEndPoint = config("astrologer.base_api");


        $serviceUrl = $apiEndPoint.'/'.$resource.'/';

        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL, $serviceUrl);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        curl_setopt($ch, CURLOPT_TIMEOUT, 20);
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));

        $response = curl_exec($ch);

        curl_close($ch);

        if(curl_error($ch)) {
            return curl_error($ch);
        }

        return $response;
    }
}
