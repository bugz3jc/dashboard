<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">  

        
        
        <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:300,400,500,700" type="text/css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="<?=css_path()?>login.css">
        <title>Login</title>


    </head>
    <body >
        <div class="container">
            <div class="card login-card">
                <h2 class="card-header">Login</h2>
                <div class="card-body">
                    <?php if(!empty($this->session->flashdata('error'))): ?>
                        <div class="alert alert-danger d-flex" role="alert">
                           <i class="material-icons mr-3">error</i>
                            <?= $this->session->flashdata('error') ?>
                        </div>
                    <?php endif; ?>
                    <form action="<?=base_url()?>login/login_validation" method="post">
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="material-icons">person</i></span>
                            </div>
                            <input type="text" class="form-control" aria-label="User Name" name="username" placeholder="User name" value="admin">
                        </div>
                    </div>  
                    <div class="form-group">
                        <div class="input-group input-group-lg">
                            <div class="input-group-prepend">
                                <span class="input-group-text" ><i class="material-icons">lock</i></span>
                            </div>
                            <input type="password" class="form-control" aria-label="Sizing example input" name="password" placeholder="Password" value="b1admin">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Login
                    </button>
                    </form>
                </div>
            </div>
        </div>
            
               
        
         <!-- Optional JavaScript -->
         
         <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
    </body>
</html>