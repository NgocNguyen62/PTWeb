<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
        <!-- <img src="<?=$assetDir?>/img/logoTN.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8"> -->
        <!-- <span class="brandd-text font-weight-light" >   Trung Nguyên COFFEE</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
           
            <!-- <div class="info">
                <a href="#" class="d-block">Alexander Pierce</a>
            </div> -->
        </div>

        <!-- SidebarSearch Form -->
        <!-- href be escaped -->
        <!-- <div class="form-inline">
            <div class="input-group" data-widget="sidebar-search">
                <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                <div class="input-group-append">
                    <button class="btn btn-sidebar">
                        <i class="fas fa-search fa-fw"></i>
                    </button>
                </div>
            </div>
        </div> -->

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <?php
            echo \hail812\adminlte\widgets\Menu::widget([
                'items' => [
                    [
                        'label' => 'Quản lý sản phẩm',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Tạo mới sản phẩm', 'url' => ['products/create']],
                            ['label' => 'Các sản phẩm được tạo', 'url' => ['products/']],

                            // ['label' => 'Các sản phẩm được tạo', 'iconStyle' => 'far'],
                        ]
                    ],


                    [
                        'label' => 'Quản lý danh mục',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Tạo mới danh mục', 'url' => ['categories/create']],
                            ['label' => 'Các danh mục được tạo', 'url' => ['categories/']],

                            // ['label' => 'Các sản phẩm được tạo', 'iconStyle' => 'far'],
                        ]
                    ],

                    [
                        'label' => 'Quản lý hồ sơ',
                        // 'icon' => 'tachometer-alt',
                        // 'badge' => '<span class="right badge badge-info">2</span>',
                        'items' => [
                            ['label' => 'Tạo mới hồ sơ', 'url' => ['user-profile/create']],

                            ['label' => 'Các hồ sơ được tạo', 'url' => ['user-profile/']],

                            // ['label' => 'Các sản phẩm được tạo', 'iconStyle' => 'far'],
                        ]
                    ],



                    // ['label' => 'Simple Link', 'icon' => 'th', 'badge' => '<span class="right badge badge-danger">New</span>'],
                    // ['label' => 'Yii2 PROVIDED', 'header' => true],
                    // ['label' => 'Login', 'url' => ['site/login'], 'icon' => 'sign-in-alt', 'visible' => Yii::$app->user->isGuest],
                    // ['label' => 'Gii',  'icon' => 'file-code', 'url' => ['/gii'], 'target' => '_blank'],
                    // ['label' => 'Debug', 'icon' => 'bug', 'url' => ['/debug'], 'target' => '_blank'],
                    // ['label' => 'MULTI LEVEL EXAMPLE', 'header' => true],
                    // ['label' => 'Level1'],
                    // [
                    //     'label' => 'Level1',
                    //     'items' => [
                    //         ['label' => 'Level2', 'iconStyle' => 'far'],
                    //         [
                    //             'label' => 'Level2',
                    //             'iconStyle' => 'far',
                    //             'items' => [
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle'],
                    //                 ['label' => 'Level3', 'iconStyle' => 'far', 'icon' => 'dot-circle']
                    //             ]
                    //         ],
                    //         ['label' => 'Level2', 'iconStyle' => 'far']
                    //     ]
                    // ],
                    // ['label' => 'Level1'],
                    // ['label' => 'LABELS', 'header' => true],
                    // ['label' => 'Important', 'iconStyle' => 'far', 'iconClassAdded' => 'text-danger'],
                    // ['label' => 'Warning', 'iconClass' => 'nav-icon far fa-circle text-warning'],
                    // ['label' => 'Informational', 'iconStyle' => 'far', 'iconClassAdded' => 'text-info'],
                ],
            ]);
            ?>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>


<style>
    .brandd-text {
    text-align: display: block;
    margin: 0 auto;
    text-align: center;
    margin-left: 2px;
}
.nav-sidebar .nav-link p {
    display: inline;
    margin: 0;
    white-space: normal;
    font-size: 14px;
    color: #f6f6f6;
}
[class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:focus, [class*=sidebar-dark-] .nav-treeview>.nav-item>.nav-link.active:hover {
    background-color: rgb(52 58 64);
    /* color: #ffffff; */
}
</style>