<?php

namespace App\Console\Commands;
use App\Models\Mechanic_Contact;
use Illuminate\Console\Command;
use App\Services\VerifyService;

class VerifyMechanic extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verify-mechanic';
    protected $VerifyService;

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify wether a mechanic contact exists on whatsapp';

    /**
     * Execute the console command.
     */

     public function __construct(VerifyService $VerifyService)
     {
         parent::__construct();
         $this->VerifyService = $VerifyService;
     }

    public function handle()
    {
        $firstTwoRecords = Mechanic_Contact::where('verified', 2)->take(2)->get();
        $firstTwoRecords = $firstTwoRecords->toArray();

        $test = $this->VerifyService->verify($firstTwoRecords,'mechanic_contacts'); 
    }
}
