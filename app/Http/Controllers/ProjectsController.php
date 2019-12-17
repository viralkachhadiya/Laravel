<?php

namespace App\Http\Controllers;

use App\Project;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $projects=Project::all();

        return View('projects.index',['projects'=>$projects]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($company_id = null)
    {
        //
        return view('projects.create',['company_id'=>$company_id]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
      
            $project=Project::create([
                'name'=>$request->input('name'),
                'description'=>$request->input('description'),
                'company_id'=>$request->input('company_id'),
                'user_id'=>$request->id
            ]);

            if($project)
            {
                return redirect()->route('projects.show',['project'=>$project->id])
                ->with('success','project created successfully');
            }
            return back()->withInput('error','Error creating new project');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    
       
        //$compan = Project::where('id',$project->id)->first();
        $compan=Project::find($project->id);
     
     
         return view('projects.show',['project'=>$compan]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
        $compan=Project::find($project->id);
     
     
        return view('projects.edit',['project'=>$compan]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //

        
        $projectUpdate=Project::where('id',$project->id)->update([
            'name'=>$request->input('name'),
            'description'=>$request->input('description')
        ]);
        if($projectUpdate){
            return redirect()->route('projects.show',
            ['project'=>$project->id])->with('success','project update successfully.!');
        }
        return back()->withInput();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
       $findproject=Project::find($project->id);
       if($findproject->delete())
       {
        return redirect()->route('projects.index')->with('success','project Deleted successfully.!');
       }
       return back()->withInput()->with('error','project could not be deleted');
       
    }
}
