<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

use \engine\application\web\Url;
?>


<div class="admin-content-body">
    <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf">
            <strong class="am-text-primary am-text-lg">后台用户管理</strong> /
            <small>新增用户</small>
        </div>
    </div>

    <hr>

    <form class="am-form" action="<?php echo Url::generateUrl(['admin', 'admin-user', 'store'])?>">
    <div class="am-tabs am-margin" data-am-tabs>
        <ul class="am-tabs-nav am-nav am-nav-tabs">
            <li class="am-active"><a href="#admin-user-basic">基本信息</a></li>
            <li><a href="#admin-user-detail">详细信息</a></li>
        </ul>

        <div class="am-tabs-bd">
            <div class="am-tab-panel am-fade am-in am-active" id="admin-user-basic">
                <div class="am-g am-margin-top">
                    <div class="am-u-sm-4 am-u-md-2 am-text-right">
                        用户名
                    </div>
                    <div class="am-u-sm-8 am-u-md-4">
                        <input type="text" name="username" class="am-input-sm">
                    </div>
                    <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                </div>

                <div class="am-g am-margin-top">
                    <div class="am-u-sm-4 am-u-md-2 am-text-right">
                        密码
                    </div>
                    <div class="am-u-sm-8 am-u-md-4">
                        <input type="text" disabled class="am-input-sm" placeholder="密码默认是:123456">
                    </div>
                    <div class="am-hide-sm-only am-u-md-6"></div>
                </div>

                <div class="am-g am-margin-top">
                    <div class="am-u-sm-4 am-u-md-2 am-text-right">状态</div>
                    <div class="am-u-sm-8 am-u-md-10">
                        <div class="am-btn-group" data-am-button>
                            <label class="am-btn am-btn-default am-btn-xs">
                                <input type="radio" name="status" value="1"> 正常
                            </label>
                            <label class="am-btn am-btn-default am-btn-xs">
                                <input type="radio" name="status" value="2"> 禁用
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="am-tab-panel am-fade" id="admin-user-detail">
                <div class="am-g am-margin-top">
                    <div class="am-u-sm-4 am-u-md-2 am-text-right">
                        文章标题
                    </div>
                    <div class="am-u-sm-8 am-u-md-4">
                        <input type="text" class="am-input-sm">
                    </div>
                    <div class="am-hide-sm-only am-u-md-6">*必填，不可重复</div>
                </div>
            </div>
        </div>
    </div>

    <div class="am-margin">
        <button type="button" class="am-btn am-btn-primary am-btn-xs">提交保存</button>
    </div>
    </form>
</div>

