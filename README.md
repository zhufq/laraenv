# laraenv
这是一个可以动态修改env文件配置的类库

在家无聊 写一个库玩玩

Route::get("/test",function (){
    //举例子
    $data = ['lang'=>"en"];
    app('zhuenv')->edit($data);
    //到env查看是否改变
});

注意点  env文件里面要存在这个变量(如lang);
