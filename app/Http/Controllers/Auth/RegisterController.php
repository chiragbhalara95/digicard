<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\SkuPackageModel;
use App\Models\ProductModel;
use App\Helpers\CustomHelper;
use Illuminate\Http\Request;
use Str;
use App\Models\UserVerify;
use App\Models\ThemeModel;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        $themeData = ThemeModel::where('product_id', $data['product_id'])->first();
        $user =  User::create([
            'product_id'   => $data['product_id'],
            'sku_package_id'  => $data['sku_package_id'],
            'name'         => $data['name'],
            'email'        => $data['email'],
            'country_code' => $data['country_code'],
            'phone'        => $data['phone'],
            'password'     => Hash::make($data['password']),
            'is_admin'     => 0,
            'theme'        => $themeData->blade_file
        ]);

        // email data
        $email_data = array(
            'name' => $data['name'],
            'email' => $data['email'],
        );

        // send email with the template
        \Mail::send('email.welcome_email', $email_data, function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['name'])
                ->subject('Welcome to Digicard Family')
                ->from(env('MAIL_USERNAME'), 'Digicard');
        });

        $token = Str::random(64);
        UserVerify::create([
            'user_id' => $user->id, 
            'token'   => $token
        ]);

        $url = url('account/verify')."/".$token;
        \Mail::send('email.emailVerificationEmail',['url' => $url, 'user' => $email_data], function ($message) use ($email_data) {
            $message->to($email_data['email'], $email_data['name'])
            ->subject('Verify Email Address')
            ->from(env('MAIL_USERNAME'), 'Digicard');
        });


        return $user;

    }

    public function showRegistrationForm(Request $request)
    {
        $packageId   = isset($request->packageId) ? $request->packageId : null;
        $countryData = file_get_contents('public/country-tel-code.json');
        $countryData = json_decode($countryData, true);
        $selectedCode = '+91';
        $productData = ProductModel::select('product_id', 'product_name')->get()->toArray();
        $packageData = SkuPackageModel::select([
            'price',
            'special_price',
            'price_usd',
            'special_price_usd',
            'duration',
            'durationType',
            'package_duration.package_duration_id',
            'sku_package.sku_package_id',
            'product_id'
        ])
        ->join('package_duration', 'package_duration.package_duration_id', '=', 'sku_package.package_duration_id')
        ->get();

        if (!empty($packageData)) {
            foreach ($packageData as $key => $packageDeatil) {
                $skuCustomPackage[$packageDeatil->product_id][] = $packageDeatil->toArray();
            }
        }

        return view('auth.register', compact('countryData','selectedCode', 'productData', 'skuCustomPackage', 'packageId'));
    }


}
