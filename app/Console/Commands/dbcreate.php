<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class dbcreate extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'db:create {name?}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command to create database if does not exists';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(): int
    {
        // Check if parameters passed or use default params
        $database = $this->argument('name') ?: config("database.connections.mysql.database");
        $charset = config("database.connections.mysql.charset", 'utf8mb4');
        $collation = config("database.connections.mysql.collation", 'utf8mb4_unicode_ci');

        // Unselect current MySql database
        $this->setDatabase(null);

        // Run the query to create new database (if it does not exist)
        $this->createDatabase($database, $charset, $collation);

        // Check for database existence and inform the user
        if ($this->databaseExists($database)) {
            echo __("Database $database created with success or already exists." . PHP_EOL);
        } else {
            echo __('Failed to create database.' . PHP_EOL);
        }

        // Set the database back to previous value
        $this->setDatabase($database);

        return 0;
    }

    private function setDatabase($databaseName): void
    {
        config(["database.connections.mysql.database" => $databaseName]);
    }

    private function createDatabase($database, $charset, $collation): void
    {
        $query = "CREATE DATABASE IF NOT EXISTS $database CHARACTER SET $charset COLLATE $collation;";
        DB::statement($query);
    }

    private function databaseExists($database): bool
    {
        $query = "SELECT SCHEMA_NAME FROM INFORMATION_SCHEMA.SCHEMATA WHERE SCHEMA_NAME = ?";
        $db = DB::select($query, [$database]);

        return !empty($db);
    }
}
