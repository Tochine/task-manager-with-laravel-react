<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Repositories\ProjectRepository;
use Validator;

class ProjectsController extends Controller
{
    public $projectRepository;

    public function __construct(ProjectRepository $projectRepository){
        $this->projectRepository = $projectRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = $this->projectRepository->getAll();
        //$projects = Project::all();
        return response()->json([
            'successs' => true,
            'message' => 'Project list',
            'data' => $projects
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ],[
            'name.required' => 'Please give project name',
            'description.required' => 'Please give the project description',
            'user_id.required' => 'User id needed'
        ]);

        if($validatedData->fails()){
            return response()->json([
                'status' =>  false,
                'errror' => $validatedData->errors()
            ]);
        }

        $project = $this->projectRepository->create($request);

        if(!is_null($project)){
            return response()->json([
                'status' => true,
                'message' => "Project successfully stored",
                'data' => $project
            ]);
        }else{
            return response()->json([
                'status' =>  false,
                'message' => "Oops! Something went wrong",
                'data' => NULL
            ]);
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($project)
    {
        $project = $this->projectRepository->findById($project);
        if(is_null($project)){
            return response()->json([
                'status' => false,
                'message' => "No project found.",
                'data' => NULL
            ]);
        }else{
            return response()->json([
                'successs' => true,
                'message' => 'Project details',
                'data' => $project
            ]);
        }  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request, $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $project = $this->projectRepository->findById($id);
        if(is_null($project)){
            return response()->json([
                'status' => false,
                'message' => 'Project not found',
                'data' => NULL
            ]);
        }
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'description' => 'required',
            'user_id' => 'required'
        ],[
            'name.required' => 'Please give project name',
            'description.required' => 'Please give the project description',
            'user_id.required' => 'User id needed'
        ]);

        if($validatedData->fails()){
            return response()->json([
                'status' =>  false,
                'errror' => $validatedData->errors()
            ]);
        }

        $project = $this->projectRepository->edit($request, $id);

        if(!is_null($project)){
            return response()->json([
                'status' => true,
                'message' => "Project successfully updated",
                'data' => $project
            ]);
        }else{
            return response()->json([
                'status' =>  false,
                'message' => "Oops! Something went wrong",
                'data' => NULL
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        //
    }
}
