<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Foire aux questions</title>

        <link rel="stylesheet" href="view/FAQ/question.css"/>
    </head>

    <body>






        <div id="formulaire">
            <form method="post" action="controller.php?function=FAQ">
                <p>
                    <label for="zoneQuestion" id="entete"> Posez votre question :</label>
                    <textarea name="zoneQuestion" type="text" id="zoneQuestion" placeholder="Votre question"></textarea>
                    <input type="submit" name="envoyer" id="envoyer">
                </p>

            </form>

        </div>
    </body>

</html>