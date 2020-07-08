<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Requests\HelloRequest;
use Validator;

class HelloController extends Controller
{
    public function index(Request $request)
	{
        if($request->hasCookie('msg'))
        {
            $msg = 'Cookie: '.$request->cookie('msg');
        }else{
            $msg = '※クッキーはありません。';
        }
        return view('hello.index',['msg'=>$msg]);
        // $validator = Validator::make($request->query(),[
        //     'id'=>'required',
        //     'pass'=>'required',
        // ]);
        // if($validator->fails()){
        //     $msg = 'クエリーに問題があります。';
        // }else{
        //     $msg = 'ID/PASSを受け付けました。フォームを入力してください。';
        // }
        // return view('hello.index', ['msg'=>$msg,]);
    }

    public function post(Request $request)
    {
        $validate_rule = [
            'msg'=>'required',
        ];
        $this->validate($request, $validate_rule);
        $msg = $request->msg;
        $response = response()->view('hello.index',['msg'=>'「'. $msg. '」をクッキーに保存しました。']);
        $response->cookie('msg', $msg, 100);
        return $response;
        // $rules = [
        //     'name'=>'required',
        //     'mail'=>'email',
        //     'age'=>'numeric',
        // ];
        // $messages=[
        //     'name.required'=>'名前を入力してください',
        //     'mail.email'=>'メールアドレスを入力してください',
        //     'age.numeric'=>'整数で入力してください',
        //     'age.min'=>'0以上で入力してください',
        //     'age.max'=>'200以下で入力してください',
        // ];

        // $validator = Validator::make($request->all(),$rules,$messages);

        // $validator->sometimes('age','min:0',function($input){
        //     return !is_int($input->age);
        // });
        // $validator->sometimes('age','max:200',function($input){
        //     return !is_int($input->age);
        // });

        // if($validator->fails()){
        //     return redirect('/hello')
        //         ->withErrors($validator)
        //         ->withInput();
        // }
        // return view('hello.index',['msg'=>'正しく入力されました']);
    }
}
