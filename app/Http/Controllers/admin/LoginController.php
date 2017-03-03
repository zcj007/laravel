<?php

namespace App\Http\Controllers\admin;
use DB;
use Hash;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBlogPost;
use App\Http\Controllers\Controller;

class LoginController extends Controller
{
    public function login()
    {

//        return view('admin.login.login');
       echo  __DIR__;

    }

    public function dologin(Request $request)
    {

        $user=DB::table('h_users')->where('name',$request->input('name'))->first();

            if(!$user){

                return back()->with('error','用户名不存在');

            }

            if($user->stu =='0'){

                return back()->with('error','没有权限');

            }
    //    dd($user);

            if(Hash::check($request->input('pass'),$user->pass)){

                session(['user'=>$user]);

                return redirect('/test')->with('success','登录成功');
    //    echo '12';
            }else{

                return back()->with('error','登陆失败');
            }

    }

    public function logout()
    {

        session()->forget('user');

        return redirect('/');

    }


    public function add()
    {

        return view('admin.gl.add');

    }

    public function doadd(Request $request)
    {

        $this->validate($request,[
            'name'=>'required',
            'pass'=>'required',
            'repass'=>'required|same:pass',

        ],[
            'name.required'=>'账号不能为空',
            'pass.required'=>'密码不能为空',
            'repass.required'=>'重复密码不能为空',
            'repass.same'=>'两次密码不一致',
        ]);

        $data = $request->except(['_token','repass']);

        $data['pass'] = Hash::make($data['pass']);

        $res = DB::table('h_users')->insert($data);

        if($res){

            return redirect('/logadd')->with('success','添加用户成功');

        }else{

            return back()->with('error','添加用户失败');
        }

    }

    public function logindex(Request $request)
    {

        $data = DB::table('h_users')

            ->where(function($query)use($request){

                if($request->input('keywords')){

                    $query->where('name','like','%'.$request->input('keywords').'%');

                }

            })->paginate($request->input('num',2));

        return view('admin.gl.index',['list'=>$data,'request'=>$request->all()]);

    }

    public function ajax(StoreBlogPost $request)
    {

//        ／／加个中间件防止将超级管理员修改了，直接引入这个中间价类$this 调取方法

        if($request->name =='禁用'){

            $stu='0';

        }else{

            $stu='2';
        }

        $up=DB::table('h_users')->where('id',$request->id)->update(['stu'=>$stu]);

        if($up){

          echo '操作成功';

        }else{

           echo '操作失败';
        }

    }




}
