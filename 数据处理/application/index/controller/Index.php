<?php
namespace app\index\controller;

use think\Controller;
class Index extends Controller
{
    public function lists()
    {

        $offset = input("get.offset",0);

        $limit = input("get.limit",10);

        $data = db("music") -> limit($offset,$limit) -> order("id asc") -> select();
        foreach ($data as $k => $v) {
            $data[$k]['url'] = 'http://192.168.154.1:8088'.$v['url'];
            $data[$k]['pic'] = 'http://192.168.154.1:8088'.$v['pic'];
            $data[$k]['playpic'] = 'http://192.168.154.1:8088'.$v['playpic'];
        }
//        dump($data);
//                return "明嫄";
//        echo json($data -> toArray());
        return json($data);
    }

}