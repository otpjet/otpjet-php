# otpjet-php
PHP library for integration of OTPJet SMS API.

Main website: **[otpjet.com](https://otpjet.com)**

Check out **[RestFul API Documentation](https://docs.otpjet.com)**

## Send OTP
```php
use OtpjetPhp\Api;
$api = new Api();
$api->sendOTP($apiKey, $templateKey, $mobile, $countryCode);
```
### Parameters
- `apiKey`: Unique project key generated along side the project. and can be found in project's page in panel.
- `templateKey`: Unique template key generated after importing templates in project.
- `mobile`: Recipient mobile number.
### Response
`sendOTP()` - Returns response which contains `otpKey` which should be stored in session or db for further validation.
## Validate OTP
```php
use OtpjetPhp\Api;
$api = new Api();
$api->validateOTP($sha1ofOtp, $otpKey);
```
### Parameters
- `sha1ofOtp`: The otp which you intent to validate is to be sent in this parameter after sha1Encryption.
- `otpKey`: The otpKey which you stored while sending OTP is to be sent here.
### Response
`validateOTP` - Returns response return status which is `success/failed`. which tells weather the otp is correct or not.

