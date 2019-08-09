<?php

    include_once(__DIR__ . DIRECTORY_SEPARATOR . '..' . DIRECTORY_SEPARATOR . 'src' . DIRECTORY_SEPARATOR . 'tsa' . DIRECTORY_SEPARATOR . 'tsa.php');

    $Signature = \tsa\Classes\Crypto::BuildSecretSignature(32);
    print("Signature: " . $Signature . "\n");

    print("Code: " . \tsa\Classes\Crypto::getCode($Signature) . "\n");