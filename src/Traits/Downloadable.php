<?php

namespace TelegramBot\Traits;

use JsonMapper_Exception;
use TelegramBot\TelegramBot;
use TelegramBot\TelegramException;

/**
 * Trait Downloadable
 * @property string $file_id
 */
trait Downloadable
{
    /**
     * Download and save the file
     * @param TelegramBot $bot
     * @param string $path
     * @throws TelegramException
     * @throws JsonMapper_Exception
     */
    public function download(TelegramBot $bot, string $path): void
    {
        //get the file id
        $file_id = $this->file_id;
        
        //get the file
        $file = $bot->getFile()->fileId($file_id)->send();
        
        //save the file
        $file_url = 'https://api.telegram.org/file/bot' . $bot->token . '/' . $file->file_path;
        $in = fopen($file_url, 'rb');
        $out = fopen($path, 'wb');
        
        while ($chunk = fread($in, 8192)) {
            fwrite($out, $chunk, 8192);
        }
        fclose($in);
        fclose($out);
    }
}