<?php

namespace SecPHP\Data\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserController extends Controller
{
    public function getAllUsers()
    {
        return response()->json(User::all());
    }

    public function changePassword($email, $new_password)
    {
        $user = User::where('email', $email)->first();
    
        if (!$user) {
            return response()->json(['error' => 'User not found']);
        }
    
        $user->password = Hash::make($new_password);
        $user->save();
    
        return response()->json(['success' => 'Password changed']);
    }
    
}