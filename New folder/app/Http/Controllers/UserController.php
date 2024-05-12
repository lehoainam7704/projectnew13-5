<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;

//use App\Models\U;


class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //hien thi danh sach tai khoan
        $User = User::paginate(10);
        return view('admin_user.index', compact('User'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin_user.createUser');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            //
            // Validate request data
            //
            $validatedData = $request->validate([
                'user_name' => 'required|string|max:255',
                'user_email' => 'required|string|max:255',
                'user_password' => 'required',
                'user_phone' => 'required',
                'user_address' => 'required',
                'user_avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'usertype' => 'required'
            ]);

            try {
                // Handle image upload
                if ($request->hasFile('user_avatar')) {
                    $image = $request->file('user_avatar');
                    $imageName = time() . '.' . $image->getClientOriginalExtension();
                    $image->move(public_path('images'), $imageName); // Lưu ảnh vào thư mục public/img
                } else {
                    // Nếu không có ảnh được tải lên, bạn có thể xử lý ở đây
                    $imageName = 'default.jpg'; // hoặc tên ảnh mặc định khác
                }
            } catch (Exception $ex) {
                throw new Exception("Lỗi upload hình");
            }

            // Create new User
            $user = new User();
            $user->name = $validatedData['user_name'];
            $user->email = $validatedData['user_email'];
            $user->password = $validatedData['user_password'];
            $user->phone = $validatedData['user_phone'];
            $user->address = $validatedData['user_address'];
            $user->avatar = $imageName;
            $user->save();

            return redirect()->to('admin_user')->with('success', 'User successfully!');
        } catch (Exception $ex) {
            return redirect()->to('admin_user')->with('failed', $ex->getMessage());
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('admin_user.editUser')->with('user', $user);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            //
            // Validate request data
            $validatedData = $request->validate([
                'user_name' => 'required|string|max:255',
                'user_email' => 'required|string|max:255',
                'user_password' => 'required',
                'user_phone' => 'required',
                'user_address' => 'required',
                'user_avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
                'usertype' => 'required'
            ]);

            // Find the user
            $user = User::findOrFail($id);

            // Update user fields
            $user->name = $validatedData['user_name'];
            $user->email = $validatedData['user_email'];
            $user->password = $validatedData['user_password'];
            $user->phone = $validatedData['user_phone'];
            $user->address = $validatedData['user_address'];
            $user->avatar = $validatedData['user_avatar'];

            // Check if a new image is uploaded
            if ($request->hasFile('user_avatar')) {
                // Handle image upload
                $image = $request->file('user_avatar');
                $imageName = time() . '.' . $image->getClientOriginalExtension();
                $image->move(public_path('images'), $imageName); // Save the image to public/img
                // Update the product's image
                $user->avatar = $imageName;
            }

            // Save the updated user
            $user->save();

            return redirect()->to('admin_user')->with('success', 'User upload deleted !');
        } catch (Exception $ex) {
            return redirect()->to('admin_user')->with('failed', 'Failed to update user !');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->to('admin_user')->with('success', 'User successfully deleted !');
    }
}
