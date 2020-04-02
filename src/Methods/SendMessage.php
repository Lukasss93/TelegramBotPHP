<?php

namespace TelegramBot\Methods;

use TelegramBot\Abstracts\BaseMethod;
use TelegramBot\Types\ForceReply;
use TelegramBot\Types\InlineKeyboardMarkup;
use TelegramBot\Types\Message;
use TelegramBot\Types\ReplyKeyboardMarkup;
use TelegramBot\Types\ReplyKeyboardRemove;

/**
 * Use this method to send text messages. On success, the sent Message is returned.
 * @see https://core.telegram.org/bots/api#sendmessage
 */
class SendMessage extends BaseMethod
{
    protected $endpoint = 'sendMessage';
    
    /**
     * Send request
     * @return static
     */
    public function send(): self
    {
        return parent::send()->getResultAs(Message::class);
    }
    
    //region PARAMETERS
    
    /**
     * [chat_id] Required.
     * Unique identifier for the target chat or username of the target channel (in the format [at]channelusername)
     * @param  int|string  $value
     * @return static
     */
    public function chatId($value): self
    {
        return $this->setRaw('chat_id', $value);
    }
    
    /**
     * [text] Required.
     * Text of the message to be sent
     * @param  string  $value
     * @return static
     */
    public function text($value): self
    {
        return $this->setRaw('text', $value);
    }
    
    /**
     * [parse_mode] Optional.
     * Send Markdown or HTML, if you want Telegram apps to show
     * bold, italic, fixed-width text or inline URLs in your bot's message.
     * @see https://core.telegram.org/bots/api#markdown-style Markdown
     * @see https://core.telegram.org/bots/api#html-style HTML
     * @see https://core.telegram.org/bots/api#formatting-options bold, italic, fixed-width text or inline URLs
     * @param  string  $value
     * @return static
     */
    public function parseMode($value): self
    {
        return $this->setRaw('parse_mode', $value);
    }
    
    /**
     * [disable_web_page_preview] Optional.
     * Disables link previews for links in this message
     * @param  bool  $value
     * @return static
     */
    public function disableWebPagePreview($value): self
    {
        return $this->setRaw('disable_web_page_preview', $value);
    }
    
    /**
     * [disable_notification] Optional.
     * Sends the message silently. Users will receive a notification with no sound.
     * @see https://telegram.org/blog/channels-2-0#silent-messages Silently
     * @param  bool  $value
     * @return static
     */
    public function disableNotification($value): self
    {
        return $this->setRaw('disable_notification', $value);
    }
    
    /**
     * [reply_to_message_id] Optional.
     * If the message is a reply, ID of the original message
     * @param  int  $value
     * @return static
     */
    public function replyToMessageId($value): self
    {
        return $this->setRaw('reply_to_message_id', $value);
    }
    
    /**
     * [reply_markup] Optional.
     * Additional interface options.
     * A JSON-serialized object for an inline keyboard, custom reply keyboard,
     * instructions to remove reply keyboard or to force a reply from the user.
     * @see https://core.telegram.org/bots#inline-keyboards-and-on-the-fly-updating inline keyboard
     * @see https://core.telegram.org/bots#keyboards custom reply keyboard
     * @param  InlineKeyboardMarkup|ReplyKeyboardMarkup|ReplyKeyboardRemove|ForceReply  $value
     * @return static
     */
    public function replyMarkup($value): self
    {
        return $this->setRaw('reply_to_message_id', $value);
    }
    
    //endregion
}