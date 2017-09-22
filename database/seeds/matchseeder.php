<?php

use Illuminate\Database\Seeder;

class matchseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
                DB::table('matches')->insert(array(
        	array('home'=>'MC','way'=>'MU','home_goal'=>'','way_goal'=>'','home_rate'=>'2','equal'=>'1','way_rate'=>'3','time_start'=>'01:45:00','time_end'=>'4:00:00','time_bets'=>'2017-08-10 09:00:00','date'=>'2017-08-12','public'=>'1'),
         	array('home'=>'Chealsea','way'=>'ARS','home_goal'=>'1','way_goal'=>'2','home_rate'=>'4','equal'=>'1','way_rate'=>'2','time_start'=>'01:45:00','time_end'=>'04:00:00','time_bets'=>'2017-02-19 00:00:00','date'=>'2017-01-20','public'=>'1'),
        	array('home'=>'Spain','way'=>'Russian','home_goal'=>'','way_goal'=>'','home_rate'=>'2','equal'=>'4','way_rate'=>'5','time_start'=>'21:45:00','time_end'=>'2017-08-12 00:00:00','time_bets'=>'17:00:00','date'=>'2017-08-22','public'=>'1'),
        	array('home'=>'VietNam','way'=>'Laos','home_goal'=>'','way_goal'=>'','home_rate'=>'3','equal'=>'5','way_rate'=>'7','time_start'=>'2017-03-19 17:45:00','time_end'=>'19:30:00','time_bets'=>'12:00:00','date'=>'2017-09-02','public'=>'1'),
        	array('home'=>'Korea','way'=>'Japan','home_goal'=>'','way_goal'=>'','home_rate'=>'3','equal'=>'4','way_rate'=>'6','time_start'=>'18:45:00','time_end'=>'20:45:00','time_bets'=>'2017-04-19 12:00:00','date'=>'2017-09-02','public'=>'1'),
        	array('home'=>'Barca','way'=>'Real','home_goal'=>'6','way_goal'=>'0','home_rate'=>'3','equal'=>'2','way_rate'=>'7','time_start'=>'01:45:00','time_end'=>'03:30:00','time_bets'=>'2017-05-19 00:00:00','date'=>'2017-04-22','public'=>'1'),
        	array('home'=>'Liv','way'=>'MU','home_goal'=>'','way_goal'=>'','home_rate'=>'4','equal'=>'2','way_rate'=>'3','time_start'=>'02:45:00','time_end'=>'04:30:00','time_bets'=>'2017-06-19 1:00:00','date'=>'2017-08-15','public'=>'0'),
        	array('home'=>'Top','way'=>'MC','home_goal'=>'','way_goal'=>'','home_rate'=>'3','equal'=>'2','way_rate'=>'5','time_start'=>'03:45:00','time_end'=>'04:30:00','time_bets'=>'2017-07-19 01:00:00','date'=>'2017-07-18','public'=>'0'),

            array('home'=>'Top','way'=>'LIV','home_goal'=>'','way_goal'=>'','home_rate'=>'3','equal'=>'2','way_rate'=>'5','time_start'=>'03:45:00','time_end'=>'04:30:00','time_bets'=>'2017-01-19 01:00:00','date'=>'2017-07-15','public'=>'1'),

            array('home'=>'ARS','way'=>'PSG','home_goal'=>'','way_goal'=>'','home_rate'=>'3','equal'=>'2','way_rate'=>'5','time_start'=>'03:45:00','time_end'=>'04:30:00','time_bets'=>'2017-02-19 01:00:00','date'=>'2017-08-18','public'=>'1')
      	));
    }
}
