<?php

namespace App\Repositories;

use App\Interfaces\CrudInterface;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectRepository  implements CrudInterface{

    public function getAll() {
        $projects = Project::all();
        return $projects;
    }

    public function findById($id) {
        $project = Project::find($id);
        return $project;
    }
    public function create(Request $request)
    {
        $project = Project::create([
            'name' => $request->name,
            'description' => $request->description,
            'status' => $request->status,
            'user_id' => 1,
            'created_at' => now()
        ]);

        return $project;
    }

    public function edit(Request $reques, $id)
    {
        $project = $this->findById($id);
        //$project->name = 
        // $project = Project::update([
        //     'name' => $request->name,
        //     'description' => $request->description,
        //     'status' => $request->status,
        //     'user_id' => $request->user_id,
        //     'created_at' => now()
        // ]);

        // return $project;
    }
    public function delete(Request $request, $id){
        //
    }


}