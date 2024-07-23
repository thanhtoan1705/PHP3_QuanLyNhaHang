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
        // $users = $this->user->latest('id')
        //     ->where('active', 'active')
        //     ->paginate(5)
        //     ->setPageName('page_active');

        // $usersInactive = $this->user->latest('id')
        //     ->where('active', 'inactive')
        //     ->paginate(5)
        //     ->setPageName('page_inactive');
        // return view('admin.users.list', compact('users', 'usersInactive'));

        // $users = $this->user->getLatestPaginated(5, 'page_active');
        // $usersInactive = $this->user->getInactiveLatestPaginated(5, 'page_inactive');
        // return view('admin.users.list', compact('users', 'usersInactive'));


        // của mình
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

        return redirect()->route('user.list')->with(['message' => 'Tạo nên thành công']);
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
        // dd($dataUpdate);

        if ($request->filled('password')) {
            $dataUpdate['password'] = Hash::make($request->password);
        } else {
            $dataUpdate['password'] = $user->password;
        }

        $user->update($dataUpdate);

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
