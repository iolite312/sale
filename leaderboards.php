<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="placeholder">
        <link rel="stylesheet" href="CSS/all.css">
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="CSS/leaderbord.css">
        <link rel="icon" href="./img/placeholderimg.jpg" type="image/png" sizes="32x32">
        <title>Leaderboard</title>
    </head>
    <body>
        <div id="column">
            <div id="leaderboard">
                <div id="placeholder-lb">
                    <div id="kill-scores">

                    </div>
                    <div id="your-score">
                        <div id="buttons-lb">
                            <a id="lb-button" class="daily-button"><p>Daily</p></a>
                            <a id="lb-button" class="monthly-button"><p>Monthly</p></a>
                            <a id="lb-button" class="alltime-button"><p>All-Time</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="leaderboard">
                
            </div>
            <div id="leaderboard">
                
            </div>
        </div>
        <div id="difficulty-selector">
            <form action="">
                <select name="difficulty" id="difficulty" placeholder="normal">
                    <option value="impossible">Impossible</option>
                    <option value="hard">Hard</option>
                    <option value="normal">Normal</option>
                    <option value="easy">Easy</option>
                </select>
            </form>
        </div>
        <footer>
            <?php include 'PHP/footer.php'; ?>
        </footer>
    </body>
</html>