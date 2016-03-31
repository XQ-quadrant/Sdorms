<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 16-3-29
 * Time: 上午1:31
 */

namespace Admin\Model;


use Think\Model;

class RoomModel extends Model implements Atc
{
    protected $tableName='room';

    protected $mid = 8;

    public $strLimit = 45;

    public function listView(&$list,$modelInfo,$module = 'admin'){
        $listExtra = implode(',',$modelInfo['list_extra'][$module]); //列表附加项，如：user
        $reList =[];
        foreach($list as $k=>$v){
            if($this->mid==$v['model_id']){
                $raw = $this->query("select {$listExtra} from {$modelInfo['identity']} where id = {$v['atc_id']}");
                /*if(mb_strlen($raw[0]['content'],'utf-8')>$this->strLimit){
                    $raw[0]['content']= mb_substr($raw[0]['content'],0,$this->strLimit,'utf-8');
                    $raw[0]['content'].='……';
                }*/
                $date = date_create($raw[0]['original_time']);
                $raw[0]['original_time'] = $date->format('m-d');
                //$raw[0]['original_time']='cx';// date_format($raw[0]['original_time'],'%m月%d日');
                $reList[$k] = array_merge($v,$raw[0]);

                unset($list[$k]);
            }
        }
        return $reList;
    }
    /**
     * @param $id
     * @return array
     */
    public function detail($id){
        $atcInfo = $this->query("select * from cate_atc WHERE id={$id}");
        //var_dump($atcInfo);

        if($atcInfo[0]['status']==1){
            $atcContent = $this->where('id=%d',$atcInfo[0]['atc_id'])->find();
            //$atcInfo = $this->query("select title from {$this->trueTableName} WHERE id=$this->id");
            $atcInfo[0]+=$atcContent;
            return $atcInfo[0];
        }else{
            return 'h';//$this->getDbError();
            //返回状态信息
        }
    }

    /**
     * @param $cate
     * @return mixed
     */
    public function addAtc($cate){
        $title = $this->title;
        $userId['id'] = session('id');
        //$userInfo = get_user_info($userId,['name','id']);
        //$this->uname = $userInfo['name'];

        $atc_id =$this->add();

        //return true;
        if($atc_id==false){
            return ['msg'=>$this->getError(),'status'=>2];
            //return false;
        }

        $cate_atc = M('cate_atc');
        $cate_atc->atc_id = $atc_id;
        $cate_atc->uid = $userId['id'];
        $cate_atc->cate = $cate ;
        $cate_atc->title = $title ;
        $cate_atc->createtime = date('y-m-d H:i:s') ;
        $cate_atc->model_id = $this->mid;
        $cate_atc->status=1;

        if($cate_atc->add()){

            return ['msg'=>'房屋添加成功','status'=>1];

        }else{
            $this->delete($atc_id);
            return ['msg'=>$cate_atc->getError(),'status'=>2];
        }
    }

    /**
     * @return mixed
     */
    public function editor($id){}

    /**
     * @param $cate
     * @param $id
     * @return bool
     */
    public function deleteAtc($cate,$id){
        //$this->delete();
    }

}