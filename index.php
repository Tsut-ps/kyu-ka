<!doctype html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="theme-color" content="#acae54">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="twitter:card" content="summary" />
    <meta property="og:url" content="https://kyu-ka.site" />
    <meta property="og:title" content="抹茶のひとやすみ" />
    <meta property="og:description" content="通りすがりの暇人が作ったページです。温かい目で見てやってください。" />
    <meta property="og:image" content="https://kyu-ka.site/images/card-2.jpg" />
    <title>抹茶のひとやすみ</title>
    <link href="/favicon.ico" rel="icon">
    <link href="/css/stylesheet.css" rel="stylesheet">
</head>

<?php include "ctr.php"; ?>

<body class="index">

    <header>
        <div>
            <a class="logo" href="https://kyu-ka.site/"></a>
                <ul>
                    <li class="select">ようこそ</li>
                    <li><a href="/about/">About</a></li>
                    <li><a href="/favorite/">おすすめ!</a></li>
                    <li><a href="/extra/">おまけ</a></li>
                </ul>
        </div>
    </header>

    <main>

        <div class="top-content index">
            <div>
                <h1>抹茶<span class="mini">の</span>ひとやすみ</h1>
                <p>通りすがりの暇人が作ったページです。<br>温かい目で見てやってください。</p>
            </div>
        </div>

        <p class="notice">※追記／暇人と言いつつ本当は暇ではありません。</p>

        <div class="contents">
            <p><span class="counter"><?php echo $total; ?><span class="mini">人目の訪問者!</span> <span class="mini-mini">今日<?php echo $today; ?>人 昨日<?php echo $yesterday; ?>人</span></span></p>
            
            <p>「抹茶のひとやすみ」へようこそ!<br>
            当サイトは、Ma'cha(抹茶)が作成した、個人(プロフ)サイトです。あれこれいろいろ書いています。</p>
            <p>以前アクセスしたことがある人の中で当サイトの表示がおかしければ、現在の当サイトのバージョン表示(一番下に記載)が最新か確かめてください。最新でなければ、お使いのブラウザのキャッシュ削除をお試しください。</p>

            <h2>最新のニュース</h2>
            <p>ついに……アクセスカウンターを設置! やったね。<br>
            <p>キリ番体験をあなたに……(違うそうじゃない)。こら、誰だ、今リロードしまくったやつは!</p>
            
            <h3>軽量化と最適化について</h3>
            <p>――阿部寛のサイトの約1.6個分の読み込み時間を実現!! 阿部寛のサイトの平均読み込み時間が「92ミリ秒」だったのに対し、当サイトは「149ミリ秒」でした。</p>
            <p>最適化したことで、阿部寛のサイトを1.6回読み込んだぐらいの読み込み時間まで短縮しました。つまり爆速。</p>
            <p>阿部寛サイトの読み込み時間(阿部寛時間)を1単位とすると、当サイトは「1.6阿部寛時間」となります。やったぜ(????)。</p>
            
            <div class="detail">
                <p class="mini">2021年5月19日現在<br>
                    比較対象：阿部寛のサイトの読み込み時間と当サイト「抹茶のひとやすみ(v12)」の読み込み時間<br>
                    比較方法：キャッシュ削除(ゲストモード)後、光回線にてEdgeの検証機能よりFinish時間を5回計測した平均値で比較。アニメーションの表示時間を除く。<br>
                    結果：阿部寛のサイト[92.2ms] | 本サイト[149.4ms] ( time ×1.62 )</span>
                </p>
            </div>

            <h2>旧サイト名「抹茶休暇」の由来</h2>
            <p>冬休みに公開バージョン(1.00)を作ったから。ただそれだけです。「ただ、それだけ……?」どこかで聞いたような……。</p>
	        <p>なぜ抹茶なのか、といったものは、おまけページ(Extra)に作ってあります。</p>

            <h3>「抹茶のひとやすみ」に変更した理由</h3>
            <p>単に、語呂が良かったのと、占ったら結構良かったっていう、2つの安直な理由から。</p>

            <h2>雑談</h2>
            <p>「このフォント何使ってる?」「この画像はどこのもの?」という質問に関しては、LINEで受け付けています。ほとんどのものはフリー素材のものです。</p>
            <p>ですが、このサイトからのダウンロードなどはNGです。ちゃんと制作されたクリエイターに利益が渡らなくなってしまう恐れや、2次配布からの入手で規約違反に該当する恐れがあるからです。連絡していただければ、可能な限りURLなどをつけてご紹介します。</p>
            <p>もともと、STUDIOというサービスで作ってましたが、あまりにも重いので独自サーバーから配信するように変更しました。</p>
            <p>なお、他にWebサイトを持っている方向けに、相互の条件であればリンクをはります。</p>

            <br>

            <h3>推奨環境</h3>
            <p>パソコン：横幅1200px以上1920px以下</p><p>スマホ/タブレット：320px以上</p>

        </div>
    </main>

    <footer>
        <p>© 2019-2021 Ma'cha.</p>
    </footer>

</body>