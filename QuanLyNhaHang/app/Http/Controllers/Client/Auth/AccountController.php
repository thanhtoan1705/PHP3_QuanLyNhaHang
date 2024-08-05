<?php

namespace App\Http\Controllers\Client\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth; // Thêm dòng này
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\User\UpdateAccountRequest;
use App\Models\User;
use App\Models\Promotion;

class AccountController extends Controller
{
    public function index()
    {
        return view('clients.account.index');
    }

    public function show($id)
    {
        $user = Auth::user();
        $promotions = Promotion::paginate(9);
        return view('clients.account.index', compact('user', 'promotions'));
    }

    public function update(UpdateAccountRequest $request, $id)
    {
        $user = User::findOrFail($id);
        $data = $request->validated();

        // Nếu có mật khẩu mới, xử lý việc thay đổi mật khẩu
        if ($request->filled('new_password')) {
            if (!Hash::check($request->current_password, $user->password)) {
                return redirect()->back()->withErrors(['current_password' => 'Mật khẩu hiện tại không chính xác.']);
            }
            $data['password'] = Hash::make($request->new_password);
        }

        $user->update($data);
        return redirect()->route('account.index')->with('success', 'Người dùng đã được cập nhật thành công!');
    }

    public function someControllerMethod()
    {
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('login')->withErrors(['login' => 'Bạn cần đăng nhập để truy cập trang này.']);
        }

        $username = Auth::check() ? Auth::user()->name : null;
        return view('components.client.header', compact('username','user'));
    }
}
