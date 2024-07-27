<?php

namespace App\Http\Controllers\Admin\User;

use App\Http\Controllers\Controller;
use App\Http\Requests\User\CreateUserRequest;
use App\Http\Requests\User\UpdateUserRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Pagination\Paginator;

class UserController extends Controller
{
    protected $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = $this->user->getLatestPaginated(5);
        $usersInactive = $this->user->getInactiveLatestPaginated(5);
        return view('admin.users.list', compact('users', 'usersInactive'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUserRequest $request)
    {
        $dataCreate = $request->validated();
        $user = $this->user->createUser($dataCreate);

        return redirect()->route('user.list')->with(['message' => 'Tạo người dùng thành công']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = $this->user->findOrFail($id);
        return view('admin.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, $id)
    {
        $user = $this->user->findOrFail($id);
        $dataUpdate = $request->validated();

        $user->updateUser($dataUpdate);

        return redirect()->route('user.list')->with(['message' => 'Cập nhật thành công']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = $this->user->findOrFail($id);
        $user->delete();

        return redirect()->route('user.list')->with(['message' => 'Xóa thành công']);
    }
}
