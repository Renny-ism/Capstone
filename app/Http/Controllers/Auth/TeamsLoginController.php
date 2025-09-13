<?php
namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

class TeamsLoginController extends Controller
{
    public function index()
    {
        return view('auth.login');
    }

    public function post(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only(['email','password']);
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()
            ->withErrors(['password' => 'Incorrect email/password']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }

    // Microsoft login (Azure)
    public function microsoft()
    {
        return Socialite::driver('azure')->redirect();
    }

    public function microsoftRedirect()
    {
        try {
            $azureUser = Socialite::driver('azure')->stateless()->user();
        } catch (\Exception $e) {
            // Catch any OAuth errors
            return redirect('/login')->withErrors([
                'email' => 'Failed to login with Microsoft. ' . $e->getMessage()
            ]);
        }

        // Debug: uncomment if you want to see user object
        // dd($azureUser);

        $user = User::where('email', $azureUser->email)->first();

        if (!$user) {
            return redirect('/login')->withErrors([
                'email' => 'Your Microsoft email is not registered by an admin.',
            ]);
        }

        $user->update([
            'name' => $azureUser->name,
            'microsoft_id' => $azureUser->id,
            'status' => 'active',
        ]);

        Auth::login($user);

        return redirect('/admin/dashboard');
    }
}
