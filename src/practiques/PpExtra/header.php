<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    header {
        display: flex;
        justify-content: center;
        align-items: center;
        text-align: center;
        width: 100%;
        height: 200px;
        background-color: red;
        margin: 0 auto;
        font-size: 25px;
    }

</style>
<header>
    <?php
    
    echo '<h1> Disfruta de la partida '. $_SESSION["nombre"] .'</h1>';


    ?>


</header>