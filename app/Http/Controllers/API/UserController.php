<?php

namespace App\Http\Controllers\API;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Image;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:api');
    }

    public function index()
    {
        return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users',
            'password' => 'required|string|min:6',
        ]);
        return User::create([
            'salonsId'      => 1,
            'name'          => $request['name'],
            'email'         => $request['email'],
            'password'      => Hash::make($request['password']),
            'userPhone'     => $request['userPhone'],
            'userAddress'   => $request['userAddress'],
            'userImage'     => 'avatar.jpg',
            'userRoal'      => $request['userRoal'],
        ]);
    }

        // user profile
    public function userProfile()
    {
        return auth('api')->user();
    }


    public function show($id)
    {
        //
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
        $user = User::findOrFail($id);
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|min:6',
        ]);
        $user->update($request->all());
        return ['message', 'update the user info'];
    }

    public function updateProfile(Request $request)
    {
        $user = auth('api')->user();
        $this->validate($request,[
            'name' => 'required|string|max:191',
            'email' => 'required|string|email|max:191|unique:users,email,'.$user->id,
            'password' => 'sometimes|required|min:6'
        ]);
        $currentPhoto = $user->userImage;
        if($request->userImage != $currentPhoto){
            $name = time().'.' . explode('/', explode(':', substr($request->userImage, 0, strpos($request->userImage, ';')))[1])[1];
            \Image::make($request->userImage)->save(public_path('img/profile/').$name);
            $request->merge(['userImage' => $name]);
            $photo = public_path('img/profile/').$currentPhoto;
            if(file_exists($photo)){
                @unlink($photo);
            }
        }
        if(!empty($request->password)){
            $request->merge(['password' => Hash::make($request['password'])]);
        }
        $user->update($request->all());
        return ['message' => "Success"];
    }
    
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return ['message'=>'User Deleted'];
    }
}
