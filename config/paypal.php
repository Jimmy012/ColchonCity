<?php
return array(
    // set your paypal credential
    'client_id' => 'AQYn1UJ0waDPtUd59m-J6nlJ2069WmnGNLs5FO4Tv3w_P9PQCMMc6qFo-yWTK5zbsiTJX9MtTP6oRuSP',
    'secret' => 'EPeyXxs_WXeKiSq2Lb1V7EnIEis0Sywc9Rgy3zjXqZcTZgvRS8BWLjgQgc10lun_HZDc6_ssETGF1GPL',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'sandbox',

        /**
         * Specify the max request time in seconds
         */
        'http.ConnectionTimeOut' => 30,

        /**
         * Whether want to log to a file
         */
        'log.LogEnabled' => true,

        /**
         * Specify the file that want to write on
         */
        'log.FileName' => storage_path() . '/logs/paypal.log',

        /**
         * Available option 'FINE', 'INFO', 'WARN' or 'ERROR'
         *
         * Logging is most verbose in the 'FINE' level and decreases as you
         * proceed towards ERROR
         */
        'log.LogLevel' => 'FINE'
    ),
);