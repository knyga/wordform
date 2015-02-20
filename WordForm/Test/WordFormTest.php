<?php

namespace WordForm\Test;

use WordForm\WordForm;

/**
 * Class WordFormTestCase
 *
 * @package WordForm\Test
 */
class WordFormTest extends \PHPUnit_Framework_TestCase
{
    protected function setUp() {

    }

    public  function testSingle() {
        $this->assertEquals(WordForm::run('coin', 1), 'coin');
    }

    public function testMultiple() {
        $this->assertEquals(WordForm::run('coin', 25), 'coins');
        $this->assertEquals(WordForm::run('coin', 25.22), 'coins');
    }
}