<?php

/*
   LOG HANDLING
   ------------

   Those constants allow to change the max log file size and the number of files
   to keep while the logs are rotated for files generated by eZ Publish
   (eZDebug) and custom log files (eZLog)
*/

/**
 * Maximum file size in bytes of eZ Publish generated log, ie
 * error.log, warning.log, notice.log and strict.log files
 * Default is 200Kb
 */
define( 'EZPUBLISH_LOG_MAX_FILE_SIZE', 3145728 );

/**
 * Maximum file size in bytes of custom log file generated with eZLog class
 */
define( 'CUSTOM_LOG_MAX_FILE_SIZE', 3145728 );

