<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use jeremykenedy\LaravelRoles\Traits\HasRoleAndPermission;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use jeremykenedy\LaravelRoles\Models\Role;
use jeremykenedy\LaravelRoles\App\Http\Middleware\VerifyRole;

class UsersController extends Controller
{
    public function index(){
        $users = User::latest()->paginate(10);
        return view('admin.users.index' , compact('users'));
    }
    public function create()
    {
        return view('admin.users.create');
    }
    public function store(Request $request)
    {
        $unput = $request->all();
        User::create($input);
        return redirect('user')->with('flash_message', 'user Addedd!');
    }
    public function show($id)
    {
        $user = User::find($id);
        return view ('admin.users.show')->with('users', $user);


    }
    public function edit($id)
    {
        $user = User::find($id);
        return view('admin.users.edit')->with('users', $user);

    }
    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'user Updated!');
    }
    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')
            ->withSuccess(__('User deleted successfully.'));
    }
}
