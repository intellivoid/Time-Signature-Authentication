<?php


    namespace tsa\Classes;


    use tsa\Exceptions\BadLengthException;
    use tsa\Exceptions\SecuredRandomProcessorNotFoundException;

    /**
     * Crypto Functions
     *
     * Class Crypto
     * @package tsa\Classes
     */
    class Crypto
    {
        /**
         * Creates a new secret key
         *
         * @param int $secretLength
         * @return string
         * @throws BadLengthException
         * @throws SecuredRandomProcessorNotFoundException
         */
        public static function BuildSecretSignature($secretLength = 16): string
        {
            $validChars = Utilities::getBase32LookupTable();

            // Check if the length are valid
            if ($secretLength < 16 || $secretLength > 128)
            {
                throw new BadLengthException();
            }

            $secret = '';
            $rnd = false;
            if (function_exists('random_bytes'))
            {
                $rnd = random_bytes($secretLength);
            }
            elseif (function_exists('openssl_random_pseudo_bytes'))
            {
                $rnd = openssl_random_pseudo_bytes($secretLength, $cryptoStrong);
                if (!$cryptoStrong)
                {
                    $rnd = false;
                }
            }
            elseif (function_exists('mcrypt_create_iv'))
            {
                $rnd = mcrypt_create_iv($secretLength, MCRYPT_DEV_URANDOM);
            }

            if ($rnd !== false)
            {
                for ($i = 0; $i < $secretLength; ++$i) {
                    $secret .= $validChars[ord($rnd[$i]) & 31];
                }
            }
            else
            {
                throw new SecuredRandomProcessorNotFoundException();
            }

            return $secret;
        }
    }