<?php

use League\Flysystem\Filesystem;

use Ellipse\Factories\LocalFilesystemFactory;

describe('LocalFilesystemFactory', function () {

    describe('::create()', function () {

        it('should proxy the ->__invoke() method', function () {

            $test = LocalFilesystemFactory::create('root');

            expect($test)->to->be->an->instanceof(Filesystem::class);

        });

    });

    describe('->__invoke()', function () {

        it('should return a new Filesystem with the given root', function () {

            $factory = new LocalFilesystemFactory;

            $test = $factory('root');

            expect($test)->to->be->an->instanceof(Filesystem::class);

        });

    });

});
