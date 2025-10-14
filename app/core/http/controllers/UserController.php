<?php
namespace App\Core\Http\Controllers;

use App\Request;
use App\Models\User;

class UserController {
    protected Request $request;

    public function __construct(Request $request) {
        $this->request = $request;
    }

    public function store(): void {
        $data = [
            'name'     => $this->request->input('name'),
            'email'    => $this->request->input('email'),
            'password' => password_hash($this->request->input('password'), PASSWORD_BCRYPT)
        ];

        $user = new User($data);
        $user->register();

        // Renderizar vista con helper
        view('registerView', compact('user'));
    }
}

