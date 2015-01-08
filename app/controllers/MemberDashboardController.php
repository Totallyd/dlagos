<?php

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Models;
//use Input, Notification, Redirect, Sentry, Str, Auth, Session, Hash, Password, Lang;
class MemberDashboardController extends BaseController {

  /*
  |--------------------------------------------------------------------------
  | Default Home Controller
  |--------------------------------------------------------------------------
  |
  | You may wish to use controllers instead of, or in addition to, Closure
  | based routes. That's great! Here is an example controller method to
  | get you started. To route to this controller, just add the route:
  |
  | Route::get('/', 'HomeController@showWelcome');
  |
  */

  public function index()
  { 
    $userProfile = UserProfile::whereUserId(Auth::user()->id)->first();
    return View::make('member-home', array('userProfile' => $userProfile));
  }

  protected function isPostRequest()
  {
      return Input::server("REQUEST_METHOD") == "POST";
  }

  public function viewProfile($id){
    $user = User::find($id);
    $userProfile = UserProfile::whereUserId($id)->first();

    // show the edit form and pass the nerd
    return View::make('view_profile')
      ->with(array('user'=> $user, 'userProfile' => $userProfile));
  }

  public function editProfile($id)
  { 
    if ($this->isPostRequest()) {

      // validate
      $rules = array(
        'first_name'       => 'required',
        'last_name'       => 'required',
        'role'       => 'required',
        'email'      => 'required|email'
      );
      $validator = Validator::make(Input::all(), $rules);

      // process the login
      if ($validator->fails()) {
        return Redirect::to('edit-profile/'.$id)->with('error', 'Please enter the required fields marked as *.');
      } else {
        // store
        $user = User::find($id);
        $user->email = Input::get('email');
        // if Password entered
        if(Input::get('old_password') && Input::get('password') && Input::get('password_confirmation') !=""){
          // if(Hash::check(Input::get('old_password'), $user->password)){
          //   $user->password = Hash::make(Input::get('password'));
          // }
          //   return Redirect::to('edit-profile/'.$id)->with('error', 'Your old password is wrong, please enter correct password');
        }else{
          return Redirect::to('edit-profile/'.$id)->with('error', 'Please enter your password');
        }
        $user->save();

        $userProfile = UserProfile::whereUserId($id)->first();
        $userProfile->first_name = Input::get('first_name');
        $userProfile->last_name = Input::get('last_name');
        $userProfile->role = Input::get('role');
        $userProfile->job_title = Input::get('job_title');
        $userProfile->mobile = Input::get('mobile');
        $userProfile->phone = Input::get('phone');
        $userProfile->address = Input::get('address');
        $userProfile->city = Input::get('city');
        $userProfile->state = Input::get('state');
        $userProfile->save();

        // redirect
        return Redirect::to('edit-profile/'.$id)->with('success', 'Your profile has been updated successfully!');
      }


    }

    $user = User::find($id);
    $userProfile = UserProfile::whereUserId($id)->first();

    // show the edit form and pass the nerd
    return View::make('edit_profile')
      ->with(array('user'=> $user, 'userProfile' => $userProfile));

  }




}