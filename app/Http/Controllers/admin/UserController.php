<?php

namespace App\Http\Controllers\admin;
use DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{

    public function index()
    {

        return view('admin.layout.index');

    }

    public function select(Request $request)

    {

        $data1 = DB::table('user')

            ->where(function($query)use($request){

                if($request->input('keywords')){

                    $query->where('name', 'like','%'.$request->input('keywords').'%');

                }

            })->paginate($request->input('num',2));



        $query = DB::table('user');

        if($request->input('keywords')){

            $query->where('name', 'like','%'.$request->input('keywords').'%');

        }


        $query->paginate($request->input('num',2));

        return view('admin.user.index',['list'=>$data1,'request'=>$request->all()]);

    }

    public function add()
    {

        return view('admin.user.add');

    }

    public function insert(Request $request)
    {

        $this->validate($request, [

            'name' => 'required',

            'sex' => 'required',

            'age' => 'required|integer',

            'class' => 'required',
        ],[

            'name.required'=>'名字不能为空',

            'sex.required'=>'名字不能为空',

            'age.required'=>'名字不能为空',

            'age.integer'=>'zhengshu',

            'class.required'=>'名字不能为空',

        ]);

        $date=$request->except(['_token']);

        $res= DB::table('user')->insert($date);

        if($res){

            return back()->with('success','添加成功');

        }else{

            return back()->with('error','添加失败');

        }
    }

    public function edit($id)
    {

        $res2=DB::table('user')->where('id',$id)->first();

        return view('admin.user.edit',['res'=>$res2,'u'=>$id]);

    }

    public function update(Request $request,$u)
    {

        $res3=$request->except('_token');

        $res4=DB::table('user')->where('id',$u)->update($res3);

        if($res4){

            return redirect('/select')->with('success','修改成功');

        }else{

            return back()->with('error','修改失败');

        }

    }

    public function del($de)
    {
        $res5=DB::table('user')->where('id',$de)->delete();

        if($res5){

            return back()->with('success','删除成功');

        }else{

            return back()->with('error','删除失败');

        }
        
                 }


}
