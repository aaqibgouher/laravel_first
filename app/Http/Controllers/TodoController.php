<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\TodoModel;
use Illuminate\Http\Request;

class TodoController extends Controller         /*this is the TodoController , which is extended from controller . */
{
    public function index(){        /*this the index method*/
        $data = [];         /*an empty array */

        $data["todos"] = TodoModel::all();          /*TodoModel is a model, which stores the info related with DB, in that model , we have assigned the table name, so if we do this TodoModel::all() means, there is a class named TodoModel which has a predefined method called all, which will bring all of the details inside that table.*/
        return view("todo.index", $data);           /*simply , we are returing the view of todo.index(given path here) and the $data array. */
    }

    public function create(Request $request){       /*we ar taking request from the user, data is an array , which has a key named error, so by default it will null. */
        $data = [
            "error" => ""
        ];

        try{
            if($request->isMethod("post")){         /*if the request that user has sended is post , then only it will , else not . */
                $name = $request->input("name");            /*we are taking that todoname and is_completed from user through post. */
                $is_completed = $request->input("is_completed");
    
                TodoModel::insert([         /*using our model , we are calling an insert method , which will insert the values in the rows. So , in our db , we have a table name todos and these columns, so we are inserting in that values in these col. */
                    "name" => $name,
                    "is_completed" => $is_completed ? 1 : 0,        
                    "created_at" => now()
                ]);

                return redirect("todo");        /*after submitting all these, we will redirect user to todo route. */
            }
        }catch(Exception $e){
            $data["error"] = $e->getMessage();      /*if any erroe will counter , we will store in that array key , then it will show in that view. */
        }

        return view("todo.create", $data);      /*finally we are returing the view of create along with data. */
    }

    public function update(Request $request, $id){          /*when this method will called , then it will take parameter first is request from user, and second will be the id of the user that want to update. */
        $data = [       /*by default , this array contains one key named error , whose value is null . if nay of the error will counter , it will store that error here. */
            "error" => ""
        ];
        $data["todo"] = TodoModel::find($id);       /*another key named todo, which will store all the details of id that user want to chnge. TodoModel is a Model and find() is predefined method, which takes id and search from the required models. */

        try{
            if($request->isMethod("post")){     /*if the request is of post type. then only. */
                $name = $request->input("name");        /*we will take the updated details from user. */
                $is_completed = $request->input("is_completed");
    
                TodoModel::where("id", $id)->update([       /*then we will update the details corresponing to that id. */
                    "name" => $name,
                    "is_completed" => $is_completed,
                    "updated_at" => now()
                ]);

                return redirect(route("todo"));         /*and will redirect it to todo route. */
            }
        }catch(Exception $e){
            $data["error"] = $e->getMessage();      /*else any error , will store in that error key inside the data array . */
        }

        return view("todo.update", $data);      /*after all that, will return the view of update and data. */
    }

    public function delete(Request $request, $id){
        TodoModel::find($id)->delete();
        return redirect(route("todo"));
    }
}
