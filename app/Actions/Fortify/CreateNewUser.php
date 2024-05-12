<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use lluminate\Validation\Validator\validateIn;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Illuminate\Validation\Validator\validateEnum ;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array<string, string>  $input
     */
    public function create(array $input): User
    {
        // Validator::make($input, [
        //     'name' => ['required', 'string', 'max:255'],
        //     'email' => [
        //         'required',
        //         'string',
        //         'email',
        //         'max:255',
        //         Rule::unique(User::class),
        //     ],
        //     $validator = $this->getValidationFactory()->make($request->all(), [
        //         'profilU' => ['required', 'enum'],
        //     ], [], [
        //         'profilU' => 'ProfilU',
        //     ]),
        //     'password' => $this->passwordRules(),
        // ])->validate();
        $name = $input['firstname'].' '. $input['lastname'];
        $adresse=  $input['adresse'];
        $cni=  $input['cni'];
        $email = $input['email'];
        
        $user_exist = User::where('email',$email)->first();
            return User::create([
                'name' => $name,
                'adresse' => $adresse,
                'cni' =>$cni,
                'email' => $email,
                'password' => Hash::make($input['password']),
                'profilU' => "electeur",
            ]);
        
       
    }
}
