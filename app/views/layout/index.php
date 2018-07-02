<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/AmazeUI-2.7.2/assets/css/amazeui.min.css">
    <style>
        @media only screen and (min-width: 1200px) {
            .blog-g-fixed {
                max-width: 1200px;
            }
        }

        @media only screen and (min-width: 641px) {
            .blog-sidebar {
                font-size: 1.4rem;
            }
        }

        .blog-main {
            padding: 20px 0;
        }

        .blog-title {
            margin: 10px 0 20px 0;
        }

        .blog-meta {
            font-size: 14px;
            margin: 10px 0 20px 0;
            color: #222;
        }

        .blog-meta a {
            color: #27ae60;
        }

        .blog-pagination a {
            font-size: 1.4rem;
        }

        .blog-team li {
            padding: 4px;
        }

        .blog-team img {
            margin-bottom: 0;
        }

        .blog-content img,
        .blog-team img {
            max-width: 100%;
            height: auto;
        }

        .blog-footer {
            padding: 10px 0;
            text-align: center;
        }
    </style>
</head>
<body>
<header class="am-topbar">
    <h1 class="am-topbar-brand">
        <a href="#">blog</a>
    </h1>

    <button class="am-topbar-btn am-topbar-toggle am-btn am-btn-sm am-btn-success am-show-sm-only"
            data-am-collapse="{target: '#doc-topbar-collapse'}"><span class="am-sr-only">导航切换</span> <span
                class="am-icon-bars"></span></button>

    <div class="am-collapse am-topbar-collapse" id="doc-topbar-collapse">
        <ul class="am-nav am-nav-pills am-topbar-nav">
            <li class="am-active"><a href="#">首页</a></li>
            <li><a href="#">项目</a></li>
            <li class="am-dropdown" data-am-dropdown>
                <a class="am-dropdown-toggle" data-am-dropdown-toggle href="javascript:;">
                    菜单 <span class="am-icon-caret-down"></span>
                </a>
                <ul class="am-dropdown-content">
                    <li class="am-dropdown-header">标题</li>
                    <li><a href="#">关于我们</a></li>
                    <li><a href="#">关于字体</a></li>
                    <li><a href="#">TIPS</a></li>
                </ul>
            </li>
        </ul>

        <form class="am-topbar-form am-topbar-left am-form-inline am-topbar-right" role="search">
            <div class="am-form-group">
                <input type="text" class="am-form-field am-input-sm" placeholder="搜索文章">
            </div>
            <button type="submit" class="am-btn am-btn-default am-btn-sm">搜索</button>
        </form>

    </div>
</header>

<div class="am-g am-g-fixed blog-g-fixed">
    <div class="am-u-md-8">
        <article class="blog-main">
            <h3 class="am-article-title blog-title">
                <a href="#">Google fonts 的字體（display 篇）</a>
            </h3>
            <h4 class="am-article-meta blog-meta">by <a href="">open</a> posted on 2014/06/17 under <a href="#">字体</a></h4>

            <div class="am-g blog-content">
                <div class="am-u-lg-7">
                    <?php echo $content?>
                    <p><!-- 本demo来自 http://blog.justfont.com/ -->你自信滿滿的跟客戶進行第一次 demo。秀出你精心設計的內容時，你原本期許客戶冷不防地掉下感動的眼淚。</p>

                    <p>因為那實在是太高級了。</p>

                    <p>除了各項基本架構幾乎完美無缺之外，內文是高貴的，有著一些距離感的，典雅的襯線字體。不是 Times New
                        Roman，而是很少有人見過的，你精心挑選過的字體，凸顯你品味的高超。而且它並沒有花上你與業主一毛錢，或許這也非常重要。</p>
                </div>
                <div class="am-u-lg-5">
                    <p><img src="http://f.cl.ly/items/451O3X0g47320D203D1B/不夠活潑.jpg"></p>
                </div>
            </div>
            <div class="am-g">
                <div class="am-u-sm-12">
                    <p>看著自己的作品，你的喜悅之情溢於言表，差點就要說出我要感謝我的父母之類的得獎感言。但在你對面的客戶先是一點表情也沒有，又瞬間轉為陰沉，抿了抿嘴角冷冷的說……</p>

                    <p>「我要一種比較跳的感覺懂嗎？」</p>
                </div>
            </div>
        </article>
        <hr class="am-article-divider blog-hr">
        <ul class="am-pagination blog-pagination">
            <li class="am-pagination-prev"><a href="">&laquo; 上一页</a></li>
            <li class="am-pagination-next"><a href="">下一页 &raquo;</a></li>
        </ul>
    </div>

    <div class="am-u-md-4 blog-sidebar">
        <div class="am-panel-group">
            <section class="am-panel am-panel-default">
                <div class="am-panel-hd">关于我</div>
                <div class="am-panel-bd">
                    <p>前所未有的中文云端字型服务，让您在 web 平台上自由使用高品质中文字体，跨平台、可搜寻，而且超美。云端字型是我们的事业，推广字型学知识是我们的志业。从字体出发，关心设计与我们的生活，justfont blog
                        正是為此而生。</p>
                    <a class="am-btn am-btn-success am-btn-sm" href="#">查看更多 →</a>
                </div>
            </section>
            <section class="am-panel am-panel-default">
                <div class="am-panel-hd">文章目录</div>
                <ul class="am-list blog-list">
                    <li><a href="#">Google fonts 的字體（sans-serif 篇）</a></li>
                    <li><a href="#">[but]服貿最前線？－再訪桃園機場</a></li>
                    <li><a href="#">到日星鑄字行學字型</a></li>
                    <li><a href="#">glyph font vs. 漢字（上）</a></li>
                    <li><a href="#">浙江民間書刻體上線</a></li>
                    <li><a href="#">[極短篇] Android v.s iOS，誰的字體好讀？</a></li>
                </ul>
            </section>
        </div>
    </div>
</div>
<div><?echo $content?></div>

<footer class="blog-footer">
    <p>blog template<br/>
        <small>© Copyright XXX. by the AmazeUI Team.</small>
    </p>
</footer>
</body>
</html>
<script src="./assets/js/jquery.min.js"></script>
<script src="./assets/AmazeUI-2.7.2/assets/js/amazeui.min.js"></script>