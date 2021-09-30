<?php

namespace Drupal\Tests\rector_examples\Functional;

use Drupal\Tests\BrowserTestBase;

class GetRawContentTest extends BrowserTestBase {

    /**
     * @doesNotPerformAssertions
     */
    public function testExample() {
        $this->drupalGet('/form-test/select');
        $this->getSession()->getPage()->getContent();
    }

}
