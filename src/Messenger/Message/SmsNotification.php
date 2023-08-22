<?php


namespace App\Messenger\Message;


final class SmsNotification
{

    public function __construct(
        private string $content
    ) {
    }

    public function getContent(): string
    {
        return $this->content;
    }
}