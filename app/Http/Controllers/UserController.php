<?php  namespace App\Http\Controllers;

use Crypt;
use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Support\Facades\View;
use Input;
use Hash;
use App\Role;
use App\Permissions;
use Validator;
use Redirect;
use App\User;

class UserController extends Controller {

    protected $restfull = true;

    public function get_login(){

        if (Auth::user())
            //echo 'ingelogd';
            return Redirect::route('admin');

        $view = view::make('public.login');
        $view->title = 'Login';
        return $view;
    }

    public function post_login(){
        $input = Input::all();
        $rules = array(
            'username' => 'required',
            'password' => 'required'
        );

        $validator = Validator::make($input, $rules);

        if($validator->fails()) {
            return Redirect::route('user_login')->withErrors($validator);
        }

        else {
            $credentials = array(
                'username' => $input['username'],
                'password' => $input['password']
            );

            if (Auth::attempt($credentials))
                return Redirect::route('admin');
            else
                return Redirect::route('user_login')->withErrors($validator);
        }
    }

    public function get_new(){
        $view = View::make('admin.users.new');

        return $view;
    }

    public function get_index(){
        $view = View::make('admin.users.index');
        $view->users = User::all();
        return $view;
    }

    public function get_register(){
        $view = View::make('public/register');
        $view->title = 'Registreren';

        return $view;
    }

    public function admin_create_user(){
        $view = View::make('public.register');
        $view->title = 'Registreren';

        return $view;
    }

    public function post_register(){
        $input = Input::all();
        $rules = array(
            'name' => 'required',
            'username' => 'required',
            'email' => 'required|unique:users|email',
            'password' => 'required|min:3|confirmed',
            'password_confirmation' => 'required|min:3',
            'role' => '1'
        );

        $validator = Validator::make($input, $rules);

        if($validator->passes()){

            $password = $input['password'];
            $password = Hash::make($password);

            $user = new User();
            $user->name = $input['name'];
            $user->username = $input['username'];
            $user->email = $input['email'];
            $user->password = $password;
            $user->save();

            return Redirect::route('user_login');
        }else {
            return Redirect::back()->withInput()->withErrors($validator);
        }
    }

    public function get_logout(){
        Auth::logout();
        return Redirect::route('user_login');
        //return Redirect::back();
    }

    public function edit_user($id){
        $view = View::make('admin.users.edit');
        $view->title = 'Instellingen';
        $view->user = User::find($id);
        return $view;
    }

    public function save_user_settings(){
        $input = Input::all();

        $password = $input['password'];
        $rules = array(
            'name' => 'required',
            'role' => '1'
        );

        if ($input['email'] != Auth::user()->email)
            $rules['email'] = 'required|unique:users|email';

        $validator = Validator::make($input, $rules);

        if($validator->passes()){

            $user = User::find(Auth::user()->id);
            $user->name = $input['first_name'];
            $user->email = $input['email'];

            if ($password && Hash::make($password) != $user->password)
                $user->password = Hash::make($password);
            $user->save();

            return Redirect::route('account_index');
        }else {
            return Redirect::route('account_index')->withInput()->withErrors($validator);
        }
    }

    public function remove_user() {
        User::find(Input::get('id'))->delete();
        return Redirect::back();
    }
}

?>
