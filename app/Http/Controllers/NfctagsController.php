<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NfctagsController extends Controller
{
    
    /**
     * NFCタグ一覧情報取得
     **/
    public function getNfcTagsList(Request $request){
        $name = $request->input('name');
        var_dump($name);
    }
    
    /**
     * nfcタグ情報更新
     **/
    public function update(Request $request){
        $name = $request->input('name');
        var_dump($name);
    }

    /**
     * nfcタグ情報取得
     **/
    public function get(Request $request,$id){
        //バリデーション
        
        //データ取得
        
        //レスポンス
        return json_encode(array(
            'id'=>$id,
            'name'=>'池袋事務所の窓',
            'biko'=>'これはサンプルのレスポンスです',
            'officeid'=>1,
            'adate'=>date('Y/m/d'),
            'udate'=>date('Y/m/d'),
            ));
    }
    
    /**
     * nfcタグ情報登録
     **/
    public function addTagid(Request $request){
        $name = $request->input();
    }

    /**
     * nfcタグ論理削除
     **/
    public function modify(Request $request){
        $id = $request->input('id');
    }

    /**
     * nfcタグタッチ履歴追加
     **/
    public function addTouchHistory(Request $request){
        $id = $request->input('id');
    }
    
}
