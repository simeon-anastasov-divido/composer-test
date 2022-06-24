<?php

namespace Soulshards\Base;

class Soulshards{

    /**
     * The message
     *
     * @var string
     */
    private $msg;

    /**
     * Constructor
     *
     * @param string $msg
     */
    public function __construct(string $msg)
    {
        $this->msg = $msg;
    }

    public function getMsg(): string
    {
        return $this->msg;
    }
}
