<!DOCTYPE html>
<html lang="jp">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>お茶屋さん</title>
    <!-- bootstrap -->
    <link href="/ci/boot/css/bootstrap.min.css" rel="stylesheet"> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <style type="text/css"> body {padding-top: 50px;} </style>

    <!-- bootstrap carosel -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>    
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <script src="js/bootstrap.min.js"></script>   
  </head>
  <body>
    <!-- TOP -->
    <div class="navbar navbar-default navbar-fixed-top">
      <div class="container">  
        <a class="navbar-brand" href="#"> </a>
        <div class="navbar-header">
          <button class="navbar-toggle collapsed"data-toggle="collapse" data-target="#target">
            <span class="sr-only">Toggle Navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
        <div class="collapse navbar-collapse" id="target">
          <ul class="nav navbar-nav navbar-right">
            <?php 
              if($this->session->userdata['ss_user_id']== "costomer"){
            ?>
                <li><a href="#">『<?php echo $this->session->userdata['ss_user_id']; ?>』
                   様には会員登録お勧めします。</a></li>
                <li><a href="/ci/index.php/Controller_EC/login_page">ログイン</a></li>
                <li><a href="/ci/index.php/Controller_EC/signin_page">会員登録</a></li>
                <li><a href="/ci/index.php/Controller_EC/cart_page/1">カート</a></li>
                <li><a href="/ci/index.php/Controller_EC/order_info_page">注文情報</a></li>
            <?php
              }else{
            ?>
                <li><a href="#">『<?php echo $this->session->userdata['ss_user_id']; ?>』
                   様ご来店ありがとうございます。</a></li>
                   <li><a href="/ci/index.php/Controller_EC/logout">ログアウト</a></li>
                <li><a href="/ci/index.php/Controller_EC/cart_page/1">カート</a></li>
                <li><a href="/ci/index.php/Controller_EC/mypage/2">MyPage</a></li>       
            <?php
              }
            ?>
          </ul>
        </div>
      </div>
    </div>
    <!-- TOP -->
    
    <!-- LOGO / SEARCH -->
    <br>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-1">
        </div>
        <div class="col-md-1">
          <a href="/ci/index.php/Controller_EC/home"><img src="/ci/img/logo.png" width="230px"></a>
        </div>
        <div class="col-md-5">
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search"/>
            <a href="#"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></a>
          </form>
        </div>
        <div class="col-md-5">
					<?php 
            if($this->session->userdata['ss_user_id']== "master"){
            ?>
           <a href="/ci/index.php/Controller_EC/product_upload_page"><img src="/ci/img/pd_insert.png" width="180px"></a>
         <?php } ?> 
        </div>      
      </div>
    </div>
    <!-- LOGO / SEARCH -->

    <!-- INTRODUCE / EVENT / REVIEW / FAQ -->
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-3">

        </div>
        <div class="col-md-9">
          <div class="collapse navbar-collapse" id="target">
            <ul class="nav navbar-nav">
              <li><a href="#">紹介</a></li>
              <li><a href="#">イベント(セール)</a></li>
              <li><a href="#">レビュー</a></li>
              <li><a href="#">FAQ</a></li>
              <li><a href="#">お問い合わせ</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- INTRODUCE / EVENT / REVIEW / FAQ -->

    <!-- CATEGORY / BIG PHOTO --><!-- CATEGORY / BIG PHOTO -->
    <div class="container-fluid">
      <div class="row">
       <!-- 3단길이의 첫번째 열 -->
        <div class="col-md-1">
        </div>  
        <div class="col-md-2">
          <!-- <-- 패널 타이틀(optional) -->
          <br> 
          <div class="panel panel-default">
            <div class="panel-heading">
              <h1 class="panel-title">カテゴリリスト</h1>
            </div>
          <!-- <-- 메뉴목록 --> 
            <ul class="list-group">
              <?php foreach($category as $ls) : ?>
                 <li class="list-group-item"><a href="/ci/index.php/Controller_EC/category/<?=$ls->cg_no?>"><?=$ls->cg_name?></a></li>
              <?php endforeach ?>
            </ul>
          </div>
        </div>
        <!-- 카테고리, 큰사진 중 큰사진 및 상품태그 시작 -->
        <div class="col-md-8">
        
          <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              <div class="item active">
                <center>
                  <img class="img-thumbnail" src="/ci/img/tee3.jpg" alt="Chania" style="height: 450px">
                </center><div class="carousel-caption">
                  <h3>お客様</h3>
                  <p>ご来店ありがとうございます！</p>
                </div>
              </div>

              <div class="item">
                <center>
                  <img class="img-thumbnail" src="/ci/img/redteee2.jpg" alt="Chicago" style="height: 450px">
                </center>
                <div class="carousel-caption">
                  <h3>本場のお茶の味</h3>
                  <p>味わってみますか？</p>
                </div>
              </div>

              <div class="item">
                <center>
                  <img class="img-thumbnail" src="/ci/img/redtea4.jpg" alt="New York" style="height: 450px">
                </center>
                <div class="carousel-caption">
                  <h3>いつもお客様のため</h3>
                  <p>頑ばります！</p>
                </div>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <br>


          <!-- 상품리스트 시작태그 -->
          <div class="row">
            <!-- 한개의 상품 -->
          <?php foreach($product as $ls) : ?>

            <div class="col-sm-6 col-md-4">
              <a href="/ci/index.php/Controller_EC/product/<?=$ls->pd_no?>">
                <div class="thumbnail">
                  <img class="img-thumbnail" src="/ci<?=$ls->pd_img?>" style="min-height:160px; height:90px;" />
                  <div class="caption">
                    <h3><?=$ls->pd_name?></h3>
                    <h4>値段: <?=$ls->pd_price?></h4>
                    <h4>在庫: <?=$ls->pd_stock?></h4>
                    <p style="overflow: hidden; text-overflow: ellipsis; white-space: nowrap; width: 180px;">説明: <?=$ls->pd_comment?></p>
                    <p>　
                      <a href="/ci/index.php/Controller_EC/buy_page/<?=$ls->pd_no?>" class="btn btn-primary" role="button">購入</a>
                      <a href="/ci/index.php/Controller_EC/quick_cart/<?=$ls->pd_no?>" class="btn btn-success" role="button">カゴへ</a>
                    </p>
                  </div>
                </div>
              </a>
            </div>
          <?php endforeach ?>

          <!-- 상품리스트 끝 태그-->
          </div>

        <!-- 카테고리, 큰사진 중 큰사진 및 상품태그 시작 -->
        </div>

        <div class="col-md-1">
        </div>
      </div>
    </div>
    <!-- CATEGORY / BIG PHOTO --><!-- CATEGORY / BIG PHOTO -->
    <br><br><br><br><br>
    <!-- Footer -->
    <footer class="navbar navbar-default navbar-fixed-bottom">
      <div class="row">
        <span></span>
        <!-- <h6 align="center"> 現在のカート </h6>  -->
        <?php $i=1;?>
        <?php foreach($this->cart->contents() as $items): ?>
          <div class="col-md-1">
            <div class="thumbnail">
              <a href="/ci/index.php/Controller_EC/product/<?php echo $items['id']; ?>">
                <img class="img-thumbnail" src="/ci<?php echo $items['img']; ?>"style="min-height:50px; height: 50px" />
              </a>
            </div>
          </div>
        <?php $i++; ?>
        <?php endforeach; ?>
        <div class="col-md-1">
          <br>☜ カート
        </div>
      </div>     
    </footer>
  </body>
</html>

