<?php

namespace OtpjetPhp\Api;

class Api
{

    public function sendOTP($apiKey, $templateKey, $mobile, $cc = 91)
    {
        $url = "https://api.otpjet.com/sms/api/send.json?apiKey=$apiKey&templateKey=$templateKey&cc=$cc&mobile=$mobile";
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $url);
        $result = curl_exec($c);
        return json_decode($result);
    }

    public function validateOTP($sha1ofOtp, $otpKey)
    {
        $url = "https://api.otpjet.com/sms/api/check.json?otp=$sha1ofOtp&otpKey=$otpKey";
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $url);
        $result = curl_exec($c);
        return json_decode($result);
    }
}
