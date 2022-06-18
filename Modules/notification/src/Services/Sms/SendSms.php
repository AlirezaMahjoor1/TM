<?php

namespace TM\Notification\Services\Sms;

use Illuminate\Support\Facades\Http;

class SendSms
{
    private $recipient;
    private $message;

    public function __construct($recipient, $message)
    {
        $this->recipient = $recipient;
        $this->message = $message;
    }

    public function send()
    {


        $response = Http::withHeaders([
            'Authorization' => 'AccessKey 1HiI_pXHJ2RZCFJ9ZaLrn-Oo_7bi2PmvnuXCm2aX2SQ='
        ])->post("http://rest.ippanel.com/v1/messages", [

            "originator" => "+9890000145",
            "recipients" => [
                "$this->recipient"
            ],
            "message" => "$this->message"

        ]);
        return ($response);

    }


}
