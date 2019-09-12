<?php

use App\Brand;
use App\Course;
use App\LiveEvent;
use App\User;
use Illuminate\Database\Seeder;

class EverythingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /* Users */
        User::create([
            'name' => 'Jamie Smith',
            'email' => 'jamie@hackathon.radical',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Sam Finery',
            'email' => 'sam@hackathon.radical',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Max Splendour',
            'email' => 'max@hackathon.radical',
            'password' => bcrypt('password')
        ]);
        User::create([
            'name' => 'Pedro Ramez',
            'email' => 'pedro@hackathon.radical',
            'password' => bcrypt('password'),
            'locale' => 'es'
        ]);
        User::create([
            'name' => 'Lieselotte Schmidt',
            'email' => 'lieselotte@hackathon.radical',
            'password' => bcrypt('password'),
            'locale' => 'de'
        ]);

        /* Brands */
        Brand::create([
            'handle' => 'radical',
            'name' => 'Radical Departures'
        ]);
        Brand::create([
            'handle' => 'sanofi',
            'name' => 'Sanofi'
        ]);
        Brand::create([
            'handle' => 'bausch',
            'name' => 'Bausch and Lomb'
        ]);
        Brand::create([
            'handle' => 'novartis',
            'name' => 'Novartis'
        ]);

        /* Courses */
        Course::create([
            'title' => 'Course 1',
            'img' => 'course-1',
            'description' => 'This is a course where you will learn things.'
        ]);
        Course::create([
            'title' => 'Course 2',
            'img' => 'course-2',
            'description' => 'This is a course where you will learn things.'
        ]);
        Course::create([
            'title' => 'Course 3',
            'img' => 'course-3',
            'description' => 'This is a course where you will learn things.'
        ]);
        Course::create([
            'title' => 'Course 4',
            'img' => 'course-4',
            'description' => 'This is a course where you will learn things.'
        ]);
        Course::create([
            'title' => 'Course 5',
            'img' => 'course-5',
            'description' => 'This is a course where you will learn things.'
        ]);
        Course::create([
            'title' => 'Course 6',
            'img' => 'course-6',
            'description' => 'This is a course where you will learn things.'
        ]);
        Course::create([
            'title' => 'Course 7',
            'img' => 'course-7',
            'description' => 'This is a course where you will learn things.'
        ]);

        /* Live Events */
        LiveEvent::create([
            'title' => 'Health and Safety Training',
            'description' => 'Learn how to be healthy and/or safe',
            'location' => 'Behind the skip',
            'happens_at' => '2019-09-14 09:00'
        ]);
        LiveEvent::create([
            'title' => 'First Aid',
            'description' => 'Put bandages on humans',
            'location' => 'The Old Signal Box',
            'happens_at' => '2019-09-15 09:00'
        ]);

        /* Links */
        $courseLinks = [
            'Jamie' => ['Course 1', 'Course 2', 'Course 3', 'Course 4'],
            'Sam' => ['Course 3', 'Course 4', 'Course 5', 'Course 6'],
            'Max' => ['Course 5', 'Course 6', 'Course 7', 'Course 1'],
            'Pedro' => ['Course 5', 'Course 6', 'Course 7', 'Course 1'],
            'Lieselotte' => ['Course 5', 'Course 6', 'Course 7', 'Course 1'],
        ];
        foreach($courseLinks as $name => $courseNames) {
            $user = User::where('name', 'like', "$name%")->first();
            foreach($courseNames as $courseName) {
                $course = Course::where('title', 'like', "$courseName%")->first();
                $user->courses()->attach($course);
            }
        }

        $liveEventLinks = [
            'Sam' => ['Health and Safety', 'First Aid'],
        ];
        foreach($liveEventLinks as $name => $eventNames) {
            $user = User::where('name', 'like', "$name%")->first();
            foreach($eventNames as $eventName) {
                $event = LiveEvent::where('title', 'like', "$eventName%")->first();
                $user->events()->attach($event);
            }
        }


    }
}
