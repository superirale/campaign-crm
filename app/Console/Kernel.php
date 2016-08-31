<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

use App\Models\Campaign;
use App\Models\Contact;
use App\Models\CampaignContactGroup;
use App\Models\ContactGroup;
use Carbon\Carbon;
use App\Mail\MailSender;
use Mail;

class Kernel extends ConsoleKernel
{
    /**
     * The Artisan commands provided by your application.
     *
     * @var array
     */
    protected $commands = [
        //
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')
        //          ->hourly();
         $schedule->call(function () {

        $campaigns = Campaign::all();
        foreach ($campaigns as $campaign) {
                        if($campaign->scheduled_date <= Carbon::now()){
                        //get campaign contact groups
                        $lists = CampaignContactGroup::with(['group' => function ($q)
                        {
                            $q->with('contactgroup');
                        }])->where('campaign_id', $campaign->id)->get();
                        foreach ($lists as $list) {
                            $contact_id = ContactGroup::select('contact_id')->where('group_id', $list->group_id)->get();

                            $message = $campaign->message;

                            foreach ($contact_id as $cont) {

                                $contact = Contact::find($cont->contact_id);

                                if($contact->email != '')
                                    Mail::to($contact->email)->send(new MailSender($campaign, $contact));
                            }
                        }


                        }
                    }
        })->everyMinute();

    }

    /**
     * Register the Closure based commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        require base_path('routes/console.php');
    }
}
