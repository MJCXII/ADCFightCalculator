<?php

namespace App\Http\Controllers;

use Http\Services\ChampionService;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Routing\Controller as BaseController;


class Controller extends BaseController
{

    public function getAllChampions() {
        return $this->getCurl("http://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/champions.json");
    }

    public function getChampion($champion) {
        return $this->getCurl("http://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/champions/$champion.json");
    }

    public function getAllItems() {
        return $this->getCurl("http://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/items.json");
    }

    public function getItem($item) {
        return $this->getCurl("http://cdn.merakianalytics.com/riot/lol/resources/latest/en-US/items/$item.json");
    }

    private function getCurl($url) {

        $cURLConnection = curl_init();

        curl_setopt($cURLConnection, CURLOPT_URL, $url);
        curl_setopt($cURLConnection, CURLOPT_RETURNTRANSFER, true);

        $champList = curl_exec($cURLConnection);
        curl_close($cURLConnection);

        return $jsonArrayResponse = json_decode($champList);

    }

}
