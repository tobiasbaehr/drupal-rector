<?php declare(strict_types=1);

namespace DrupalRector\Tests\Rector\Deprecation\UiHelperTraitDrupalPostFormRector;

use Iterator;
use Rector\Testing\PHPUnit\AbstractRectorTestCase;
use Symplify\SmartFileSystem\SmartFileInfo;

/**
 * @coversDefaultClass \DrupalRector\Rector\Deprecation\DatetimeStorageTimezoneRector
 */
class UiHelperTraitDrupalPostFormRectorTest extends AbstractRectorTestCase {

    /**
     * @covers ::refactor
     * @dataProvider provideData()
     */
    public function test(SmartFileInfo $fileInfo): void
    {
        $this->markTestIncomplete(
            'Fails since BrowserTestBase cannot be resolved, will work when drupal/core added as a dev dependency.'
        );
        $this->doTestFileInfo($fileInfo);
    }

    /**
     * @return Iterator<SmartFileInfo>
     */
    public function provideData(): Iterator
    {
        return $this->yieldFilesFromDirectory(__DIR__ . '/fixture');
    }

    public function provideConfigFilePath(): string
    {
        // must be implemented
        return __DIR__ . '/config/configured_rule.php';
    }

}
