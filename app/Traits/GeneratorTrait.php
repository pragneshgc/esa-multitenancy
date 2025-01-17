<?php

namespace App\Traits;

trait GeneratorTrait
{
    protected string $domain;
    protected function alreadyExists($rawName): bool
    {
        return class_exists($rawName) || $this->files->exists($this->getPath($this->qualifyClass($rawName)));
    }

    protected function getStub(): string
    {
        return $this->resolveStubPath("/stubs/{$this->stubName()}.stub");
    }

    protected function resolveStubPath(string $stub): string
    {
        return file_exists($customPath = $this->laravel->basePath(trim($stub, '/')))
            ? $customPath
            : __DIR__ . $stub;
    }

    protected function getDefaultNamespace($rootNamespace): string
    {
        $this->getDomain();
        return 'Domain\\' . $this->domain . '\\' . config("make-command.folders.{$this->type}");
        //return $rootNamespace . '\\' . $this->stubName();
    }

    protected function rootNamespace()
    {
        $this->getDomain();
        return 'Domains\\' . $this->domain . '\\' . config("make-command.folders.{$this->type}");
    }

    protected function getDomain()
    {
        $this->domain = $this->option('domain');
    }
}