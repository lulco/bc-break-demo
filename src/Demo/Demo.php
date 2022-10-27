<?php

declare(strict_types=1);

namespace BcBreakDemo\Demo;

use Nette\PhpGenerator\Extractor;

final class Demo
{
    public function xxx(): void
    {
        $extractor = new Extractor(file_get_contents(__FILE__));
        $extractor->extractAll();
    }
}
