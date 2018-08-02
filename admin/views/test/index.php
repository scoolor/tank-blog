<?php

use \engine\application\web\Url;
?>

<div class="am-cf am-padding am-padding-bottom-0">
    <div class="am-fl am-cf">
        <strong class="am-text-primary am-text-lg">后台用户管理</strong>
    </div>
</div>

<hr>

<div class="am-g">
    <div class="am-u-sm-12 am-u-md-6">
        <div class="am-btn-toolbar">
            <div class="am-btn-group am-btn-group-xs">
                <a type="button" class="am-btn am-btn-default" href="<?php echo Url::generateUrl(['admin', 'test', 'create'])?>">
                    <span class="am-icon-plus"></span>
                    新增
                </a>
            </div>
        </div>
    </div>
    <div class="am-u-sm-12 am-u-md-3">
        <div class="am-input-group am-input-group-sm">
            <input type="text" class="am-form-field" placeholder="用户名">
            <span class="am-input-group-btn">
            <button class="am-btn am-btn-default" type="button">搜索</button>
          </span>
        </div>
    </div>
</div>

<div class="am-g">
    <div class="am-u-sm-12">
        <form class="am-form">
            <table class="am-table am-table-striped am-table-hover table-main">
                <thead>
                    <tr>
                        <th class="table-title">用户名</th>
                        <th class="table-type">密码</th>
                        <th class="table-set">操作</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($responseData as $eachData) {?>
                    <tr>
                        <td><a href="#"><?php echo $eachData['username']?></a></td>
                        <td><?php echo $eachData['password']?></td>
                        <td>
                            <div class="am-btn-toolbar">
                                <div class="am-btn-group am-btn-group-xs">
                                    <button class="am-btn am-btn-default am-btn-xs am-text-secondary">
                                        <span class="am-icon-pencil-square-o"></span>
                                        编辑
                                    </button>
                                    <button class="am-btn am-btn-default am-btn-xs am-text-danger am-hide-sm-only">
                                        <span class="am-icon-trash-o"></span>
                                        删除
                                    </button>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
            <div class="am-cf">
                共 15 条记录
                <div class="am-fr">
                    <ul class="am-pagination">
                        <li class="am-disabled"><a href="#">«</a></li>
                        <li class="am-active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">»</a></li>
                    </ul>
                </div>
            </div>
            <hr />
            <p>注：.....</p>
        </form>
    </div>

</div>

