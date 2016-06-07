<?php
//  防止全局变量造成安全隐患
$admin = false;
//  启动会话，这步必不可少
session_start();
//  判断是否登陆
if (isset($_SESSION["admin"]) && $_SESSION["admin"] === true) {
} 
else {
    //  验证失败，将 $_SESSION["admin"] 置为 false
  $_SESSION["admin"] = false;
  die("you have to login");
  unset($_SESSION['admin']);
	//  这种方法是销毁整个 Session 文件
  session_destroy();
}
?>
<!DOCTYPE html>
<html lang="en"> 
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>
            企业管理系统
        </title>
        <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.7/css/jquery.dataTables.css">
        <link href="http://cdn.bootcss.com/twitter-bootstrap/2.3.2/css/bootstrap.min.css"
        rel="stylesheet">
        <script type="text/javascript" charset="utf8" src="http://code.jquery.com/jquery-1.10.2.min.js">
        </script>
        <script src="bootstrap-3.3.5-dist/js/bootstrap.min.js">
        </script>
        <script type="text/javascript" charset="utf8" src="http://cdn.datatables.net/1.10.7/js/jquery.dataTables.js">
        </script>
        <script type="text/javascript" src="readData.js"></script>
        <style type="text/css">
            #hello{ float:right; margin-top: 10px; color: black; margin-right: 50px;
            } #hello li{ list-style-type:none; } #hello li a{ color:black; }
           
            #example{
                flaot:left;
            }
        </style>
        <script type="text/javascript">
            
            $(document).ready(function(){
                $("#add").hide();
              $("#addButton").click(function(){
                  $("#add").toggle();
              });
          });
      </script>
    </head>
    
    <body>
        <div class="navbar">
            <div class="navbar-inner">
                <a class="brand" href="#">
                    欢迎使用企业管理系统
                </a>
                <ul id="hello">
                    <li>
                        <a href="#">
                            <?php echo "你好, ".$_SESSION[ "user"]. " !"?>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="tabbable tabs-left">
            <ul class="nav nav-tabs">
                <li>
                    <a href="#system" data-toggle="tab">
                        系统主页
                    </a>
                </li>
                <li class="active">
                    <a href="#user_manage" data-toggle="tab">
                        用户管理
                    </a>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        考勤管理
                        <b class="caret">
                        </b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#duty1" data-toggle="tab">
                                工作登记
                            </a>
                        </li>
                        <li>
                            <a href="#duty2" data-toggle="tab">
                                事假登记
                            </a>
                        </li>
                        <li>
                            <a href="#duty3" data-toggle="tab">
                                考勤记录
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        系统管理
                        <b class="caret">
                        </b>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#system_manage1" data-toggle="tab">
                                system_manage1
                            </a>
                        </li>
                        <li>
                            <a href="#system_manage2" data-toggle="tab">
                                system_manage2
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane" id="system">
                    system_home_page
                </div>
                <div class="tab-pane active" id="user_manage">

                    <table id="example" class="display">
                        <thead>
                            <tr>
                                <th>卡号</th>
                                <th>姓名</th>
                                <th>部门</th>
                                <th>电话</th>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <button id="button">
                        删除
                    </button>
                     <button id="addButton">
                        增加
                    </button>
                    <div id="add">
                        <form action="add.php" method="post">
                            卡号: 
                            <input type="text" name="ID" />
                            
                            姓名: 
                            <input type="text" name="NAME" />
                            部门: 
                            <input type="text" name="PART" />
                            
                            电话: 
                            <input type="text" name="TEL" />
                            <input type="submit" value="Submit" />
                        </form>
                    </div>

                </div>
                <div class="tab-pane" id="duty1">
                    <p>
                        考勤管理1
                    </p>
                </div>
                <div class="tab-pane" id="duty2">
                    <p>
                        考勤管理2
                    </p>
                </div>
                <div class="tab-pane" id="duty3">
                    <p>
                        考勤管理3
                    </p>
                </div>
                <div class="tab-pane" id="system_manage1">
                    <p>
                        system_manage1
                    </p>
                </div>
                <div class="tab-pane" id="system_manage2">
                    <p>
                        system_manage2
                    </p>
                </div>
            </div>
        </div>
        
        <!-- /tabbable -->
     </body>

</html>
<?php
//unset($_SESSION['admin']);
//  这种方法是销毁整个 Session 文件
//session_destroy();
?>
