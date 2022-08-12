<?php

namespace ITColima\SiitecApi\Model\App;

use JsonSerializable;

class Email implements JsonSerializable
{
    private $to = [];
    private $cc = [];
    private $bcc = [];
    private $replyTo = [];
    private $contentType = 'text/plain';
    private $charset = null;
    private $subject = '';
    private $body = '';

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
