<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(){
//        DB::beginTransaction();
//        $user=DB::table('user')->insert(['name'=>'test3','age'=>'15','sex'=>'0','class'=>'157']);
//
//        if($user){
//            DB::commit();
//        }else{
////            DB::rollBack();
//        }
//        $roles = DB::table('user')->pluck('name', 'age');
//        dd($roles) ;
//        foreach ($roles as $name => $title) {
//
//        }
//        dd($titles);
//        $u=DB::table('h_users')->orderBy('id')->pluck('name')->chunk(2, function($u) {
//            // Process the records...
//            dd($u);
////            return false;
//        });
//        $users = DB::table('h_users')->count();
//

//         $users = DB::table('user')->max('age');
//        $users = DB::table('user')->distinct()->get();
//            dd($users);
        $users = DB::table('h_users')
            ->crossJoin('user')   //查询的条数为两个表条数之积　若有冲突的子段以user表为基准
            ->get();
//        dd($users);

//
//        $users = DB::table('users')
//            ->join('h_users', function ($join) {
//                $join->on('users.id', '=', 'h_users.id');
//            })
//            ->get();
////        dd($users);
//        $first = DB::table('user')
//            ->where('name','6666');
//
//        $users = DB::table('user')
//            ->where('name','zhang')
//            ->union($first)
//            ->get();
//            dd($users);

//        $users = DB::table('h_users')->where([
//            ['stu', '=', '1'],
//            ['name', '=', 'wan'],
//        ])->get();  //and
//        $users = DB::table('user')
//            ->where('name','6666')
//            ->orWhere('name', 'zhang')
//            ->get();//or
//
//        $users = DB::table('user')
//            ->wherenotNull('name')
//            ->get();

//        $users = DB::table('user')->skip(2)->take(3)->get();//tiao guo qian liang ge xian shi san tiao shu ju
//        dd($users);

//        $users = DB::table('users')
//            ->when($role, function ($query) use ($role) {
//                return $query->where('role_id', $role);
//            })
//            ->get();

//        $users = DB::table('user')->increment('id',1);
//        dd($users);

    }


    public function show(){
//       return redirect()->route('tr',['id'=>'1']);


    }

}
