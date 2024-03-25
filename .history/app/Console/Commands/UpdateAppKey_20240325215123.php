<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class UpdateAppKey extends Command
{
    protected $signature = 'app:update-key {key}';

    protected $description = 'Update the APP_KEY value in the environment file';

    public function handle()
    {
        try {
            $key = $this->argument('key');
            $filePath = app()->environmentFilePath();
            $contents = file_get_contents($filePath);

            if ($contents !== false) {
                $newContents = preg_replace(
                    $this->keyReplacementPattern(),
                    'APP_KEY=' . $key,
                    $contents
                );

                if ($newContents !== null) {
                    $result = file_put_contents($filePath, $newContents);

                    if ($result !== false) {
                        $this->info("APP_KEY updated successfully.");
                    } else {
                        $this->error("Failed to update APP_KEY: Unable to write to file.");
                    }
                } else {
                    $this->error("Failed to update APP_KEY: Regular expression pattern match failed.");
                }
            } else {
                $this->error("Failed to update APP_KEY: Unable to read file.");
            }
        } catch (\Exception $e) {
            $this->error("Failed to update APP_KEY: " . $e->getMessage());
        }
    }

    protected function keyReplacementPattern()
    {
        // Your key replacement pattern logic here
    }
}
