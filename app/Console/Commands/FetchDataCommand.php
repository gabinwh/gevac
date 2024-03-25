<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Log;

class FetchDataCommand extends Command
{
    protected $signature = 'fetch:data';
    protected $description = 'Fetch data from the API and store it in the database';

    public function handle()
    {
        try {
            $this->info('Fetching data...');

            app()->call('App\Http\Controllers\ImportacaoController@scheduleFetchData');


            $this->info('Data fetched successfully!');
        } catch (\Exception $e) {
            Log::error('An error occurred while fetching data: ' . $e->getMessage());
            $this->error('An error occurred while fetching data. See the logs for more details.');
        }
    }
}
