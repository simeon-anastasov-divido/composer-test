<?php 

declare(strict_types=1);

use PHPUnit\Framework\TestCase;
use Soulshards\Base\Soulshards;

final class StackTest extends TestCase
{
    /**
     * The test message
     *
     * @var string
     */
    private $message;

    public function setUp():void {
        $this->message = "Hey!";
    }

    /**
     * Tests whether the Soulshards class is working correctly
     *
     * @covers Soulshards\Base\Soulshards
     * 
     * @return void
     */
    public function testBase(): void
    {
        $ss = new Soulshards($this->message);
        $this->assertSame($this->message, $ss->getMsg());
    }
}