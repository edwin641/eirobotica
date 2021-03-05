<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Course;

class CourseQuestions extends Component
{
    public $course_id, $comment;
    protected $rules= [
        'comment' => 'required',
                  
    ];
      

    public function mount(Course $course){
        $this->course_id = $course->id;
    }
    public function render()
    {
        $course = Course::find($this->course_id);
        return view('livewire.course-questions', compact('course'));
    }

    public function store(){
         $rules= [
            'comment' => 'required',
                       
        ];
        $this->validate($rules);
        $course = Course::find($this->course_id);
        
        $course->questions()->create([
            'comment' => $this->comment,            
            'user_id' =>  auth()->user()->id
        ]);
       
    }
    
   
}
