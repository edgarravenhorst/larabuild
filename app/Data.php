<?php namespace App;

use Illuminate\Database\Eloquent\Model;
use StdClass;
use Config;
use Illuminate\Support\Str;

class Data extends Model
{

    public $custom_Data = array();

    public function set_data_validation() {}
    public function get_data_validation() {
        return json_decode($this->data);
    }

    public function set_data($rawdata, $prefix=""){
        //$rawdata = (object) $rawdata;
        //$data = $this->get_data();
        $data = array_merge((array)json_decode($this->data), Config::get('theme.post_types.' . $this->type . '.requiredParams'));
        foreach ($data as $param) {
            if(isset($rawdata[$prefix . $param->name]))
                $param->value = $rawdata[$prefix . $param->name];
        }

        //var_dump($this->custom_Data); die;

        $this->data = json_encode($data);
    }

    public function get_data($key=false){
        if ($key){
            return json_decode($this->data, true)[$key]['value'];
        }else
        return json_decode($this->data);
    }

    public function set_admin_fields(){

    }

    public function get_admin_fields(){
        $data = array_merge(Config::get('theme.post_types.' . $this->type . '.requiredParams'), (array)json_decode($this->data));
        return $data;
    }

    public static function createField($type, $title, $description, $validation="", $value=""){
        $field = new StdClass();
        $field->type = $type;
        $field->name = str_replace("-", "_", str_replace(" ", "_", strtolower(Str::ascii($title))));
        $field->title = $title;
        $field->description = $description;
        $field->validation = $validation;
        $field->value = $value;
        return $field;
    }
}
