<?php
/**
 * Tests for AvalancheMesh
 */

use PHPUnit\Framework\TestCase;
use Avalanchemesh\Avalanchemesh;

class AvalanchemeshTest extends TestCase {
    private Avalanchemesh $instance;

    protected function setUp(): void {
        $this->instance = new Avalanchemesh(['verbose' => false]);
    }

    public function testCanCreateInstance(): void {
        $this->assertInstanceOf(Avalanchemesh::class, $this->instance);
    }

    public function testExecuteReturnsSuccess(): void {
        $result = $this->instance->execute();
        $this->assertTrue($result['success']);
        $this->assertArrayHasKey('message', $result);
    }
}
