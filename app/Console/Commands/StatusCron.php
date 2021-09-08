<?php

namespace App\Console\Commands;

use App\Model\Form;
use Illuminate\Console\Command;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class StatusCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'status:cron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Cek expired undangan perhari';

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
        \Log::info("Cron is working fine!");

        /*
           Write your database logic we bellow:
           Item::create(['name'=>'hello new']);
        */

//        $free   = Form::where('is_create', 1)->where('')->where('created_at', '<=', Carbon::now()->subDays(7)->toDateTimeString())->get();
//        $entry  = Form::where('is_create', 1)->where('created_at', '<=', Carbon::now()->subMonths(1)->toDateTimeString())->get();
//        $pro    = Form::where('is_create', 1)->where('created_at', '<=', Carbon::now()->subDays(6)->toDateTimeString())->get();


        $free = DB::table('form')->select('form.id', 'form.id_user', 'form.is_active', 'form.is_create', 'form.created_at')
                ->join('users', 'users.id', '=', 'form.id_user')
                ->where('users.id_paket', '=', 1)
                ->where('form.is_create', '=', 1)
                ->where('form.created_at', '<=', Carbon::now()->subDays(3)->toDateTimeString())
                ->update(['form.is_active' => 0]);

        if ($free != 0){
            Log::info("Cron Update Status Account Free: Command for free account successfully!");
        }

        $entry = DB::table('form')->select('form.id', 'form.id_user', 'form.is_active', 'form.is_create', 'form.created_at')
            ->join('users', 'users.id', '=', 'form.id_user')
            ->where('users.id_paket', '=', 2)
            ->where('form.is_create', '=', 1)
            ->where('form.created_at', '<=', Carbon::now()->subMonths(1)->toDateTimeString())
            ->update(['form.is_active' => 0]);

        if ($entry != 0){
            Log::info("Cron Update Status Account Free: Command for entry account successfully!");
        }

        $pro = DB::table('form')->select('form.id', 'form.id_user', 'form.is_active', 'form.is_create', 'form.created_at')
            ->join('users', 'users.id', '=', 'form.id_user')
            ->where('users.id_paket', '=', 3)
            ->where('form.is_create', '=', 1)
            ->where('form.created_at', '<=', Carbon::now()->subMonths(6)->toDateTimeString())
            ->update(['form.is_active' => 0]);

        if ($pro != 0){
            Log::info("Cron Update Status Account Free: Command for pro account successfully!");
        }

//        foreach($free as $qFree){
////            $qFree->is_active = 1;
////            $qFree->update([$qFree->is_active => 1]);
//            $this->info($qFree->id);
//            fre
//        }

//            $this->info($free);

//        $this->info('Demo:Cron Cummand Run successfully!');
    }
}
