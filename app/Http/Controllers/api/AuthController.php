<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    /**
    * @OA\Post(
    *     path="/auth",
    *     tags={"Auth"},
    *     summary="Get token of autentication.",
    *     description="Return this bearer token",
    *     @OA\Parameter(
    *       name="email",
    *       in="query",
    *       required=true,
    *       @OA\Schema(type="string")
    *     ),
    *     @OA\Parameter(
    *       name="password",
    *       in="query",
    *       required=true,
    *       @OA\Schema(type="string")
    *     ),
    *     @OA\Response(
    *       response=200,
    *       description="Token autentication",
    *     ),
    * )
    */
    public function auth(Request $request){
        $user = User::where("email", $request->email)->first();
        //Hash::check($request->password, $user->password)  //===> Verifica se a request password bate com o valor de hash do banco
        if(!$user && !Hash::check($request->password, $user->password)){//Verifica se o usuário pode ou não ter acesso
            throw ValidationException::withMessages([
                "status" => "error", //Status == error || success
                "message" => "Credentials invalid."
            ]);
        }

        //Gerar um token para usuário elegivel
        $token = $user->createToken($request->deviceName)->plainTextToken;

        return response()->json([
            "token" => $token,
        ]);
    }
}
