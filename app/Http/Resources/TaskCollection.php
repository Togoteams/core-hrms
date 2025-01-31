<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskCollection extends JsonResource
{
    /**
     * Transform the resource collection into an array.
     *
     * @return array<int|string, mixed>
     */
    public function toArray(Request $request): array
    {
        $data = $this;
        return [
            'id'=>$this->id,
            'task_name'=>$this->task_name, 
            'assignor_user_id'=>$this->assignor_user_id, 
            'assignee_user_id'=>$this->assignee_user_id, 
            'task_date'=>$this->task_date, 
            'due_date'=>$this->due_date, 
            'link_1'=>$this->link_1, 
            'link_2'=>$this->link_2, 
            'priority'=>$this->priority, 
            'descriptions'=>$this->descriptions, 
            'status'=>"active",
            'action'=>view('pages.task.button')->with('data', $data)->render(),
        ];
    }
}
