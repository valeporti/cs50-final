<!DOCTYPE html>

<html>

    <head>
        
        <!-- http://getbootstrap.com/ -->
        <link href="/public/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/public/css/styles.css" rel="stylesheet"/>

        <!-- Estas 5 lineas son para decidir lo que se pone en la parte de la pestaña -->
        <?php if (isset($title)): ?>
            <title>KFe : <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>KFe</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/public/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/public/js/bootstrap.min.js"></script>

        <!-- Local javascript libaries -->
        <script src="/public/js/scripts.js"></script>
        <script src="/public/js/charts.js"></script>
        <script src="/public/js/scripts2.js"></script>
        
        <!-- http://getD3Library.com -->
        <script src="https://d3js.org/d3.v4.js"></script>
        
        <!-- http://underscorejs.org/ -->
        <script src="/public/js/underscore-min.js"></script>
        
        <!-- https://github.com/twitter/typeahead.js/ -->
        <script src="/public/js/typeahead.jquery.min.js"></script>
        
        <!-- Estas 5 lineas son para decidir lo que se pone en la parte de la pestaña -->
        <?php if (isset($title)): ?>
            <title>KFe : <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>KFe</title>
        <?php endif ?>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <!-- img alt muestra un texto alternativo en caso de que la imagen no pueda ser mostrada -->
                    <!-- <a href="/"><img alt="C$50 Finance" src="/img/logo.png"/></a> -->
                    <?php if (isset($title)): ?>
                        <a href="/"><h1><?= htmlspecialchars($title) ?></h1></a>
                    <?php else: ?>
                        <a href="/"><h1>Città KFe</h1></a>
                    <?php endif ?>
                
                </div>
                <!-- En caso de que ya tengan una sesión iniciada, se despliegan lasdiferentes opciones -->
                <?php if (!empty($_SESSION["id"])): ?>
                    <ul class="nav nav-pills">
                        <li><a href="/public/MENU.php">MENU</a></li>
                        <li><a href="/public/ModMENU.php">Edit Menu</a></li>
                        <li><a href="/public/recipes.php">RecipeS</a></li>
                        <li><a href="/public/ASelRecipe.php">CookIt</a></li>
                        <li><a href="/public/shop.php">ShopIt</a></li>
                        <li><a href="/public/graphs.php">Graphs</a></li>
                        <li><a href="/public/logout.php"><strong>Log Out</strong></a></li>
                    </ul>
                <?php endif ?>
            </div>

