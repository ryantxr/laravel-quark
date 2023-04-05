<?php
namespace Ryantxr\LaravelQuark;
class Hello
{
    protected $s;
    public function __construct(string $s)
    {
        $this->s = $s;
    }

    public function str() : string
    {
        return $this->s;
    }

}