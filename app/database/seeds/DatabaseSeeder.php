<?php

class DatabaseSeeder extends Seeder {

    /**
     * Tables to seed
     *
     * @var array
     */
    protected $tables = [
        'users',
        'statuses'
    ];

    /**
     * Seeder names for each table
     *
     * @var array
     */
    protected $seeders = [
        'UsersTableSeeder',
        'StatusesTableSeeder'
    ];

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

        $this->cleanDatabase();

        foreach ($this->seeders as $seeder) {
            $this->call($seeder);
        }

    }

    /**
     *Function to clean database before seeding
     */
    private function cleanDatabase()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement('SET FOREIGN_KEY_CHECKS=1 ');

    }

}
