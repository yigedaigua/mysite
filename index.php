<?php
require 'test.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>高效 ·工作 ·  摸鱼 ·兴趣 · 导航</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link rel="stylesheet" href="https://cdn.bootcss.com/zui/1.8.1/css/zui.min.css">
<script src="https://cdn.bootcss.com/zui/1.8.1/lib/jquery/jquery.js"></script>
<script src="https://cdn.bootcss.com/zui/1.8.1/js/zui.min.js"></script>
<link rel="stylesheet" href="style.css">
</head>
<!--    -->
<body>

<div id="content" data-customize="true" data-customtheme="true" class="default-bg">
<div class="main-index">
<div class="container content-box">
	<section class="sousuo">
	  <div class="search">
		<div class="search-box">
		  <img class="search-icon" src="images/logo.jpg">
		  <input type="text" id="txt" class="search-input" placeholder="小马哥的御用网页导航">
		  <button class="search-btn visible-sm visible-md visible-lg" id="search-btn">搜索</button>
		  <i class="search-clear icon icon-remove-sign" style="display: none;"></i>
		</div>
		<!-- 搜索热词 -->
		<div class="box search-hot-text" id="box" style="display: none;">
		  <ul></ul>
		</div>
		<!-- 搜索引擎 -->
		<div class="search-engine" style="display: none;">
		  <div class="search-engine-head">
			<strong class="search-engine-tit">选择默认搜索引擎：</strong>
			<div class="search-engine-tool">搜索热词： <span id="hot-btn" class="off"></span></div>
		  </div>
		  <ul class="search-engine-list">
		  </ul>
		</div>
	  </div>
	</section>
		<div class="row dh">
			<div class="col-sm-6 col-md-4 mb-3 dh">
				<div class="row">
					<div class="col-xs-12"><strong class="dhname" id="1">摸鱼 · 兴趣</strong></div>
					<?php
                    $sql = "SELECT * FROM app_site WHERE location = '1'"; 
                    $result = $conn->query($sql);
                    
                    if ($result instanceof mysqli_result && $result->num_rows > 0) {
                        // 输出数据
                        while ($row = $result->fetch_assoc()) {
                            // $row['id']
                            
                            echo "<div class=\"col-xs-4 mb-2\"><a href=\"" . $row['url'] . "\" target=\"_blank\">" . $row['name'] . "</a></div>";

                        }
                    }
                    ?>
                </div>
			</div>
			<div class="col-sm-6 col-md-4 mb-3 dh">
				<div class="row">
					<div class="col-xs-12"><strong class="dhname" id="1">内事 · 不决</strong></div>
					<?php
                    $sql = "SELECT * FROM app_site WHERE location = '2'"; 
                    $result = $conn->query($sql);
                    
                    if ($result instanceof mysqli_result && $result->num_rows > 0) {
                        // 输出数据
                        while ($row = $result->fetch_assoc()) {
                            // $row['id']
                            
                            echo "<div class=\"col-xs-4 mb-2\"><a href=\"" . $row['url'] . "\" target=\"_blank\">" . $row['name'] . "</a></div>";

                        }
                    }
                    ?>
				</div>
			</div>
		
			<div class="col-sm-6 col-md-4 mb-3 dh">
				<div class="row">
					<div class="col-xs-12"><strong class="dhname" id="1">工作 · 高效</strong></div>
					<?php
                    $sql = "SELECT * FROM app_site WHERE location = '3'"; 
                    $result = $conn->query($sql);
                    
                    if ($result instanceof mysqli_result && $result->num_rows > 0) {
                        // 输出数据
                        while ($row = $result->fetch_assoc()) {
                            // $row['id']
                            
                            echo "<div class=\"col-xs-4 mb-2\"><a href=\"" . $row['url'] . "\" target=\"_blank\">" . $row['name'] . "</a></div>";
                        }
                    }
                    ?>
				</div>
			</div>
				</div>
			</div>
		</div>
</div>

</div>
</div>
<!--
<footer class="footer text-center bg-white">
    <div class="container">
		<span id="hitokoto">:D 获取中...</span>
    </div>
</footer>
-->
<div id="get-top" title="回到顶部" style="display: none;"><i class="icon icon-arrow-up"></i></div>
<script src="js.js"></script>

<script type="text/javascript" src="https://js.users.51.la/20703043.js"></script>
</body>
</html>
       
