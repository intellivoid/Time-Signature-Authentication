# Time Signature Authentication (TSA)

This library allows you to create time signature authentication
codes to verify logins


### Create a signature
```php
<?PHP
    $Source = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'tsa' . DIRECTORY_SEPARATOR . 'tsa.php';
    include_once($Source);
    
    $Signature = \tsa\Classes\Crypto::BuildSecretSignature(32);
    print("Signature: " . $Signature . "\n");
```


### Get verification code
```php
<?PHP
    $Source = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'tsa' . DIRECTORY_SEPARATOR . 'tsa.php';
    include_once($Source);
    
    $Signature = \tsa\Classes\Crypto::BuildSecretSignature(32);
    print("Signature: " . $Signature . "\n");
    print("Code: " . \tsa\Classes\Crypto::getCode($Signature) . "\n");
```


### Verify verification code
```php
<?PHP
    $Source = __DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'tsa' . DIRECTORY_SEPARATOR . 'tsa.php';
    include_once($Source);
    
    $Signature = \tsa\Classes\Crypto::BuildSecretSignature(32);
    print("Signature: " . $Signature . "\n");
    print("Code: " . \tsa\Classes\Crypto::getCode($Signature) . "\n");
    
    if(\tsa\Classes\Crypto::verifyCode($Signature, "12345") == true)
    {
        // The code is correct 
    }
    else
    {
        // The code is incorrect        
    }
```