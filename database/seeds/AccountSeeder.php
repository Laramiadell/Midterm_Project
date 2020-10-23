<?php

use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'user_id'     => 1,
                'acct_name'   => 'Lara LMD. Regular Account',
                'init_invest' => 20000,
                'start_date'  => '2020-07-03',
                'remarks'     => 'Done with the transaction'
            ],
            [
                'user_id'     => 2,
                'acct_name'   => 'Matarlo G. Regular Account',
                'init_invest' => 25000,
                'start_date'  => '2020-08-20',
                'remarks'     => 'Done with the transaction'
            ],
            [
                'user_id'     => 3,
                'acct_name'   => 'Cosinero JM. Regular Account',
                'init_invest' => 30000,
                'start_date'  => '2020-09-02',
                'remarks'     => 'Done with the transaction'
            ]
        ];

        foreach($data as $acc) {
            \App\Accounts::create($acc);
        }
    }
}
