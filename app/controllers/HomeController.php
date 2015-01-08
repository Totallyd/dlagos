<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/


    public function __construct()
    {
        //updated: prevents re-login.
        // $this->beforeFilter('guest', ['only' => ['getLogin']]);
        // $this->beforeFilter('auth', ['only' => ['getLogout']]);
    }

	public function index()
	{	
		return View::make('landing');
	}

	public function membership()
	{	
		return View::make('membership');
	}

	public function package()
	{	
		return View::make('package');
	}

	public function showAbout()
	{	
		echo 'This is our About Us Page';//return View::make('hello');
	}

	//  public function getLogin()
	// {
	// 	$this->layout->title='login';
	// 	$this->layout->main = View::make('login');
	// }
	 
	public function login()
	{
		// if(Auth::check()){ 
		// 	return Redirect::intended("member-home");
		// }

		$credentials = [
		'email'=>Input::get('email'),
		'password'=>Input::get('password'),
		'type'=>'Member'
		];
		$rules = [
		'email' => 'required',
		'password'=>'required',
		'type'=>'required'
		];
		$validator = Validator::make($credentials,$rules);
		if($validator->passes())
		{
			if(Auth::attempt($credentials, (Input::get("rememberme") == 'true') ? true : false)){
				return Response::json(array('status' => '1'));
			}else{
				return Response::json(array('status' => '0'));
			}
			
			
		}
		else
		{
			die('Here');
			return Redirect::back()->withErrors($validator)->withInput();
		}
	}
	 
	public function logout()
	{
		Auth::logout();
		return Redirect::to('/');
	}

	protected function isPostRequest()
	  {
	      return Input::server("REQUEST_METHOD") == "POST";
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
    		// //echo '<PRE>';print_r($user);exit;
	    	// $userProfile = UserProfile::whereUserId($user->$id)->first();
	  		// set email template
	      //Config::set('auth.reminder.email', 'emails.auth.admin-reminder');

	      View::composer('emails.resetpassword', function($view){
	          //$view->with(['name'  => $userProfile->first_name.' '.$userProfile->last_name]);
	          $view->with(['redirect_route'  => 'resetpassword']);
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
      return Redirect::to("member-home");
    }

    return View::make('forgot_password');
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
          "password_confirmation"
        );
        $credentials['token'] = $token;
     
        $response = $this->updatePassword($credentials);
     
        if ($response === Password::PASSWORD_RESET) {
        	$user = User::whereEmail(Input::only("email"));
        	Auth::login($user);
          	return Redirect::to("member-home");
        }
     	
        return Redirect::back()
          ->withInput()
          ->with("error", Lang::get($response));
    }

    if(Auth::check()){
      return Redirect::to("member-home");
    }

    return View::make('reset_password')->with('token', $token);
  }

  protected function updatePassword($credentials)
  {
    return Password::reset($credentials, function($user, $pass) {
      $user->password = Hash::make($pass);
      $user->save();
    });
  }

  public function contactUs(){

    if ($this->isPostRequest()) {

        $credentials = [
		'name'=>Input::get('name'),
		'phone'=>Input::get('phone'),
		'email'=>Input::get('email'),
		'subject'=>Input::get('subject'),
		'email_message'=>Input::get('message')
		];
		$rules = [
		'name' => 'required',
		'phone'=>'required',
		'email' => 'required',
		'subject'=>'required',
		'email_message' => 'required'
		];

		$validator = Validator::make($credentials,$rules);

		if($validator->passes()){     

	            Mail::send('emails.contact_us', $credentials , function($message)
	            {
	                $message->to('gr8.abbasi@gmail.com', 'info@digitallagos.tv')->subject('Get in Touch :: Digitallagos.Tv');
	            });
	            return Redirect::to('contact-us')->with('success', 'Email has been sent successfully, support will contact you shortly.');
        }else{
        	return Redirect::to('contact-us')->with('error', 'Something went wrong, please try again later.');
        }

    } else {
        return View::make('contactus');
    }
 }

  public function termsConditions(){
  	return View::make('terms_conditions');
  }

  public function agenciesSupport(){
  	return View::make('agencies_support');
  }

}
