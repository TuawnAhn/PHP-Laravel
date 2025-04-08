<?php

namespace App\Http\Controllers\Client;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ClientAuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            'name'     => 'required|string',
            'email'    => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        // Tạo người dùng mới
        $user = User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'password' => Hash::make($request->password),
            'role'     => 'user', // Đảm bảo phân biệt với admin
        ]);

        // Thêm vào bảng customers
        Customer::create([
            'name'  => $user->name,
            'email' => $user->email,
            'phone'    => null,
            'address'  => null,
        ]);

        // Tự động đăng nhập
        Auth::login($user);

        return redirect()->route('clients.home')
            ->with('success', 'Tuyệt vời! Tài khoản mới đã được tạo. Chào mừng bạn, ' . $user->name . ' 🎉🎈');
    }


    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        // Tìm người dùng theo email
        $user = User::where('email', $credentials['email'])->first();

        // Nếu không tồn tại hoặc là admin thì không cho đăng nhập client
        if (!$user || $user->role === 'admin') {
            return back()->with('error', 'Hmm... Bạn chắc chắn là dùng đúng chìa khóa chứ? 🕵️‍♂️');
        }

        // Tiến hành đăng nhập nếu là user
        if (Auth::guard('web')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended(route('clients.home'))->with('success', 'Chúc mừng, bạn đã “đột nhập” thành công 🎉! Đừng quên pha cốc cà phê nhé!');
        }

        return back()->with('error', 'Oops! Email hoặc mật khẩu đang chơi trốn tìm 🕳️🔍');
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/clients')->with('success', 'Bạn đã rút lui an toàn! Hẹn gặp lại trong một cuộc phiêu lưu khác 🏃‍♂️💨');
    }
}
