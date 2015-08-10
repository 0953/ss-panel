<?php
include_once 'lib/config.php';
include_once 'header.php';
?>


<div class="section no-pad-bot" id="index-banner">
        <div class="container">
            <br><br>
            <h1 class="header center orange-text"><?php echo $site_name; ?></h1>
            <div class="row center">
                <h5 class="header col s12 light">轻松科学上网   保护个人隐私</h5>
            </div>
            <div class="row center">
                <a href="user/register.php" id="download-button" class="btn-large waves-effect waves-light orange">立即注册</a>
            </div>
            <br><br>
        </div>
</div>


<div class="container">
    <div class="section">

        <!--   Icon Section   -->
        <div class="row">
            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">flash_on</i></h2>
                    <h5 class="center">快人一步</h5>

                    <p class="light">
                        最新智能路由器硬件，无线传输速度超1000M，比普通路由器快2-3倍；
专利网络加速技术，经对比测试，中东/欧洲/拉美/北美/亚太等海外网络访问速度提高10倍以上
                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">settings</i></h2>
                    <h5 class="center">易如反掌</h5>

                    <p class="light">
                        专为外贸行业设计的路由器软件，三步两分钟完成路由器上网配置；
手机、电脑有线或无线连上路由器就可以访问国内外各种网站，真正零配置，简单才是王道
                    </p>
                </div>
            </div>

            <div class="col s12 m4">
                <div class="icon-block">
                    <h2 class="center light-blue-text"><i class="material-icons">group</i></h2>
                    <h5 class="center">通达四海</h5>

                    <p class="light">
                        专为外贸行业设计的快易通服务，轻松稳定访问google/facebook/twitter等所有网站；
路由器能智能区分国内、国外网络，国内网络高速直连，不耗费海外访问流量，省钱又省心
                    </p>
                </div>
            </div>

        </div>

    </div>
    <br><br>

    <div class="section">

    </div>
</div>
<?php  include_once 'ana.php';
       include_once 'footer.php';?>