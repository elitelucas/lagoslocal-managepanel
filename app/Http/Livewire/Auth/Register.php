<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;

use App\Models\User;
use App\Models\Role;

class Register extends Component
{
    public $first_name = '';
    public $last_name = '';
    public $email = '';
    public $password = '';
    public $role_id = '';

    public $roles;

    protected $messages = [
        'role_id.required' => 'The role is required',
    ]; 

    public function mount() {
        if(auth()->user()) {
            return redirect()->intended('/dashboard-default');      
        }
        $this->roles = Role::skip(1)->take(2)->get();
    }
 
    public function rules() {
        return  [
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'email' => 'required|email:rfc,dns|unique:users',
            'password' => 'required|min:6',
            'role_id' => 'required',
        ];
    }

    public function register() {
        $this->validate();
        
        if(is_array($this->role_id) && array_key_exists("value", $this->role_id)) {
            $this->role_id = intval($this->role_id['value']);
        }
        $user = User::create([
            'first_name' => $this->first_name,
            'last_name' => $this->last_name,
            'email' => $this->email,
            'role_id' => $this->role_id,
            'password' => Hash::make($this->password)
        ]);

        auth()->login($user);

        return redirect()->route('user-home');
    }

    public function render()
    {
        return view('livewire.auth.register');
    }
}
