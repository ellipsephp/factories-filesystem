<?php

namespace Ellipse\Factories;

use League\Flysystem\Filesystem;
use League\Flysystem\Adapter\Local;

class LocalFilesystemFactory
{
    /**
     * Allow to use the factory statically.
     *
     * @param string $root
     * @return \League\Flysystem\Filesystem
     */
    public function create(string $root): Filesystem
    {
        return (new LocalFilesystemFactory)($root);
    }

    /**
     * Make a new local filesystem with the given root.
     *
     * @param string $root
     * @return \League\Flysystem\Filesystem
     */
    public function __invoke(string $root): Filesystem
    {
        $adapter = new Local($root);

        return new Filesystem($adapter);
    }
}
