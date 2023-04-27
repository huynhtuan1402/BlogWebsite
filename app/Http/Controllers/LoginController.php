<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function displayloginform()
    {
        return view('pages.login');
    }

    public function authenticate(Request $request)
    {
        $email = $request->email;
        $password = $request->password;
        $role = User::where('email', $email)->pluck('role')->first();
        // dd($role);
        if (Auth::attempt(['email' => $email, 'password' => $password])) {
            $request->session()->regenerate();
            if ($role == 1) {
                return redirect()->intended('admin/dashboard');
            } else {
                return redirect()->intended('user/dashboard');
            }
        }
        // return back()->withErrors([
        //     'email' => 'The provided credentials do not match our records.',
        // ])->onlyInput('email');
        // return redirect('dashboard');
    }
    public function admindashboard()
    {
        return view('pages.admin.dashboard');
    }
    public function userdashboard()
    {
        // $categories= Category::all();
        return view('pages.user.dashboard');
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate(); //hủy session
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
