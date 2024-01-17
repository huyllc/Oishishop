<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Http\Requests\Frontend\ProfileUpdateRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function updateProfile(ProfileUpdateRequest $request) : RedirectResponse{
        $user = Auth::user();

        $user->name = $request->name;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->save();

        toastr('Chỉnh sửa thông tin thành công','success');

        return redirect()->back();
    }
}
