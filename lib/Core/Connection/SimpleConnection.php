<?php

namespace Phpactor\LanguageServer\Core\Connection;

use Phpactor\LanguageServer\Core\Connection;
use Phpactor\LanguageServer\Core\IO;

class SimpleConnection implements Connection
{
    /**
     * @var IO
     */
    private $io;

    public function __construct(IO $io)
    {
        $this->io = $io;
    }

    public function accept(): IO
    {
        return $this->io;
    }

    public function shutdown()
    {
    }

    public function reset(): void
    {
    }
}
