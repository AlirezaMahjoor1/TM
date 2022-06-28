<?php

namespace TM\Notification\Services\Sms;

use Illuminate\Support\Facades\Http;

class SendSms
{
    private const authentication = "AccessKey 1HiI_pXHJ2RZCFJ9ZaLrn-Oo_7bi2PmvnuXCm2aX2SQ=";
    private const url = "http://rest.ippanel.com/v1/messages/patterns/send";
    private const originator = "+983000505";
    private const patternCode = "qege50qcrniz748";
    private $recipient;
    private $code;

    public function __construct($recipient, $code)
    {
        $this->recipient = $recipient;
        $this->code = $code;
    }

    public function send()
    {
        $response = Http::withHeaders([
            'Authorization' => self::authentication
        ])->post(self::url, [
            "pattern_code" => self::patternCode,
            "originator" => self::originator,
            "recipient" => "+98" . $this->recipient,
            "values" => [
                "code" => "$this->code"
            ]
        ]);

        return ($response);
    }


}
