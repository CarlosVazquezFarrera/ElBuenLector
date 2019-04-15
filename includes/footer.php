<hr>
    <p class = "text-center">ElBuenLector &copy; <?= date("Y");?></p>
</div>  
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.rateyo.js"></script>
    <script>
        $(function () {
            $("#calificacion").rateYo(
            {
                rating    : <?=$calificacion?>,
                spacing   : "5px",
                starWidth: "20px",
                readOnly  : true,
                multiColor: 
                {
                    "startColor": "#FF0000", //RED
                    "endColor"  : "#EBA012"  //GREEN
                }
            });
        });
    </script>

    <script>
        $(function () 
        {
            $("#calificar").rateYo(
            {
                rating: <?=$calificacion_user?>,
                spacing   : "5px",
                halfStar: true,
                multiColor: 
                {
                    "startColor": "#FF0000", //RED
                    "endColor"  : "#EBA012"  //GREEN
                },
                onSet: function (rating, rateYoInstance) 
                {
                    <?php
                    if ($total["total"] <= 0)
                    {   
                    ?>
                        window.location="http://localhost/ElBuenLector/controller/calificacion.php?insertar&libro=<?php if (isset($_GET["libro"])) echo $_GET["libro"] ?>&usuario=<?php if(isset($_SESSION["id_usuario"])) echo $_SESSION["id_usuario"]?>&calificacion="+rating;
                    <?php 
                    }
                    else
                    {
                    ?>
                        window.location="http://localhost/ElBuenLector/controller/calificacion.php?actualizar&libro=<?php if (isset($_GET["libro"])) echo $_GET["libro"] ?>&usuario=<?php if(isset($_SESSION["id_usuario"])) echo $_SESSION["id_usuario"]?>&calificacion="+rating;
                    <?php
                    }
                    ?>
                }
            });
        });
    </script>
  </body>
</html>