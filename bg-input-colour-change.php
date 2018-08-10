<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Changing Background Colour</title>
        <meta charset="utf-8">
        <meta name="author" content="itshally">
        <meta name="description" content="Learning to change the background colour by typing in the colour.">
        
        <style>
            body{
                <?php $colour = $_POST['bgColour'];?>
                background-color: <?php echo $colour; ?>;
            }
            form{
                font-family: arial;
                width: 500px;
                margin: 0 auto;
                margin-top: 250px;
                border: 1px solid black;
                text-align: center;
            }
            input{
                padding: 5px;
            }
            #button{
                margin-top: 15px;
                margin-bottom: 15px;
                padding: 5px;
            }
            #button:hover{
                opacity: 0.8;
            }
        </style>
    </head>
    
    <body>
        <form method="post" action="">
            <h2>Try to change the background colour:</h2>
            <label>Type your preferred colour:</label>
            <input type="text" name="bgColour"><br>

            <input type="submit" id="button" value="Change Background">
        </form>
    </body>
</html>

