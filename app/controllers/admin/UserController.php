<?php
namespace admin;

use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Models;
use Input, Notification, Redirect, Sentry, Str, Auth, Session, Hash, Password, Lang;

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function login()
	{
		if ($this->isPostRequest()) { 
		      $validator = $this->getLoginValidator();
   
		        if ($validator->passes()) { 
		        	$credentials = $this->getLoginCredentials();

			        if (Auth::attempt($credentials, (Input::get("rememberme") == 'true') ? true : false)) {
			         	return Redirect::to("admin/dashboard");
			        }	
			  		
			        return Redirect::back()->withErrors(array(
			          "password" => ["Username or Password is incorrect. Please try again."]
			        ));
		      	} else { 
			        return Redirect::back()->withInput()->withErrors($validator);
			    }
					
		}

		if(Auth::check()){
			return Redirect::to("admin/dashboard");
		}

		return View::make('admin.login');
	}

	protected function isPostRequest()
	{
	    return Input::server("REQUEST_METHOD") == "POST";
	}
  
  	protected function getLoginValidator()
  	{ 
    	return Validator::make(Input::all(), array(
	      "username" => "required",
	      "password" => "required"
    	));
  	}

  	protected function getLoginCredentials()
	{
	    return [
	      "username" => Input::get("username"),
	      "password" => Input::get("password")
	    ];
	}


	public function forgotPassword(){
		if ($this->isPostRequest()) {

			$credentials = [
			'email'=>Input::get('email')
			];
			$rules = [
			'email' => 'required|email'
			];

			$validator = Validator::make($credentials,$rules);

			if($validator->passes()){     

				// $user = User::whereEmail(Input::only('email'));
    // 			$userProfile = UserProfile::whereUserId($user->$id)->first();

    			// set email template
			  	//Config::set('auth.reminder.email', 'emails.auth.admin-reminder');

			      View::composer('emails.resetpassword', function($view){
			         // $view->with(['name'  => $userProfile->first_name.' '.$userProfile->last_name]);
			          $view->with(['redirect_route'  => 'admin/resetpassword']);
			       });

			    $response = $this->getPasswordRemindResponse();
			  
			    if ($this->isInvalidUser($response)) {
			      return Redirect::back()
			        ->withInput()
			        ->with("error", Lang::get($response));
			    }
			  
			    return Redirect::back()
			      ->with("status", Lang::get($response));
		      }else{
		      	return Redirect::back()
		          ->withInput()
		          ->with("error", "Your email address is invalid");
		      }

		}

		if(Auth::check()){
			return Redirect::to("admin/dashboard");
		}

		return View::make('admin.forgotPassword');
	}

	protected function getPasswordRemindResponse()
	{
	  	return Password::remind(Input::only('email'), function($message){
				    $message->subject('Password Reminder :: Digitall.Tv');
				});
	}
	  
	protected function isInvalidUser($response)
	{
	  	return $response === Password::INVALID_USER;
	}

	public function resetPassword($token){
		if ($this->isPostRequest()) {
		    $credentials = Input::only(
		      "email",
		      "password",
		      "password_confirmation",
		      "token"
		    );
		 
		    $response = $this->updatePassword($credentials);
		 
		    if ($response === Password::PASSWORD_RESET) {
		      return Redirect::to("admin/dashboard");
		    }
		 
		    return Redirect::back()
		      ->withInput()
		      ->with("error", Lang::get($response));
		}

		if(Auth::check()){
			return Redirect::to("admin/dashboard");
		}

		return View::make('admin.resetpassword')->with('token', $token);
	}

	protected function updatePassword($credentials)
	{
	  return Password::reset($credentials, function($user, $pass) {
	    $user->password = Hash::make($pass);
	    $user->save();
	  });
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}


}
