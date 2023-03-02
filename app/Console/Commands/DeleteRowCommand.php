<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class DeleteRowCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
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
        DB::table('getdonate')->where('approved_date', '<=', Carbon::now()->subDays(2)&&'issue_date'=="")->delete();

        $rows = DB::table('products')->get();
        DB::table('products')->update([
            'bookquantity' =>$rows->bookquanity+1 
        ]);

    }
}
