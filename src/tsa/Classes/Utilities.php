<?php


    namespace tsa\Classes;


    class Utilities
    {

        /**
         * Get array with all 32 characters for decoding from/encoding to base32.
         *
         * @return array
         */
        public static function getBase32LookupTable()
        {
            return array(
                'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', //  7
                'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', // 15
                'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', // 23
                'Y', 'Z', '2', '3', '4', '5', '6', '7', // 31
                '=',  // padding char
            );
        }

    }