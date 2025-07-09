<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Job
{
    public static function all(): array
    {
        return [
            ['id' => 1, 'title' => 'Software Engineer', 'company' => 'Tech Corp', 'location' => 'New York'],
            ['id' => 2, 'title' => 'Data Scientist', 'company' => 'Data Solutions', 'location' => 'San Francisco'],
            ['id' => 3, 'title' => 'Web Developer', 'company' => 'Web Innovations', 'location' => 'Los Angeles']
        ];
    }

    public static function find(int $id):array
    {
        $job= Arr::first(static::all(),fn($job)=>$job['id']==$id);
        if (!$job) {
            //throw new \Exception("Job with ID {$id} not found.");
            abort(404);
        }
    }
}
