<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\TestesController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\TestesController Test Case
 *
 * @uses \App\Controller\TestesController
 */
class TestesControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Testes',
    ];
}
