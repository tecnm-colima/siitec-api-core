<?php

namespace ITColima\SiitecApi\Model\App;

use Francerz\PowerData\Objects;
use JsonSerializable;
use Psr\Http\Message\MessageInterface;
use RuntimeException;

class Email implements JsonSerializable
{
    /** @var string[] */
    private $to = [];
    /** @var string[] */
    private $cc = [];
    /** @var string[] */
    private $bcc = [];
    /** @var string[] */
    private $replyTo = [];
    /** @var string */
    private $contentType = 'text/plain';
    /** @var string|null */
    private $charset = null;
    /** @var string */
    private $subject = '';
    /** @var string */
    private $body = '';

    public static function fromHttpMessage(MessageInterface $message)
    {
        $content = (string)$message->getBody();
        $data = json_decode($content);
        if (!is_object($data)) {
            throw new RuntimeException('Invalid message content');
        }
        return Objects::cast($data, static::class);
    }

    public function jsonSerialize()
    {
        return array(
            'to' => $this->to,
            'cc' => $this->cc,
            'bcc' => $this->bcc,
            'replyTo' => $this->replyTo,
            'contentType' => $this->contentType,
            'charset' => $this->charset,
            'subject' => $this->subject,
            'body' => $this->body
        );
    }

    public function addTo(string $address, ?string $name = null)
    {
        if (isset($name)) {
            $this->to[$address] = $name;
        } else {
            $this->to[] = $address;
        }
    }

    public function getTo()
    {
        return $this->to;
    }

    public function addCc(string $address, ?string $name = null)
    {
        if (isset($name)) {
            $this->cc[$address] = $name;
        } else {
            $this->cc[] = $address;
        }
    }

    public function getCc()
    {
        return $this->cc;
    }

    public function addBcc(string $address, ?string $name = null)
    {
        if (isset($name)) {
            $this->bcc[$address] = $name;
        } else {
            $this->bcc[] = $address;
        }
    }

    public function getBcc()
    {
        return $this->bcc;
    }

    public function addReplyTo(string $address, ?string $name = null)
    {
        if (isset($name)) {
            $this->replyTo[$address] = $name;
        } else {
            $this->replyTo[] = $address;
        }
    }

    public function getReplyTo()
    {
        return $this->replyTo;
    }

    public function setContentType(string $contentType)
    {
        $this->contentType = $contentType;
    }

    public function getContentType()
    {
        return $this->contentType;
    }

    public function setSubject(string $subject)
    {
        $this->subject = $subject;
    }

    public function getSubject()
    {
        return $this->subject;
    }

    public function setBody(string $body)
    {
        $this->body = $body;
    }

    public function getBody()
    {
        return $this->body;
    }
}
