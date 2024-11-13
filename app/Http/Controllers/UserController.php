<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use App\Models\User;
use App\Models\Course;

class UserController extends Controller
{
    public function showUser($profileId){
        $profile = Profile::with('user')->findOrFail($profileId);
        return view ('show', ['profile' => $profile]);
    }

    public function showCourses($userId)
    {
        $user = User::findOrFail($userId);
        $courses = $user->courses;
        return view('user.courses', compact('user', 'courses'));
    }

    public function users($courseId)
    {
        $course = Course::with('users')->findOrFail($courseId);
        $user = $course->user;
        return view('courses', ['course' => $course, 'user' => $user]);
    }
}