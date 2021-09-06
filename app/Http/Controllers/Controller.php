<?php

namespace App\Http\Controllers;

use App\Models\ApiMoncash\Configuration;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    protected $client;
    protected $secret;

    public function __construct(){
        $this->client = "719ff2ee179fe9d905fd2bd8ccfc76a4";
        $this->secret = "8gDSwyLQhatObGM2NKJCinPnyosVeq8KvE8WbRE7TwdEEPmK-d-ZuJYqK2C2-lOy";
    }
}