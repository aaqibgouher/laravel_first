<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $data = [];

        $data["todos"] = TodoModel::all();
        return view("todo.index", $data);
    }

    public function create(Request $request){
        $data = [
            "error" => ""
        ];

        try{
            if($request->isMethod("post")){
                $name = $request->input("name");
                $is_completed = $request->input("is_completed");
    
                TodoModel::insert([
                    "name" => $name,
                    "is_completed" => $is_completed ? 1 : 0,
                    "created_at" => now()
                ]);

                return redirect("todo");
            }
        }catch(Exception $e){
            $data["error"] = $e->getMessage();
        }

        return view("todo.create", $data);
    }

    public function update(Request $request, $id){
        $data = [
            "error" => ""
        ];
        $data["todo"] = TodoModel::find($id);

        try{
            if($request->isMethod("post")){
                $name = $request->input("name");
                $is_completed = $request->input("is_completed");
    
                TodoModel::where("id", $id)->update([
                    "name" => $name,
                    "is_completed" => $is_completed,
                    "updated_at" => now()
                ]);

                return redirect(route("todo"));
            }
        }catch(Exception $e){
            $data["error"] = $e->getMessage();
        }

        return view("todo.update", $data);
    }

    public function delete(Request $request, $id){
        TodoModel::find($id)->delete();
        return redirect(route("todo"));
    }
}
