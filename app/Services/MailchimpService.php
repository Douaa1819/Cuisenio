<?php

namespace App\Services;

use Illuminate\Support\Facades\Log;


class MailchimpService {
    private $apiUrl;
    private $listId;

    public function __construct($apiUrl, $listId) {
        $this->apiUrl = $apiUrl;
        $this->listId = $listId;
    }

    public function getListUrl() {
        $url = $this->apiUrl . '/lists/' . $this->listId;
        return $url;
    }
}

    
