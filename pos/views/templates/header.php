<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--favicon-->
    <link rel="icon" href="<?php echo BASE_URL; ?>assets/images/alamacen-ico.png" type="image/png" />
    <link href="<?php echo BASE_URL; ?>assets/plugins/simplebar/css/simplebar.css" rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>assets/plugins/perfect-scrollbar/css/perfect-scrollbar.css" rel="stylesheet" />
    <link href="<?php echo BASE_URL; ?>assets/plugins/metismenu/css/metisMenu.min.css" rel="stylesheet" />
    <!-- loader-->
    <link href="<?php echo BASE_URL; ?>assets/css/pace.min.css" rel="stylesheet" />
    <script src="<?php echo BASE_URL; ?>assets/js/pace.min.js"></script>
    <!-- Bootstrap CSS -->
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/bootstrap-extended.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/app.css" rel="stylesheet">
    <link href="<?php echo BASE_URL; ?>assets/css/icons.css" rel="stylesheet">
    <!-- Theme Style CSS -->
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/dark-theme.css" /> -->
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/semi-dark.css" /> -->
    <!-- <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/header-colors.css" /> -->
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/DataTables/datatables.min.css" />
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/jquery-ui.min.css">
    <title><?php echo TITLE . ' - ' . $data['title']; ?></title>
</head>

<body>
    <!--wrapper-->
    <div class="wrapper">
        <!--sidebar wrapper -->
        <div class="sidebar-wrapper" data-simplebar="true">
            <div class="sidebar-header">
                <div>
                    <img src="<?php echo BASE_URL; ?>assets/images/logo-icono.png" class="logo-icon" alt="logo icon">
                </div>
                <div>
                    <h4 class="logo-text">PDV</h4>
                </div>
                <div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
                </div>
            </div>
            <!--navigation-->
            <ul class="metismenu" id="menu">
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa-solid fa-screwdriver-wrench"></i>
                        </div>
                        <br><br><br>
                        <div class="menu-title">Administración</div>
                        <br><br>
                    </a>
                    <ul>
                        <li> <a href="<?php echo BASE_URL . 'usuarios'; ?>"><i class="bx bx-right-arrow-alt"></i>Usuarios</a>
                        </li>
                        <li> <a href="<?php echo BASE_URL . 'admin/datos'; ?>"><i class="bx bx-right-arrow-alt"></i>Datos de la Empresa</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="javascript:;" class="has-arrow">
                        <div class="parent-icon"><i class="fa-solid fa-clipboard-list"></i>
                        </div>
                        <br><br><br>
                        <div class="menu-title">Mantenimiento</div>
                        <br><br>
                    </a>
                    <ul>
                        <li> <a href="<?php echo BASE_URL . 'medidas'; ?>"><i class="bx bx-right-arrow-alt"></i>Medidas</a>
                        </li>
                        <li> <a href="<?php echo BASE_URL . 'categorias'; ?>"><i class="bx bx-right-arrow-alt"></i>Categorias</a>
                        </li>
                        <li> <a href="<?php echo BASE_URL . 'productos'; ?>"><i class="bx bx-right-arrow-alt"></i>Productos</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'clientes'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-users"></i>
                        </div>
                        <br><br><br>
                        <div class="menu-title">Clientes</div>
                        <br><br>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'proveedor'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-cart-flatbed-suitcase"></i>
                        </div>
                        <br><br><br>
                        <div class="menu-title">Proveedores</div>
                        <br><br>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'compras'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-truck-fast"></i>
                        </div>
                        <br><br><br>
                        <div class="menu-title">Compras a Proveedores</div>
                        <br><br>
                    </a>
                </li>
                <li>
                    <a href="<?php echo BASE_URL . 'ventas'; ?>">
                        <div class="parent-icon"><i class="fa-solid fa-cash-register"></i>
                        </div>
                        <br><br><br>
                        <div class="menu-title">Ventas</div>
                        <br><br>
                    </a>
                </li>
            </ul>
            <!--end navigation-->
        </div>
        <!--end sidebar wrapper -->
        <!--start header -->
        <header>
            <div class="topbar d-flex align-items-center">
                <nav class="navbar navbar-expand">
                    <div class="mobile-toggle-menu"><i class='bx bx-menu'></i>
                    </div>
                    <div class="search-bar flex-grow-1">
                        <div class="position-relative">
                            <h6><?php echo TITLE; ?></h6>
                        </div>
                    </div>
                    <div class="user-box dropdown">
                        <a class="d-flex align-items-center nav-link dropdown-toggle dropdown-toggle-nocaret" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="<?php echo BASE_URL; ?>assets/images/avatars/avatar.png" class="user-img" alt="user avatar">
                            <div class="user-info ps-3">
                                <p class="user-name mb-0"><?php echo $_SESSION['nombre_usuario']; ?></p>
                                <p class="designattion mb-0"><?php echo $_SESSION['correo_usuario']; ?></p>
                            </div>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-end">
                            <li><a class="dropdown-item" href="javascript:;"><i class="bx bx-user"></i><span>Profile</span></a>
                            </li>
                            <li>
                                <div class="dropdown-divider mb-0"></div>
                            </li>
                            <li><a class="dropdown-item" href="javascript:;"><i class='bx bx-log-out-circle'></i><span>Logout</span></a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </header>
        <!--end header -->
        <!--start page wrapper -->
        <div class="page-wrapper">
            <div class="page-content">