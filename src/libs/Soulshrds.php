<?php

namespace Soulshards\Base;

class Soulshards{

    private $msg;

    public function __construct(string $msg): void
    {
        $this->msg = $msg;
    }

    public function getMsg(): string
    {
        return $this->msg;
    }
}
