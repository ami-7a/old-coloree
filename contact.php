<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Colorful｜お問い合わせ</title>
  <link rel="stylesheet" href="css/ress.css"><!--リセットCSS-->
  <link rel="stylesheet" href="css/common.css"><!--共通CSS-->
  <link rel="stylesheet" href="css/commom2.css"><!--共通CSS2-->
  <link rel="stylesheet" href="css/contact.css"><!--contactのCSS-->
  <link rel="shortcut icon" href="img/logo.ico" type="image/x-icon">
  <meta name="description" content="素敵な出会いのお手伝いを。福岡の結婚相談所、カラフルです。オンライン婚活、各種イベント、カウンセラー相談により、安心、楽しい婚活を！お気軽にご相談ください">

  <!--google fonts-->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+JP:wght@300&display=swap" rel="stylesheet">


  <!--nav ページの場所 上にdot-->
  <style>
    .dot-text {
      font-size: 2rem;
      text-emphasis: circle orange;
      -webkit-text-emphasis: circle  orange;
    }
  </style>

  <!--ハンバーガーメニュー-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script>
    $(function() {
    $('.btn-gNav').on("click", function(){
  
      $(this).toggleClass('open');
      $('#gNav').toggleClass('open');
    });
  
  });
  
  // メニューをクリックされたら、非表示にする
  $(function() {
    $('.gNav-menu li a').on("click", function(){
       $('#gNav').removeClass('open');
    });
  });
  </script>
  
  <!--font awesome コード-->
  <script src="https://kit.fontawesome.com/931c5e739a.js" crossorigin="anonymous">
  </script>
</head>
<body>
  <header><!--全ページ共通ヘッダー-->
    <!--会社名-->
    <section class="company-name">
      <img src="img/colorful.png" alt="Companylogo">
    </section>

    <!--グロナビ-->
    <nav class="gnavi">
      <div class="gnavi-inner">
        <ul>
          <li><a href="index.html"><span>TOP</span></a></li>
          <li><a href="first.html" target="_blank" rel="noopener"><span>初めての方へ</span></a></li>
          <li><a href="why.html" target="_blank" rel="noopener"><span>選ばれる理由</span></a></li>
          <li><a href="plan.html" target="_blank" rel="noopener"><span>プラン料金</span></a></li>
          <li><a href="counselor.html" target="_blank" rel="noopener"><span>カウンセラー</span></a></li>
          <li><a href="faq.html" target="_blank" rel="noopener"><span>FAQ</span></a></li>
          <li><a href="contact.html" target="_blank" rel="noopener"><span>お問<span class="dot-text">い</span>合わせ</span></a></li>
        </ul>
      </div>
    </nav>

    <!--全ページ共通ハンバーガーメニュー-->
    <div id="hamburger">
      <p class="btn-gNav">
        <span></span>
        <span></span>
        <span></span>
      </p>

      <!--ハンバーガー内のグロナビ-->
      <nav id="gNav">
        <div class="gNav-menu">
          <a class="gNav-img" href="index.html"><img src="img/colorful-white.png" alt=""></a>
          <ul>
            <li><a href="index.html"><span>トップページ</span></a></li>
            <li><a href="first.html" target="_blank" rel="noopener"><span>初めての方へ</span></a></li>
            <li><a href="why.html" target="_blank" rel="noopener"><span>選ばれる理由</span></a></li>
            <li><a href="plan.html" target="_blank" rel="noopener"><span>プラン料金</span></a></li>
            <li><a href="counselor.html" target="_blank" rel="noopener"><span>カウンセラー</span></a></li>
            <li><a href="faq.html" target="_blank" rel="noopener"><span>よくある質問</span></a></li>
          </ul>

          <!--無料相談はこちらボタン-->
          <div class="contactbtn"><a href="contact.html" target="_blank" rel="noopener"><span>＞ 無料相談はこちら</span></a></div>
        </div>

        <!--ハンバーガー内SNSセクション-->
        <div class="sns-icons">
          <ul>
            <li>
              <a href="tel:092-753-6668" target="_blank" rel="noopener"><i class="fas fa-phone fa-lg"></i></a>
            </li>

            <!--インスタグラム-->
            <li>
              <a href="https://www.instagram.com/colorful0122/" target="_blank" rel="noopener"><i class="fab fa-instagram fa-lg"></i></a>
            </li>

            <!--LINE-->
            <li>
              <a href="https://lin.ee/oYkXzqj" target="_blank" rel="noopener"><i class="fab fa-line fa-lg"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </div>
  </header>

  <!--メイン-->
  <main class="main">

    <!--CSS共通セクションタイトル-->
    <section class="sectiontitle">
      <h1>Contact Us</h1>
      <p>-お問い合わせ-</p>
    </section>

    <!--CSS共通メインイメージ-->
    <section class="mainimg">
      <img src="contact.img/mail-flower.png" alt="">
    </section>

    <!--共通 h2-->
    <h2>無料相談フォーム<i class="far fa-envelope"></i></h2>
    

    <!--お問い合わせフォーム-->
    <form method="post" action="sent.php" id="form" class="topBefore">
      <input class="name" type="text" placeholder="お名前" name="name">
      <input class="name" type="text" placeholder="ふりがな" name="name2">
      <input class="age" type="age" placeholder="ご年齢" name="age">
      <input class="live" type="text" placeholder="お住まいの都道府県" name="live">
      <input class="email" type="email" placeholder="メール" name="email">
      <input class="tell" type="tel" placeholder="お電話番号" name="tell">

      <textarea id="message" type="text" placeholder="お問い合わせ" name="message"></textarea>
      
      <input id="submit" type="submit" value="送信">
    </form>

     <h2>お電話でのお問い合わせはこちら</h2>

     <div class="tell-number">
       <a href="tel:092-753-6668"><i class="fas fa-phone"></i><span>092-753-6668</span></a>
     </div>

     <div class="description">
       <div class="flex">
         <p class="time"><span>受付時間</span></p>
         <p class="time2"><span>10:00~17:00</span></p>
       </div>
       <div class="flex">
        <p class="date"><span>定休日 </span></p>
        <p class="time2"><span>不定休</span></p>
       </div>
     </div>
     
  </main>

  <!--全ページ共通フッター-->
  <footer id="footer">

    <!--会社情報-->
    <div class="info">
      <!--左-->
      <div class="info-left">
        <p>カラフル福岡<br>結婚相談所</p>
      </div>

      <!--真ん中-->
      <div class="info-center">
        <p class="adress">〒810-0024<br>福岡県福岡市中央区桜坂</p>
        <a class="tell" href="tel:092-753-6668">電話：０９２-７５３-６６６８</a> 
        <p class="jobhour">受付時間：１０:００~１７:００</p>
        <p class="jobdays">定休日：不定休</p>
        <p class="car-lot">パーキング：近くにあり</p>
      </div>

      <!--右 グロナビ-->
      <div class="info-right">
        <ul class="info-nav">
          <li><a href="index.html"><span>トップページ</span></a></li>
          <li><a href="first.html" target="_blank" rel="noopener"><span>初めての方へ</span></a></li>
          <li><a href="why.html" target="_blank" rel="noopener"><span>選ばれる理由</span></a></li>
          <li><a href="plan.html" target="_blank" rel="noopener"><span>プラン料金</span></a></li>
        </ul>   
        <ul class="info-nav2"> 
          <li><a href="counselor.html" target="_blank" rel="noopener"><span>カウンセラー</span></a></li>
          <li><a href="faq.html" target="_blank" rel="noopener"><span>よくある質問</span></a></li>
          <li><a href="contact.html" target="_blank" rel="noopener"><span>お問い合わせ</span></a></li>
        </ul>
      </div>
    </div>
    <!--コピーライト-->
    <p class="copy-right">©︎2021 colorful all rights reserved.</p>
  </footer>

  
  
</body>
</html>

