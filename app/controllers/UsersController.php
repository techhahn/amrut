<?php

class UsersController extends BaseController {
    protected $layout = "layout.main";

    public function __construct() {
        $this->beforeFilter('csrf', array('on'=>'post'));
    }


    public function getLogin() {
        $this->layout->content = View::make('users.login');
    }

//    public function getRegister() {
//        $this->layout->content = View::make('users.create');
//    }
//
//    public function postRegister() {
//        $validator = Validator::make(Input::all(), User::$rules);
//        if($validator->passes()) {
//            $user = new User;
//            $user->username = Input::get('username');
//            $user->firstname = Input::get('firstname');
//            $user->lastname = Input::get('lastname');
//            $user->password = Hash::make(Input::get('password'));
//            $user->save();
//            return Redirect::to('users/login')->with('message', 'Sucessfully account created');
//        }
//        else {
//            return Redirect::to('users/register')->withErrors($validator)->withInput();
//        }
//    }

    public function postLogin() {
        $validator = Validator::make(Input::all(), User::$LoginRules);
        if($validator->passes()) {
            if(Auth::attempt(array('username'=>Input::get('username'), 'password'=>Input::get('password')))) {
                $this->layout->content = View::make('users.dashboard')->with('message', 'logged In Sucessfully');
            }
            else {
                return Redirect::to('users/login')->with('message', 'Error Username or Password');
            }
        }
        else{
            return Redirect::to('users/login')->withErrors($validator)->withInput();
        }
    }


}