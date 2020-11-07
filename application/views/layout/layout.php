<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="<?=vendor_path()?>fontaweseme/css/all.min.css">
        <link rel="stylesheet" href="<?=css_path()?>main.css">
        <link rel="stylesheet" href="<?=css_path()?>utilities.css">
        <?php $map = directory_map('./assets/css/' . $active, 1);?>
        <?php if($map): ?>
            <?php foreach($map as $i): ?>
                <link rel="stylesheet" href="<?=css_path() . $active .'/' . $i ?>">
            <?php endforeach;?>
            <?php endif; ?>
        <title><?=$title?></title>

    </head>
    <body class="bg-light">
        <div class="layout">
            
            <div class="header">
                
                <nav class="navbar navbar-expand-lg navbar-light bg-white border">
                  
                        
                        <button class="btn drawer-toggler"><span class="navbar-toggler-icon"></span></button>
                        <a class="navbar-brand mr-auto" href="#"><?=$title?></a>

                        
                    <?php if(!empty($page_actions)): ?>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#actions-menu" aria-controls="actions-menu" aria-expanded="false" aria-label="Toggle navigation">
                            <i class="fal fa-ellipsis-v"></i>
                        </button>

                        <div class="collapse navbar-collapse" id="actions-menu">
                            <div class="d-flex ml-auto justify-content-end">
                                <ul class="navbar-nav">
                                    
                                <?php foreach($page_actions as $item): ?>
                                    <li class="nav-item">
                                        <a href="<?=$item['link']?>" class="<?=$item['class']?>"  <?= $item['attr'] ?>><?=$item['label']?></a>
                                    </li>
                                <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    <?php elseif(!empty($page_buttons)): ?>
                    <div class="page-actions">
                        <?php foreach($page_buttons as $i): ?>
                            <?= $i ?>
                        <?php endforeach; ?>
                    </div>
                    <?php endif; ?>

                </nav>
            </div>
            <div class="sidebar bg-dark">
                <div class="sidebar-header text-light shadow-sm">
                    <span class="brand-icon">
                        <i class="material-icons">museum</i>
                    </span>
                    <span class="brand-name">
                        MARKET
                    </span>
                </div>
                <div class="sidebar-section bg-gray-dark d-flex align-items-center">
                    <img src="<?=image_path()?>default.png" alt="" class="thumbnail-circle mr-3">
                    <a href="#" class="text-light"><?=$user['firstname']?>&nbsp;<?=$user['lastname']?></a>
                    
                    
                </div>

                <ul class="nav flex-column mt-3 px-2">
                    <li class="nav-item">
                        <a href="<?=base_url()?>" class="nav-link <?=is_active('home',$active)?>">
                            <i class="material-icons mr-3">home</i>
                            Home
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="<?=base_url()?>orders" class="nav-link <?=is_active('orders',$active)?>">
                            <i class="material-icons mr-3">local_mall</i>
                            Orders
                        </a>
                    </li> -->
                    <li class="nav-item">
                        <a href="<?=base_url()?>products" class="nav-link <?=is_active('products',$active)?>">
                            <i class="material-icons mr-3">local_offer</i>
                            Products
                        </a>
                    </li>
                    <!-- <li class="nav-item">
                        <a href="<?=base_url()?>customers" class="nav-link <?=is_active('customers',$active)?>">
                            
                        <i class="material-icons mr-3">person</i>
                        Customers
                    </a>
                    </li> -->

                </ul>
                <hr />
                <ul class="nav flex-column mt-3 px-2">
                    <li class="nav-item">
                        <a href="<?=base_url()?>app/logout" class="nav-link">
                            <i class="material-icons mr-3">logout</i>
                            <small>LOGOUT</small>
                        </a>
                    </li>
                </ul>
            </div>
            <main class="page-content bg-light">
                <?=$yield?>
            </main>
            <div class="layout-static"></div>
        </div>
        <?php if(!empty($modal)):?>
            <?= $modal ?>
        <?php endif; ?>
         <!-- Optional JavaScript -->
         
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
        <?php $map = directory_map('./assets/js/' . $active, 1); ?>
        <?php if($map): ?>
        <?php foreach($map as $i): ?>
            <script src="<?=js_path() . $active .'/' . $i ?>"></script>
        <?php endforeach;?>
        <?php endif; ?>
        <script src="<?=vendor_path()?>fontaweseme/js/all.min.js"></script>
        <script src="<?=js_path()?>main.js"></script>
        
    </body>
</html>