<?php

namespace App\Tests\Unit;

use PHPUnit\Framework\TestCase;

use App\Controller\BookController;

class BookControllerTest extends TestCase
{
    public function testRunning(): void
    {
        $this->assertTrue(true);
    }

    /**
     * Returns an array with books used to test the application endpoints
     * 
     * @return mixed
     */
    public static function booksDataProvider(): array
    {
        return [];
    }
}