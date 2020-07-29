<?php

use Illuminate\Database\Seeder;
use App\Mailbox;

class MailboxSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Mailbox::class,10)->create();
        //https://www.youtube.com/watch?v=V5xINbA-z9o&t=329s
        //6:19
        $status = array('inbox','trash','draft','spam');
        foreach(Mailbox::all() as $mailbox){
            $users = \App\User::inRandomOrder()->take(rand(1,9))->pluck('id');
            foreach ($users as $user) {
                $mailbox->users()->attach($user,['status'=>$status[rand(0,3)],'starred'=>rand(0,1),'read'=>rand(0,1)]);
            }
        }
//        App\Mailbox::create([
//            'user_id' => 1,
//            'type' => 'Internal Mail',
//            'subject' => 'Mail Subject',
//            'parent' =>0,
//            'message' => '<p>Mail body</p>',
//        ]);
    }
}
