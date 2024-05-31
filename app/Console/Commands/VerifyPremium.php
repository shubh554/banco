<?php

namespace App\Console\Commands;
use App\Models\Premium_Dealer_Contact;
use Illuminate\Console\Command;
use App\Services\VerifyService;


class VerifyPremium extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:verify-premium';
    protected $VerifyService;


    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Verify wether a premium dealer contact exists on whatsapp';

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
        $firstTwoRecords = Premium_Dealer_Contact::where('verified', 2)->take(2)->get();
        $firstTwoRecords = $firstTwoRecords->toArray(); 

        $test = $this->VerifyService->verify($firstTwoRecords,'premium_dealer_contact'); 

    }
}
