<?php namespace Casaoeste\Console\Commands;

use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

use Casaoeste\Importers\MediaService;

class MediaImporter extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'mediaimporter';
    protected $mediaservice;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description.';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct(MediaService $mediaservice)
    {

        parent::__construct();
        $this->mediaservice = $mediaservice;
    }

    /**
     * Execute the console command.
     *s
     * @return mixed
     */
    public function fire()
    {
        //$name = $this->input->getArgument("name");
        var_dump($this->mediaservice->getUsers());
        //$this->info("Hello");
    }

    /**
     * Get the console command arguments.
     *
     * @return array
     */
    protected function getArguments()
    {
        return [
            ['name', InputArgument::REQUIRED, 'An example argument.'],
        ];
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['name', null, InputOption::VALUE_OPTIONAL, 'An example option.', null],
        ];
    }
}
