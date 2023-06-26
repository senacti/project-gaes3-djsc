<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


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
            'password' => ['required', 'min:4', 'confirmed', 'regex:/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'],
            'telefono' => ['required', 'regex:/^\d{3}-?\d{3}-?\d{4}$/'],
            'direccion' => ['required', 'string', 'max:255'],
            'numeroidentificacion' => ['required', 'numeric','min:12','unique:users'],
        ], [
            'name.required' => 'El nombre es obligatorio.',
            'email.required' => 'El correo electrónico es obligatorio.',
            'email.email' => 'El correo electrónico debe ser válido.',
            'password.required' => 'La contraseña es obligatoria.',
            'password.min' => 'La contraseña debe tener al menos 4 caracteres, una mayuscula, una minuscula, un digito y un caracter especial.',
            'password.confirmed' => 'La confirmación de contraseña no coincide.',
            'telefono.required' => 'El número de teléfono es obligatorio.',
            'telefono.regex' => 'El número de teléfono no cumple con el formato requerido.',
            'direccion.required' => 'La dirección es obligatoria.',
            'numeroidentificacion.required' => 'El número de identificación es obligatorio.',
            'numeroidentificacion.min' => 'El número de identificación debe tener al menos 12 dígitos.',
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
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'telefono' => $data['telefono'],
            'numeroidentificacion' => $data['numeroidentificacion'],
            'direccion' => $data['direccion'],
            'password' => Hash::make($data['password']),
        ]);
    }
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            return redirect('register')
                ->withErrors($validator)
                ->withInput();
        }

        $user = $this->create($request->all());

        $this->guard()->login($user);

        $request->session()->flash('success', '¡Registro exitoso! Los campos son válidos.');

        return redirect($this->redirectPath());
    }

}
