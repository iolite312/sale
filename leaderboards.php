<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="placeholder">
        <link rel="stylesheet" href="CSS/global.css">
        <link rel="stylesheet" href="CSS/footer.css">
        <link rel="stylesheet" href="CSS/header.css">
        <link rel="stylesheet" href="CSS/leaderboard.css">
        <link rel="icon" href="./img/placeholderimg.jpg" type="image/png" sizes="32x32">
        <title>Leaderboard</title>
        <?php $title = "Leaderboard"; ?>
    </head>
    <body>
        <header>
            <?php include "PHP/lb-header.php"; ?>
        </header>
        <div id="column">
            <!-- Leaderboards -->
            <div id="leaderboard">
                <!-- Kills Leaderboard -->
                <h1 class="lb-title">Kills</h1>
                <div id="placeholder-lb">
                    <div id="kill-scores">
                        <!-- Scores Placeholder -->
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                        <div id="kills-1" class="scores-sizing">
                            <p>This fucking sucks ass</p>
                        </div>
                    </div>
                    <div id="your-score">
                        <div class="score-center">
                            <h2 class="lb-title-2">Your Score</h2>
                            <!-- Your Score Placeholder -->
                            <p id="personal-score-kill">placeholder text</p>
                        </div>
                        <div class="buttons-lb">
                            <a id="lb-button" class="daily-button"><p>Daily</p></a>
                            <a id="lb-button" class="monthly-button"><p>Monthly</p></a>
                            <a id="lb-button" class="alltime-button"><p>All-Time</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="leaderboard">
                <!-- Wave Count Leaderboard -->
                <h1 class="lb-title">Waves</h1>
                <div id="placeholder-lb">
                    <div id="wave-scores">
                        <!-- Scores Placeholder -->
                    </div>
                    <div id="your-score">
                        <div class="score-center">
                            <h2 class="lb-title-2">Your Score</h2>
                            <!-- Your Score Placeholder -->
                            <p id="personal-score-kill">placeholder text</p>
                        </div>
                        <div class="buttons-lb">
                            <a id="lb-button" class="daily-button"><p>Daily</p></a>
                            <a id="lb-button" class="monthly-button"><p>Monthly</p></a>
                            <a id="lb-button" class="alltime-button"><p>All-Time</p></a>
                        </div>
                    </div>
                </div>
            </div>
            <div id="leaderboard">
                <!-- Highscore Leaderboard -->
                <h1 class="lb-title">Scores</h1>
                <div id="placeholder-lb">
                    <div id="score-scores">
                        <!-- Scores Placeholder -->
                    </div>
                    <div id="your-score">
                        <div class="score-center">
                            <h2 class="lb-title-2">Your Score</h2>
                            <!-- Your Score Placeholder -->
                            <p id="personal-score-kill">placeholder text</p>
                        </div>
                        <div class="buttons-lb">
                            <a id="lb-button" class="daily-button"><p>Daily</p></a>
                            <a id="lb-button" class="monthly-button"><p>Monthly</p></a>
                            <a id="lb-button" class="alltime-button"><p>All-Time</p></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="difficulty-selector">
            <form action="">
                <select name="difficulty" id="difficulty">
                    <option value="easy">Easy</option>
                    <option value="normal">Normal</option>
                    <option value="hard">Hard</option>
                    <option value="impossible">Impossible</option>
                </select>
            </form>
        </div>
        <footer>
            <?php include 'PHP/footer.php'; ?>
        </footer>
    </body>
</html>