<?php
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Validator;
use App\Models;
//use Input, Notification, Redirect, Sentry, Str, Auth, Session, Hash, Password, Lang;
class RegistrationController extends BaseController {

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

  public function registration()
  { 
    if ($this->isPostRequest()) {
      $credentials = Input::only(
          "email",
          "password",
          "password_confirmation"
        );

      $code = str_random(60);

      $user = new User;
      $user->email = Input::get('email');
      $user->password = Hash::make(Input::get('password'));
      $user->type = 'Member';
      $user->status = '0';
      $user->activation_code = $code;
      $user->activated = '0'; 
      $user->save();

      // create new product and save it
      $userProfile = new UserProfile;
      $userProfile->first_name = Input::get('first_name');
      $userProfile->last_name = Input::get('last_name');
      $userProfile->role = Input::get('role');
      $userProfile->job_title = Input::get('job_title');
      $userProfile->mobile = Input::get('mobile');
      $userProfile->phone = Input::get('phone');
      $userProfile->address = Input::get('address');
      $userProfile->city = Input::get('city');
      $userProfile->state = Input::get('state');
      $userProfile->user()->associate($user);
      $userProfile->save();

      if ($userProfile)
        {
            $data = array(
                'name'     => Input::get('first_name').' '.Input::get('last_name'),
                'clickUrl'  => URL::to('/') . '/confirm/' . $code
            );
            Mail::send('emails.member_registration', $data , function($message)
            {
                $message->to(Input::get('email'), Input::get('first_name'))->subject('Confirm Registration :: Digitall.Tv');
            });

            
        }else{
          return Redirect::route('registration')->with('homeError', 'There was a problem creating your account.');
        }

      return Redirect::to('registration-welcome');

    }
    return View::make('registration');
  }

  public function confirm($code){

    if ( $user_info = User::where('activation_code', '=', $code)->first() )
    {

        $uid    = $user_info->id;
        $email  = $user_info->email;

        $user_profile = UserProfile::where('user_id', '=', $uid)->first();

        $data = array(
            'activation_code'   => $code,
            'user_id'   => $uid,
            'email'     => $email,
            'name'     => $user_profile->first_name.' '.$user_profile->last_name,
            'initial_payment' => 'N/A',
            'credits'  => 'N/A',
            'next_payment' => 'N/A'
        );

        $user   = User::find($uid);
        $user->activated = 1;
        $user->save();

        Session::put('name', $data['name']);
        //Auth::login( User::find($uid) );

        if ($user)
        {
            Mail::send('emails.registration_complete', $data , function($message) use ($user, $user_profile)
            {
                $message->to($user->email, $user_profile->first_name)->subject('Registration Successful :: Digitall.Tv');
            });

            
        }else{
          return Redirect::route('registration')->with('homeError', 'There was a problem creating your account.');
        }

        return View::make('registration_welcome')->with($data);

    } else {

        return View::make('registration_welcome')->nest('loginForm', 'signup::loginForm');

    }

  }

  public function emailCheck()
  {
    $email = Input::get('email');

    $users = User::whereEmail($email)->first();//User::where('email', '=', $email)->get();
    if($users){
      die('1');
    }else{
      die('0'); 
    }

  }

  public function registrationWelcome()
  { 
    return View::make('registration_welcome');
  }

  // public function createAccount()
  // {
  //   if ($this->isPostRequest()) {
  //     $credentials = Input::only(
  //         "username",
  //         "password",
  //         "password_confirmation"
  //       );

  //     $user = new User;
  //     $user->username = Input::get('username');
  //     $user->password = Hash::make(Input::get('password'));
  //     $user->type = 'Member';
  //     $user->status = '0';
  //     $user->save();

  //     return Redirect::to('account-welcome');

  //   }

  //   return View::make('create_account');
  // }

  public function accountWelcome(){
    return View::make('account_welcome');
  }

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
                "password" => ["Email or Password is incorrect. Please try again."]
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
        "email" => "required",
        "password" => "required"
      ));
    }

    protected function getLoginCredentials()
  {
      return [
        "email" => Input::get("email"),
        "password" => Input::get("password")
      ];
  }


  


}