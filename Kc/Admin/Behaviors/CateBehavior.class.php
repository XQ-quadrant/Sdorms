<?php
/**
 * Created by PhpStorm.
 * User: xq
 * Date: 15-12-20
 * Time: 下午6:56
 */

namespace Admin\Behaviors;
use Admin\Model\CateModel;
use Think\Behavior;
use Think\Model;

class CateBehavior extends Behavior
{
    // 行为参数定义
    protected $options   =  array(
        'TEST_PARAM'        => true,   //  行为参数 会转换成TEST_PARAM配置参数
    );
    //protected $cateList  =  [];
    protected $model ;

    //public $ul_class= "nav";
    //public $ul_id= "side-menu";
    public $css= ['class'=>"topnav menu-left-nest"]; //<ul>的 css
    public $aCss= "class=\"tooltip-tip ajax-load\""; //<a>的 css

    public function __construct()
    {
        $this->model= new Model();
        //parent::construct();
    }

    // 行为扩展的执行入口必须是run
    /**
     * @param mixed $params
     */
    public function run(&$params)
    {
        echo $this->cateNav($this->catelist());

    }


    /**获取栏目排序数组
     * @param int $pre_cate
     * @return mixed
     */
    public function catelist($pre_cate =0){

        $cateArray = $this->model->query("select id,`name`,pre_cate,uri,icon from cate WHERE pre_cate=$pre_cate AND status=7 ORDER BY `LEVEL`");//$cate->where(['$pre_cate'=>$pre_cate])->select();
        //$this->cateList = $cateArray;
        foreach( $cateArray as $v=>$k){
            //echo $v['id'];
            $cateArray[$v]['next_cate'] = $this->catelist($k['id']);
        }
        return $cateArray;
    }

    /**栏目数组进行html转换
     * @param $list
     * @return string
     */
    public function cateNav($list,$css){
        if(empty($css)){
            $css=$this->css;
        }
        $cssStr="";
        foreach($css as $k=>$v){
            $cssStr.=$k.'='."\"$v\" ";
        }
        $ul ="<ul $cssStr >\n";
        foreach($list as $v=>$k){
            $ul.="<li>\n<a class={$this->aCss} href=\"{$k['uri']}\" title=\"{$k['name']}\" >"."<i class=\"{$k['icon']}\"></i>
                    <span>{$k['name']}</span></a>\n";
            if(!empty($k['next_cate'])){
                $this->css = [];  //ul的css清除
                $this->aCss= "class=\"tooltip-tip1 ajax-load\"";
                $ul.=$this->cateNav($k['next_cate'],[]);
            }
            $ul.= "</li>\n";
        }
        $ul.= "</ul>\n";
        return $ul;

    }
}
/*<ul class="topnav menu-left-nest">

<li>
    <a class="tooltip-tip ajax-load" href="#" title="Blog App">
        <i class="icon-document-edit"></i>
        <span>主 页</span>
    </a>
    <ul>
        <li>
            <a class="tooltip-tip2 ajax-load" href="blog-list.html" title="Blog List"><i class="entypo-doc-text"></i><span>我的住宿</span></a>
        </li>
        <li>
            <a class="tooltip-tip2 ajax-load" href="blog-detail.html" title="Blog Detail"><i class="entypo-newspaper"></i><span>Blog Details</span></a>
        </li>
    </ul>
</li>
<li>
    <a class="tooltip-tip ajax-load" href="social.html" title="Social">
        <i class="icon-feed"></i>
        <span>我的住宿</span>

    </a>
</li>
<li>
    <a class="tooltip-tip ajax-load" href="media.html" title="Media">
        <i class="icon-camera"></i>
        <span>我的房源</span>

    </a>
</li>
</ul>*/
