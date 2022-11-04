<?php

namespace Http\Services;

class ChampionService {

    public function getNames($championData) {
        return $championData['name'];
    }

}