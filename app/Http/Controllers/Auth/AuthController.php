<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    /**
     * Handle user and admin login.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(Request $request)
    {
        // Define validation rules for email and password
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:dns',
            'password' => 'required|min:8|max:15',
        ]);

        // If validation fails, show error alert and redirect back
        if ($validator->fails()) {
            Alert::error('Error', 'Pastikan semua email dan password terisi dengan benar!');
            return redirect()->back();
        }

        // Attempt to log in as an admin
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            toast('Selamat datang admin!', 'success');
            return redirect()->route('admin.dashboard');
        } 
        
        // Attempt to log in as a regular user
        elseif (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            toast('Selamat datang!', 'success');
            return redirect()->route('user.dashboard');
        } 
        
        // If both attempts fail, show login error and redirect back
        else {
            Alert::error('Login Gagal!', 'Email atau password tidak valid!');
            return redirect()->back();
        }
    }

    /**
     * Log out the authenticated admin user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function admin_logout()
    {
        Auth::guard('admin')->logout();
        toast('Berhasil logout!', 'success');
        return redirect('/');
    }

    /**
     * Log out the authenticated user.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function user_logout()
    {
        Auth::logout();
        toast('Berhasil logout!', 'success');
        return redirect('/');
    }
}