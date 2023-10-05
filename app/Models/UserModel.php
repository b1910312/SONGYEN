<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
class UserModel extends Model
{
    public function AddAccount($name,$email,$pwd,$role)
    {
        $password = Hash::make($pwd);
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('users')->insert(
            ['name'=>"$name", 'email'=>"$email", 'password'=>"$password", 'role'=>"$role", 'created_at'=>$date]
        );
        return $sql;
    }
    public function UpdateAccount($name,$email)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('users')->where('email',"$email")->update(
            ['name'=>"$name",'updated_at'=>$date]
        );
        return $sql;
    }
    public function UpdateAccountRole($role,$email)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('users')->where('email',"$email")->update(
            [ 'role'=>"$role", 'updated_at'=>$date]
        );
        return $sql;
    }
    function AllUser()
    {
        $sql = DB::table('users')->get();
        return $sql;
    }
    function AllCustomer()
    {
        $sql = DB::table('users')->where('role',2)->get();
        return $sql;
    }
    function AllAdmin()
    {
        $sql = DB::table('users')->where('role',1)->get();
        return $sql;
    }
    public function CountUser()
    {
        $sql = DB::table('users')->where('role',1)->count('email');
        return $sql;
    }
    public function CountCustomer()
    {
        $sql = DB::table('users')->where('role',2)->count('email');
        return $sql;
    }
    public function OneAccount($email)
    {
        $sql = DB::table('users')->where('email',$email)->first();
        return $sql;
    }
    public function SetAdmin($email)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('users')->where('email',"$email")->update(['role'=>1,'updated_at'=>"$date"]);
        return $sql;
    }
    public function UnsetAdmin($email)
    {
        $date = date('Y-m-d H:i:s');
        $sql = DB::table('users')->where('email',"$email")->update(['role'=>2,'updated_at'=>"$date"]);
        return $sql;
    }
    public function ChangePassword($email,$pwd)
    {
        $date = date('Y-m-d H:i:s');
        $password = Hash::make($pwd);
        $sql = DB::table('users')->where('email',"$email")->update(['password'=>"$password",'updated_at'=>"$date"]);
        return $sql;
    }
    public function DeleteAccount($email)
    {
        $sql = DB::table('users')->delete("$email");
        return $sql;
    }
}
