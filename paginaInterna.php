<?php session_start();?>


<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link   rel="stylesheet" href="estilo.css">
    </head>
    <body >
        
        <?php
            if($_SESSION['tipoDeAcesso'] == 'A'){
                include_once("templateNav-A.php");
            }elseif($_SESSION['tipoDeAcesso'] == 'V'){
                include_once("templateNav-V.php");
            }elseif($_SESSION['tipoDeAcesso'] == 'E'){
                include_once("templateNav-E.php");
            }
        
            ?>
        
        <div class="Container" >
            <article>
                <h1>Descritivo Sobre o Produto</h1>
                <hr>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut et tellus elementum, 
                    interdum magna id, cursus justo. Nullam nec semper enim, tristique ultrices eros. 
                    Praesent sed nisi sollicitudin, pellentesque sem eget, cursus mi. Donec vestibulum, 
                    dolor a lacinia porttitor, diam justo sodales ligula, hendrerit consequat nisl urna 
                    non enim. Maecenas finibus ultricies erat, ac facilisis dolor dignissim id. Proin 
                    faucibus feugiat sem, sit amet aliquet tortor commodo quis. Aenean gravida nisl et 
                    iaculis faucibus. Mauris vitae lobortis justo. Aenean vel quam in orci molestie v
                    ehicula. Praesent ornare lacinia venenatis. Nunc quis dignissim eros. Suspendisse 
                    placerat sodales magna nec faucibus. Vestibulum gravida eros at est euismod, 
                    ut pretium purus lobortis. Quisque ac arcu lectus.</p>
                <hr>

                <p>Donec sodales vitae mauris pellentesque consequat. Donec et lectus ullamcorper, 
                    finibus arcu sit amet, eleifend augue. Vivamus blandit porta nisi, vitae viverra m
                    agna finibus id. Nullam ipsum elit, condimentum vitae condimentum in, blandit semper
                    augue. Nam vel ligula nec nibh euismod rhoncus. Nulla consectetur et ex quis auctor.
                    Praesent eget tempus lacus. Praesent bibendum hendrerit tortor, in auctor felis aliquam id.</p>
                <hr>
                <p>Proin magna quam, viverra at auctor vel, laoreet condimentum velit. Nulla leo odio, maximus 
                    pharetra massa consequat, mollis consequat nunc. Proin rutrum lacus ac lacinia cursus. Donec 
                    vel diam id ipsum consequat varius. Curabitur pretium et massa interdum luctus. Ut sit amet laoreet 
                    turpis, sed molestie ligula. Sed suscipit, mi ut suscipit aliquam, turpis leo congue leo, varius
                    fermentum leo urna quis erat. Etiam sodales, ex eget cursus pharetra, nibh augue imperdiet nisi, 
                    sed porttitor lectus urna vel sapien. Nam hendrerit nec arcu sed consequat. Donec ut tortor magna.
                    Phasellus maximus lobortis nisl.</p>
                <hr>
                <p> In luctus tristique augue vitae lacinia. Vivamus id dolor urna. Morbi at est lectus. 
                    Quisque sapien sapien, porta at purus ut, molestie malesuada elit. In vestibulum ex sapien. 
                    Praesent maximus dui at facilisis imperdiet. Duis mollis faucibus odio eget congue. Morbi in 
                    neque vitae lacus commodo efficitur. Quisque efficitur diam sit amet porttitor blandit. Proin 
                    eget sapien est.</p>
                <hr>
                <p>Aliquam feugiat metus sit amet leo semper convallis. Duis eget interdum est. Integer eget venenatis massa, 
                    sed ornare quam. Duis eu nibh ut nulla ultrices accumsan. Aliquam in leo libero. Aenean efficitur purus 
                    rhoncus magna varius scelerisque. In ullamcorper quis ex ac tincidunt. Sed dapibus sit amet nunc sit amet
                    aliquam. Nullam ante quam, laoreet ut porttitor eu, suscipit at erat. Sed congue finibus urna, et facilisis 
                    purus. Phasellus consectetur aliquet nulla, at egestas felis. Nulla facilisi. Morbi volutpat ex et condimentum 
                    tempor. </p>
            </article>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
    
</html>