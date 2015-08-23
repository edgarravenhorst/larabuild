<?php namespace App\Http\Controllers;

use Laravel\Lumen\Routing\Controller as BaseController;
use Illuminate\Support\Facades\View;
use Crypt;
use App\Data;
use Input;
use Validator;
use Redirect;
use StdClass;

class DataController extends Controller
{
    public $model = Data::class;

    public function add_field(){
        $input = Input::all();

        $model = new $this->model();
        $obj = $model->find($input['id']);

        $field = new StdClass();
        $field->type = $input['type'];
        $field->name = $input['name'];
        $field->title = $input['title'];
        $field->description = $input['description'];
        $field->validation = $input['validation'];
        $field->value = $input['value'];

        $data = json_decode($obj->data, true);
        $data[$field->name] = $field;

        $obj->data = json_encode($data);
        $obj->save();

        return Redirect::back();

        var_dump($model->find($input['id']));

        //return Redirect::back();
    }
}
