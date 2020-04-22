<?php

echo ' 

<!DOCTYPE HTML>
<html lang="ru">
<head>
  <meta charset="utf-8"/>
  <title>Личный кабинет | Документы</title>
  <link rel="shortcut icon" href="' . $host . '/data/logo-2.png" type="image/x-icon" />
  <link rel="stylesheet" href="' . $host . '/Libs/bootstrap-4.4.1-dist/css/bootstrap.min.css">
  <link href="' . $host . '/Libs/MaterialDesign-Webfont-master/css/materialdesignicons.css" rel="stylesheet" type="text/css"/>
  
  <link href="' . $host . '/css/style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <header class="top-navigatio-fixed" style="z-index: 300;">
        <nav class="navbar py-0 justify-content-between shadow-sm-05">
            <ul class="nav">
                <li class="d-flex mr-4">
                    <a class="navbar-btn navbar-toggle-btn nav-link-hover" href="#">
                        <span>
                            <svg class="squre-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-menu">
                                <line x1="3" y1="12" x2="21" y2="12"></line>
                                <line x1="3" y1="6" x2="21" y2="6"></line>
                                <line x1="3" y1="18" x2="21" y2="18"></line>
                            </svg>
                        </span>
                    </a>
                </li>
                <li class="d-flex nav-item">
                    <a class="d-flex navbar-brand align-items-center" href="#">
                        <img class="brand-img d-inline-block" src="' . $host . '/data/logo.svg" alt="brand" style="height: 30px">
                    </a>
                </li>
            </ul>            
            <ul class="nav">
                <li class="d-flex mr-3">
                    <a class="navbar-btn nav-link-hover" href="#" style="padding: 0px 12px;">
                        <span class="feather-icon">
                            <svg class="squre-20" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell">
                                <path d="M22 17H2a3 3 0 0 0 3-3V9a7 7 0 0 1 14 0v5a3 3 0 0 0 3 3zm-8.27 4a2 2 0 0 1-3.46 0"></path>
                            </svg>
                        </span>
                        <span class="badge-wrap">
                            <span class="badge badge-brown badge-indicator badge-indicator-sm badge-pill pulse"></span>
                                
                        </span>
                    </a>
                </li>
                <li class="media" >
                    <div class="btn-group">
                        <a class="navbar-btn dropdown-toggle no-after" data-toggle="dropdown" type="button" href="#" >
                            <img src="' . $host . '/data/avatar_supermen.jpg" alt="..." class="rounded-circle" style="width: 35px; height: 35px;">
                            <small class="ml-2">Георгий Сафонов</small>
                            <span class="ml-1 mdi mdi-chevron-down"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right ">
                            <button class="dropdown-item dropdown-grey-style" type="button"> 
                                <span class="mdi-18px mr-3 mdi mdi-account"></span>
                                Профиль
                            </button>
                            <button class="dropdown-item dropdown-grey-style" type="button"> 
                                <span class="mdi-18px mr-3 mdi mdi-bell"></span>
                                Уведомления
                            </button>
                            <button class="dropdown-item dropdown-grey-style" type="button">
                                <span class="mdi-18px mr-3 mdi mdi-cogs"></span>
                                Настройки
                            </button>
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item dropdown-grey-style" type="button">
                                <span class="mdi-18px mr-3 mdi mdi-information"></span>
                                О приложении
                            </button>                            
                            <div class="dropdown-divider"></div>
                            <button class="dropdown-item dropdown-grey-style" type="button">
                                <span class="mdi-18px mr-3 mdi mdi-logout-variant"></span>
                                Выход
                            </button>
                        </div>
                    </div>
                </li>
            </ul>            
        </nav>  
    </header>';
?>