<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
    	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title><?=$titlePage;?></title>
    	<link rel="stylesheet" type="text/css" href="<?php echo $baseUrl; ?>/assets/bootstrap/css/bootstrap.css">

		<script src="<?php echo $baseUrl; ?>/assets/js/jquery-2.2.1.min.js"></script>
    </head>
    <body class="container">
      <div id="verifyconnction" class="alert alert-warning" role="alert" style="position: relative; z-index: 2; width: 100%; margin: 0 auto; text-align: center; display: none; "> Pas de connection </div>

		<h1 style="margin-top: 5rem; margin-bottom: 2rem; text-align: center ">Connexion</h1>

    
		<div class="row">
            <div class="col-sm-4" style="margin: 0 auto; text-align: center">
                
                <div class="alert alert-danger" role="alert" style="margin: 0 auto; text-align: center; margin-bottom: 2rem; position: relative; display: none; ">login ou mot de passe incorrecte!</div>
                <div class="alert alert-warning" role="alert" style="margin: 0 auto; text-align: center; margin-bottom: 2rem; position: relative; display: none; ">entrez votre login et votre mot de passe svp!</div>
                
                <div id="loading" class="form-group row center-block" style="margin-top: -5rem; width: 100%; text-align: center; position: absolute; z-index: 2; opacity: 0.5; display:none;"><img class="center-block" src="<?=$baseUrl;?>/assets/imgs/ajax_loader.gif"/></div>

                <div class="form-group row" style="margin-top: 3rem">
                    <label for="username" class="col-sm-3 col-form-label">Username</label>
                    <div class="col-sm-9">
                        <input type="text"  class="form-control enfocus" name="username" placeholder="Username" id="username" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input type="password" class="form-control enfocus" id="password"  name="password" placeholder="Password" required/>
                    </div>
                </div>
                <div class="form-group row">
                    <button onclick="connexion()" id="connexion" style="margin: 0 auto; text-align: right" class="btn btn-primary">Connexion</button>
                </div>
            </div>
		</div>
<script src="assets/bootstrap/js/bootstrap.js"></script>
 
        <script src="<?php echo $baseUrl; ?>/assets/bootstrap/js/bootstrap.js"></script>
        <script>var baseUrl = '<?php echo $baseUrl?>';</script>
        <script src="<?php echo $baseUrl; ?>/assets/js/main.js"></script>
	</body>
</html>

