<?php

namespace App\Console\Commands;
use App\Models\Message_Log;
use Illuminate\Console\Command;

class SendMessage extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:send-message';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Send message to users after regular intervals';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $firstTwoRecords = Message_Log::where('status', false)->take(10)->get();
        
        foreach($firstTwoRecords as $item)
        {
        
         $template = $item->template->toArray();

        if($template['type'] == 'chat')
        {
            $url = 'https://api.ultramsg.com/instance85736/messages/chat';
            $params=array(
                'token' => 'o2uznzefj6qyd2oj',
                 'to' => $item->mobile,
                'body'=>$template['message']
                );
        }
        if($template['type'] == 'image')
        {
           $url = 'https://api.ultramsg.com/instance85736/messages/image';
           $params=array(
            'token' => 'o2uznzefj6qyd2oj',
            'to' => $item->mobile,
            'image' => $template['file'],
            'caption' => $template['message']
            );
            
        }
        if($template['type'] == 'pdf')
        {
            $url = 'https://api.ultramsg.com/instance85736/messages/document';
            $params=array(
                'token' => 'o2uznzefj6qyd2oj',
                'to' => $item->mobile,
                'filename' => 'banco.pdf',
                'document' => $template['file'],
                'caption' => $template['message']
                );
        }
        
         $curl = curl_init();
        curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded"
        ),
        ));
    
        $response = curl_exec($curl);
        $err = curl_error($curl);
        
        curl_close($curl);
        
        }
        Message_Log::where('status', false)->take(10)->update(['status' => true]);
    }
}
