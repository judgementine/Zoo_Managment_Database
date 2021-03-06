<!DOCTYPE html>
<html lang="zh">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <title>back-stage management</title>
    <link rel="stylesheet" href="../plugin/layui/css/layui.css">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../css/admin.css">
</head>
<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">

    <div class="layui-header custom-header">
        <ul class="layui-nav layui-layout-left">
            <li class="layui-nav-item slide-sidebar" lay-unselect>
                <a href="javascript:void(0);" class="icon-font"><i class="ai ai-menufold"></i></a>
            </li>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:void(0);">ADMIN</a>
                <dl class="layui-nav-child">
                    <dd><a href="../login.html">Logout</a></dd>
                </dl>
            </li>
        </ul>
    </div>

    <div class="layui-side layui-bg-black custom-admin">
        <div class="layui-side-scroll">
            <div class="custom-logo">
                <h1>back-stage management</h1>
            </div>

            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul id="nav" class="layui-nav layui-nav-tree"  lay-filter="test">
                <li class="layui-nav-item layui-nav-itemed">
                    <a href="javascript:void(0);">
                        <i class="layui-icon">&#xe857;</i>
                        <em>Animal</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="components/animal/index.php">list</a></dd>
                        <dd><a href="components/animal/editor.html">create</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:void(0);">
                        <i class="layui-icon">&#xe857;</i>
                        <em>Customer</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="components/customer/index.php">list</a></dd>
                        <dd><a href="components/customer/editor.html">create</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:void(0);">
                        <i class="layui-icon">&#xe857;</i>
                        <em>Finance</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="components/finance/index.php">list</a></dd>
                        <dd><a href="components/finance/editor.html">create</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:void(0);">
                        <i class="layui-icon">&#xe857;</i>
                        <em>Department</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="components/department/index.php">list</a></dd>
                        <dd><a href="components/department/editor.html">create</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:void(0);">
                        <i class="layui-icon">&#xe857;</i>
                        <em>Employee</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="components/employee/index.php">list</a></dd>
                        <dd><a href="components/employee/editor.html">create</a></dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:void(0);">
                        <i class="layui-icon">&#xe857;</i>
                        <em>Shops</em>
                    </a>
                    <dl class="layui-nav-child">
                        <dd><a href="components/shops/index.php">list</a></dd>
                        <dd><a href="components/shops/editor.html">create</a></dd>
                    </dl>
                </li>
            </ul>
        </div>
    </div>

    <!-- 主体 -->
    <div class="layui-body">
        <div class="layui-tab app-container" lay-allowClose="true" lay-filter="tabs">
            <ul id="appTabs" class="layui-tab-title custom-tab"></ul>
            <div id="appTabPage" class="layui-tab-content"></div>
        </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
    </div>
</div>
<script src="../plugin/layui/layui.js"></script>
<script src="../js/index.js"></script>
<script>
    //JavaScript代码区域
    layui.use('element', function(){
        var element = layui.element;

    });
</script>
</body>
</html>
