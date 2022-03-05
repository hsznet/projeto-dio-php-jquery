<html>

    <head>
        <title>Teste de Jquery e PHP</title>

        <link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">
        <link rel="stylesheet" href="/resources/demos/style.css">
        
        
        <script
			  src="https://code.jquery.com/jquery-3.6.0.js"
			  integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
			  crossorigin="anonymous">
        </script>
        
        <script src="https://code.jquery.com/ui/1.13.1/jquery-ui.js"></script>

        <script>
            
           
            $(document).ready(function(){
                
                
                $(".php").mouseover(function(){
                    $(".caixa").css("background-color" , "red");
                    $(".caixa").css("color" , "blue");
                    $(".php").css("cursor" , "pointer");
                    $(".php").css("background-color" , "blue");

                });

                $(".php").mouseout(function(){
                    $(".caixa").css("background-color" , "black");
                    $(".caixa").css("color" , "white");
                    $(".php").css("background-color" , "black");

                });




                
                $(".php").click(function(){
                    
                    $(".linha").toggle("slow","swing");
                
                    $("#page").css("background-color" , "red");
                    
                    $( "#dialogo" ).css("visibility" , "visible");
                    
                    $( "#dialogo" ).dialog();


                });           
            
            });


        </script>

        <style type="text/css">
            
            #dialogo{
                visibility: hidden;
            }
            
            
            .linha {
                text-align: center;
                background-color: blue;
                border: 1px solid black;
                display: none;
                font-size: 30px;
                font-weight: bold;
                color: red;
                margin-right: auto;
                margin-left: auto;               
                padding: 10px;
                width: 20%
            }
            .php {
                text-align: center;
                background-color: black;
                color: white;
                font-size: 50px;
                font-weight: bold;
                margin: auto;
                padding: 70px 0;
                width: 50%
            }
        </style>
    
    </head>

    <body id="page">

        <div id="dialogo" title="Warning">
            <p>Esta página é extremamente feia. Há o risco de causar
                danos permanentes ao seu monitor!
            </p>
        </div>

        <div class="php">    
            <?php               
                print("<span class=\"caixa\" > Click aqui para ver o conteúdo");       
            ?>
        </div>
     
        <br>
        
        <div class="linha"> 
            FEIO 
        </div>
    
    </body>

</html>