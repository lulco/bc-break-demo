<?php

declare(strict_types=1);

namespace BcBreakDemo\Demo;

use Nette\Forms\Rendering\DefaultFormRenderer;
use Nette\PhpGenerator\Extractor;

final class Demo extends DefaultFormRenderer
{
    public function xxx(): void
    {
        $extractor = new Extractor(file_get_contents(__FILE__));
        $extractor->extractAll();
    }
}
