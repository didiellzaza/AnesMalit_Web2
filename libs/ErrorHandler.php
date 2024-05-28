<?php

class ErrorHandler
{
    public static function handleException($exception)
    {
        // Log exception details
        error_log($exception->getMessage());
        // Display a generic message to the user
        echo "Something went wrong! Please try again later.";
    }

    public static function handleError($severity, $message, $file, $line)
    {
        // Convert errors to ErrorException
        throw new ErrorException($message, 0, $severity, $file, $line);
    }

    public static function handleShutdown()
    {
        $error = error_get_last();
        if ($error !== NULL) {
            $severity = $error["type"];
            $message = $error["message"];
            $file = $error["file"];
            $line = $error["line"];

            // Handle fatal errors
            self::handleError($severity, $message, $file, $line);
        }
    }
}
