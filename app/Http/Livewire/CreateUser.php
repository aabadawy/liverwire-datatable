<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
class CreateUser extends Component
{
    public $data ;

    public $name;
    public $email;
    public $password;

    protected $rules = [
        'name' => 'required|min:6',
        'email' => 'required|email|unique:users,email',
        'password' => 'required|min:6'
    ];
    public function save($data = [])
    {
        $this->validate();

        // Execution doesn't reach here if validation fails.

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'password' => $this->password,
        ]);
        $this->emit('UserTableChanged');

    }
    public function render()
    {
        return view('livewire.create-user');
    }
}
