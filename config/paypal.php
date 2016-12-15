<?php
return array(
    // set your paypal credential
    'client_id' => 'AQLHGy3HHvez2BRWQCcbztiQlXbmCOlLqHzWUHirs7X1O258wfOGTWP9Sp7EVV1GoStci8HJNB9y3s2_',
    'secret' => 'EJH3GvGSnuI7opWhp4ykBWXPo4VZnZt0EsE2Cj5kLrKMmKIXRBtpb29UGMwS1GyzIC3iQ1fbOpsH-YZi',

    /**
     * SDK configuration 
     */
    'settings' => array(
        /**
         * Available option 'sandbox' or 'live'
         */
        'mode' => 'live',

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