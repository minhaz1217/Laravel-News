<?php

namespace App\Console\Commands;

use App\Company;
use Illuminate\Console\Command;

class AddCompanyCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'contact:company {name=Dummy} {phone?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Adds a new company with name and phone number to the database';

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
     * @return mixed
     */
    public function handle()
    {

        $name = $this->argument('name');
        $phone = $this->argument('phone')??'N/A';

        $name = $this->ask("What is the company name?");
        $phone = $this->ask("What is the company phone number?");

        if($this->confirm("Are you ready to insert" .$name ."?")){
            $company = Company::create([
                'name' => $name,
                'phone' => $phone,
            ]);
            $this->info("Added Company: ". $name);
        }else{
            $this->info("Company wasn't added");
        }



//        $this->warn("This is a warning");
//        $this->error("This is an error");
    }
}
