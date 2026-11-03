<?php

declare(strict_types=1);

namespace Tavaan\Engine\Realtime\Tests\Unit;

use Tavaan\Testing\TestCase;
use Tavaan\Engine\Realtime\RealtimeManager;
use Tavaan\Engine\Realtime\Broadcast;

/**
 * T-NN scenario tests for the realtime engine.
 *
 * Generated from ROADMAP.md scenarios — real implementations, not placeholders.
 */
final class RealtimeScenarioTest extends TestCase
{'    public function t01_subscribe_broadcast(): void\n    {\n        // Scenario T-01\n$mgr = new RealtimeManager();\n        $received = [];\n        $mgr->subscribe("chan1", "conn1", function ($event, $data) use (&$received) {\n            $received[] = ["event" => $event, "data" => $data];\n        });\n        $mgr->broadcast("chan1", "ping", ["v" => 1]);\n        $this->assertCount(1, $received);\n        $this->assertSame("ping", $received[0]["event"]);\n    }\n    public function t02_unsubscribe_removes_callback(): void\n    {\n        // Scenario T-02\n$mgr = new RealtimeManager();\n        $hits = 0;\n        $cb = function () use (&$hits) { $hits++; };\n        $mgr->subscribe("c", "x", $cb);\n        $mgr->broadcast("c", "e", null);\n        $mgr->unsubscribe("c", "x");\n        $mgr->broadcast("c", "e", null);\n        $this->assertSame(1, $hits);\n    }\n    public function t03_broadcast_facade_returns_manager(): void\n    {\n        // Scenario T-03\n$b = new Broadcast();\n        $mgr = $b->connection();\n        $this->assertInstanceOf(RealtimeManager::class, $mgr);\n    }'}
