<?php

namespace App\Console\Commands;

use App\Traits\GeneratorTrait;
use Illuminate\Console\GeneratorCommand;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Attribute\AsCommand;

#[AsCommand(name: 'dd:model')]
class MakeModelCommand extends GeneratorCommand
{
    use GeneratorTrait;
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'dd:model {name} {--D|domain=}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new Eloquent model class for domain';

    protected $type = 'model';

    protected function stubName(): string
    {
        return 'model';
    }

    protected function getOptions()
    {
        return [
            ['domain', 'd', InputOption::VALUE_REQUIRED, 'Generate Model for domain']
        ];
    }
}
