<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class EmployeeCollection extends JsonResource
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
            'employee_id'=>$this->employee_id,
            'name'=>$this->user->full_name,
            'email'=>$this->user->email,
            'phone'=>$this->user->phone,
            'designation'=>$this->designation?->name,
            'department'=>$this->department?->name,
            'date_joined'=>$this->date_joined,
            'status'=>"active",
            'action'=>view('pages.employee.button')->with('data', $data)->render(),
        ];
    }
}
