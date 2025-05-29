<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    // Hiển thị form đổi mật khẩu
    public function showChangePasswordForm()
    {
        return view('admin.change-password');
    }

    // Xử lý đổi mật khẩu
    public function changePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', 'min:3', 'max:255'],
        ]);

        $user = auth()->user();

        // Kiểm tra mật khẩu hiện tại đúng không
        if (!Hash::check($request->current_password, $user->password)) {
            return back()->withErrors(['current_password' => 'Mật khẩu hiện tại không đúng']);
        }

        // Cập nhật mật khẩu mới
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('admin.dashboard')->with('success', 'Đổi mật khẩu thành công!');
    }

    public function page1()
    {
        return view('admin.page1');
    }
}
