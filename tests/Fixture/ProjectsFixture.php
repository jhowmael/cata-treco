<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjectsFixture
 */
class ProjectsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'text' => 'Lorem ipsum dolor sit amet',
                'link' => 'Lorem ipsum dolor sit amet',
                'created' => '2023-01-11 01:27:43',
                'modified' => '2023-01-11 01:27:43',
            ],
        ];
        parent::init();
    }
}
