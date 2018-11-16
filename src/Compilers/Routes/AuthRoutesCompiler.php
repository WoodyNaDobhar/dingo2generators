<?php

namespace WoodyNaDobhar\Dingo2Generators\Compilers\Routes;

use WoodyNaDobhar\Dingo2Generators\AbstractEntities\StubCompilerAbstract;

/**
 * Class AuthRoutesCompiler
 * @package WoodyNaDobhar\Dingo2Generators\Compilers
 */
class AuthRoutesCompiler extends StubCompilerAbstract
{

    /**
     * AuthRoutesCompiler constructor.
     *
     * @param null $saveToPath
     * @param null $saveFileName
     * @param null $stub
     */
    public function __construct($saveToPath = null, $saveFileName = null, $stub = null)
    {
        $saveToPath   = base_path(config('rest-api-generator.paths.routes'));
        $saveFileName = 'auth.php';

        parent::__construct($saveToPath, $saveFileName, $stub);
    }

    /**
     * @param array $params
     *
     * @return string
     */
    public function compile(array $params): string
    {
        $this->saveStub();

        return $this->stub;
    }
}