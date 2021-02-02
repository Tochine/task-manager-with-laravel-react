<?php

namespace App\Repositories;
use App\Interfaces\CrudInterface;
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
    public function create(){
        //
    }

    public function edit($id){
        //
    }
    public function delete(){
        //
    }


}