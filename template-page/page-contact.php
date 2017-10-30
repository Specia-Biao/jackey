<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/22
 * Time: 13:32
 *
 *Template Name:联系我们
 */

get_header();
$id = get_the_ID();
get_header("nav"); ?>

<div class="contact_body">
    <div class="contact_banner">
        <div class="w1200">
            <h2><i>TEL:</i><?php echo get_post_meta("$id","咨询电话",true);?></h2>
            <h3>全国咨询热线</h3>
            <h4><?php echo get_post_meta("$id","公司名称",true);?></h4>
            <div class="yingxiao">
                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo get_post_meta("$id","qq",true);?>&site=qq&menu=yes" target="_blank">在线咨询</a>
                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo get_post_meta("$id","qq",true);?>&site=qq&menu=yes" target="_blank">在线咨询</a>
                <a href="http://wpa.qq.com/msgrd?v=3&uin=<?php echo get_post_meta("$id","qq",true);?>&site=qq&menu=yes" target="_blank">在线咨询</a>
            </div>
            <div class="t">
                <div>咨询电话：<?php echo get_post_meta("$id","咨询电话",true);?>&nbsp;&nbsp;<br/> E-mail：&nbsp; <?php echo get_post_meta("$id","邮箱",true);?></div>
            </div>
            <div class="dizhi">
                <div class="text">
                    <span><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/images/dizhi2.png" alt=""/></span>
                    <p class="bt"><?php echo get_post_meta("$id","地址",true);?></p>
                </div>
            </div>
            <a href="javascript:void(0)" class="more goto_id" data-id="mess"><img src="<?php echo get_bloginfo("stylesheet_directory","display")?>/assert/images/icon7.png" alt=""/></a>
        </div>
    </div>

    <div class="contact_con w1200"><a name="mess"></a>
        <div class="home_tit">
            <h3 class="bt">在线留言</h3>
            <p class="t">收到您的留言，我们将在第一时间回复</p>
        </div>
        <div class="contact_ly">
                <ul class="clearfix">
                    <li>
                        <input type="text" placeholder="您的姓名" name="username" id="username" value=""/>
                    </li>
                    <li>
                        <input type="text" placeholder="联系电话" name="telphone" id="telphone" value=""/>
                    </li>
                    <li>
                        <input type="text" placeholder="电子邮箱" name="email" id="email" value=""/>
                    </li>
                    <li style="width: 930px;">
                        <textarea name="message" id="message" placeholder="留言内容" rows="" cols=""></textarea>
                    </li>
                    <li style="width: 930px;">
                        <button class="btn" id="button" style="width: 100%;cursor:pointer;">立即提交</button>
                    </li>
                </ul>
        </div>
    </div>
    <style type="text/css">
        /*以下样式必须 --------------- */
        #allmap, #allmap2{ width:100%; height:100%; position:absolute; left:0; top:0; }
        /*地图容器*/
        .anchorBL{ display:none; }
        /*隐藏百度LOGO*/
    </style>
    <div class="contact-map">
        <div id="allmap"></div>
    </div>
</div>



<?php get_footer(); ?>
<script type="text/javascript" src="http://api.map.baidu.com/api?v=2.0&ak=g41hmFHSZIWCZa4ZNAFBhzpMLLwEnVEv"></script>
<script type="text/javascript">
    // 百度地图API功能
    var map = new BMap.Map("allmap");    // 创建Map实例
    var point = new BMap.Point(120.257014, 31.548315);   //坐标拾取网址：http://api.map.baidu.com/lbsapi/getpoint/index.html

    var marker = new BMap.Marker(point);  // 创建标注


    var top_left_control = new BMap.ScaleControl({anchor: BMAP_ANCHOR_TOP_LEFT});// 左上角，添加比例尺
    var top_left_navigation = new BMap.NavigationControl();  //左上角，添加默认缩放平移控件

    marker.setAnimation(BMAP_ANIMATION_BOUNCE); //跳动的动画
    map.centerAndZoom(point, 15);  // 初始化地图,设置中心点坐标和地图级别
    map.addOverlay(marker);               // 将标注添加到地图中
    map.enableScrollWheelZoom(true);     //开启鼠标滚轮缩放
    map.addControl(new BMap.MapTypeControl());   //添加地图类型控件
    map.setCurrentCity("江苏");          // 设置地图显示的城市 此项是必须设置的


    window.onresize = function () {

        map.centerAndZoom(point, 15);  // 重置窗口的时候 重新获取中心点坐标的位置

    }

    /*
     * 若要开启全景模式，解注
     */

    /*var stCtrl = new BMap.PanoramaControl(); //构造全景控件
    map.addTileLayer(new BMap.PanoramaCoverageLayer());
    stCtrl.setOffset(new BMap.Size(20, 20));
    map.addControl(stCtrl);//添加全景控件*/


    //添加缩放控件
    map.addControl(top_left_control);
    map.addControl(top_left_navigation);
    /*map.addControl(top_right_navigation); */
</script>
<script>
        function submitCheck(){
            var username = $('#username').val();
            if(username==""){
                alert('请填写联系人!');
                return false;
            }
            var telphone = $('#telphone').val();
            if(telphone==""){
                alert('请填写联系电话!');
                return false;
            }
            var email = $('#email').val();
            if(email==""){
                alert('请填写邮箱!');
                return false;
            }
            var message = $('#message').val();
            if(message==""){
                alert('请填写留言内容!');
                return false;
            }
            var id="<?php echo $id;?>";
            $.post("wp-comments-post.php",
                {
                    author:username,
                    comment:"联系人："+username+""+
                    "邮箱:"+email+""+
                    "电话:"+telphone+""+
                    "留言内容:"+message+"",
                    comment_post_ID:id,
                    comment_parent:0,
                },
                function(data,status){
                    alert("提交成功");
                });
        }
        $(function(){
            var contact_ly=$(".contact_ly");
            contact_ly.on("click","#button",function(){submitCheck()});
        });

</script>
