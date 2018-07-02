<?php
/**
 * User: liuhao
 * Date: 18-7-2
 * Time: 下午5:30
 */
?>

    <div class="am-cf am-padding am-padding-bottom-0">
        <div class="am-fl am-cf">
            <strong class="am-text-primary am-text-lg">分类管理</strong>
        </div>
    </div>

    <hr>

    <div class="am-g">
        <div class="am-u-sm-12 am-u-md-6">
            <div class="am-btn-toolbar">
                <div class="am-btn-group am-btn-group-xs">
                    <button type="button" class="am-btn am-btn-default">
                        <span class="am-icon-plus"></span>
                        新增
                    </button>
                    <button type="button" class="am-btn am-btn-default">
                        <span class="am-icon-trash-o"></span>
                        删除
                    </button>
                </div>
            </div>
        </div>
        <div class="am-u-sm-12 am-u-md-3">
            <div class="am-input-group am-input-group-sm">
                <input type="text" class="am-form-field" placeholder="分类名">
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
                        <th class="table-check">
                            <input type="checkbox" /></th>
                        <th class="table-id">ID</th>
                        <th class="table-title">分类名</th>
                        <th class="table-type">父级分类</th>
                        <th class="table-date am-hide-sm-only">创建日期</th>
                        <th class="table-date am-hide-sm-only">修改日期</th>
                        <th class="table-set">操作</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><input type="checkbox" /></td>
                        <td>1</td>
                        <td><a href="#">分类一</a></td>
                        <td>root</td>
                        <td class="am-hide-sm-only">2018-01-01</td>
                        <td class="am-hide-sm-only">2018-01-01</td>
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
