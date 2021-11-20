<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;

use App\Models\User;

class Login extends Component
{
    public $email = '';
    public $password = '';
    public $remember_me = false;

    protected $rules = [
        'email' => 'required|email:rfc,dns',
        'password' => 'required'
    ];

    public function mount()
    {
        if (auth()->user()) {
            if (auth()->user()->isAdmin()) {
                return redirect()->intended(route('admin-business-list'));
            } else if (auth()->user()->isBusiness()) {
                return redirect()->intended(route('businessinformation'));
            }
        }
        $this->fill(['email' => 'business@gmail.com', 'password' => 'business']);
    }

    public function login()
    {
        $credentials = $this->validate();

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password], $this->remember_me)) {
            $user = User::where(["email" => $this->email])->first();
            auth()->login($user, $this->remember_me);
            if (auth()->user()->isAdmin()) {
                return redirect()->intended(route('admin-business-list'));
            } else if (auth()->user()->isBusiness()) {
                return redirect()->intended(route('businessinformation'));
            }
        } else {
            return $this->addError('email', trans('auth.failed'));
        }
    }

    public function render()
    {
        return view('livewire.auth.login');
    }
}
