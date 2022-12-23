<?php

namespace Sideso\SMS;

use Illuminate\Support\Arr;
use Illuminate\Support\Carbon;

class Message
{
    /**
     * The message recipients.
     *
     * @var array
     */
    public ?string $to;

    /**
     * The message callback.
     *
     * @var callable
     */
    public $callback;

    /**
     * The message was successfully sent.
     */
    public bool $sent = false;

    /**
     * Id of the message in the provider.
     */
    public ?string $provider_msg_id = null;

    /**
     * The SMS provider
     */
    public ?string $provider = null;

    /**
     * The message content.
     *
     * @var string
     */
    public string $content;

    /**
     * The sander_code the message should be sent from.
     *
     * @var string
     */
    public string $source_code = '';

    /**
     * Request Delivery Receipt.
     */
    public bool $request_dlvr_rcpt = false;

    /**
     * Priority of the message.
     */
    public bool $priority = false;

    /**
     * Flash message.
     */
    public bool $flash = false;

    /**
     * Send date.
     */
    public ?Carbon $send_date = null;

    /**
     * Tags.
     */
    public array $tags = [];

    /**
     * Create a new message instance.
     *
     * @param string $content
     * @return void
     */
    public function __construct($content = '')
    {
        $this->content = $content;
    }

    /**
     * Set the message content.
     *
     * @param string $content
     * @return $this
     */
    public function content($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Set the Source Code name to be used as origin.
     *
     * @param string $source_code
     * @return $this
     */
    public function sourceCode($source_code)
    {
        $this->source_code = $source_code;

        return $this;
    }

    /**
     * Set the request_dlvr_rcpt.
     *
     * @param bool $request_dlvr_rcpt
     * @return $this
     */
    public function requestProofOfDelivery($request_dlvr_rcpt)
    {
        $this->request_dlvr_rcpt = $request_dlvr_rcpt;

        return $this;
    }

    /**
     * Set the priority.
     *
     * @param bool $priority
     * @return $this
     */
    public function priority($priority)
    {
        $this->priority = $priority;

        return $this;
    }

    /**
     * Set the flash.
     *
     * @param bool $flash
     * @return $this
     */
    public function flash($flash)
    {
        $this->flash = $flash;

        return $this;
    }

    /**
     * Set the send_date.
     *
     * @param Carbon $send_date
     * @return $this
     */
    public function sendDate($send_date)
    {
        $this->send_date = $send_date;

        return $this;
    }

    /**
     * Set the message callback.
     *
     * @param callable $callback
     * @return $this
     */
    public function withCallback(callable $callback)
    {
        $this->callback = $callback;

        return $this;
    }

    /**
     * Set the message provider.
     *
     * @param string $provider
     * @return $this
     */
    public function provider($provider)
    {
        $this->provider = $provider;

        return $this;
    }

    /**
     * Set the message tags.
     *
     * @param array $tags
     * @return $this
     */
    public function tags($tags)
    {
        $this->tags = $tags;

        return $this;
    }
}
