<?php

namespace App\Console\Commands;

use App\Imports\Productimport;
use App\Models\Product;
use Illuminate\Console\Command;
use Vtiful\Kernel\Excel;

class ImportExelCommand extends Command
{

    protected $signature = 'import:exel';

    protected $description = 'Get data from exel';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
		Excel::import(new Productimport(), 'users.xlsx');
    }
}
