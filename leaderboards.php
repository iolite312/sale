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
    <script>
        function getDiff(difficultySelect){
            var val = difficultySelect.value
            document.cookie = "difficulty = " + val;
            location.reload()
        }

        window.onload = function() {
            if(document.cookie == "" ||document.cookie === null){
                return
            }else{
                difficulty = document.cookie;
                difficulty = difficulty.slice(11);
                document.getElementById("diff").value= parseInt(difficulty);
            }
        }
    </script>
    <body>
        <header>
            <?php include "PHP/lb-header.php"; ?>
        </header>
        <div id="difficulty-selector-mobile">
            <form action="">
                <select name="difficulty" id="difficulty" onChange="getDiff(this.value)">
                    <option value="easy">Easy</option>
                    <option value="normal">Normal</option>
                    <option value="hard">Hard</option>
                    <option value="impossible">Impossible</option>
                </select>
            </form>
        </div>
        <div class="column">
            <!-- Leaderboards -->
            <div class="leaderboard shadow-l">
                <!-- Kill Count Leaderboard -->
                <h1 class="lb-title">Kills</h1>
                <div class="placeholder-lb">
                    <div class="scoreboard">
                        <!-- Scores Placeholder -->
                        <?php include 'PHP/scoresKills.php'; ?>
                    </div>
                    <div class="personal">
                        <div class="personal-center">
                            <h2>Your Score</h2>
                                <!-- Your Score Placeholder -->
                            <p>placeholder text</p>
                        </div>
                        <div class="buttons-lb">
                            <a id="lb-button" class="daily button">Daily</a>
                            <a id="lb-button" class="monthly button">Monthly</a>
                            <a id="lb-button" class="alltime button">All-Time</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leaderboard shadow-m">
                <!-- Wave Count Leaderboard -->
                <h1 class="lb-title">Waves</h1>
                <div class="placeholder-lb">
                    <div class="scoreboard">
                        <!-- Scores Placeholder -->
                        <?php include 'PHP/scoresWaves.php'; ?>
                    </div>
                    <div class="personal">
                        <div class="personal-center">
                            <h2>Your Score</h2>
                                <!-- Your Score Placeholder -->
                            <p>placeholder text</p>
                        </div>
                        <div class="buttons-lb">
                            <a id="lb-button" class="daily button">Daily</a>
                            <a id="lb-button" class="monthly button">Monthly</a>
                            <a id="lb-button" class="alltime button">All-Time</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="leaderboard shadow-r">
                <!-- Score Count Leaderboard -->
                <h1 class="lb-title">Score</h1>
                <div class="placeholder-lb">
                    <div class="scoreboard">
                        <!-- Scores Placeholder -->
                        <?php include 'PHP/scores.php'; ?>
                    </div>
                    <div class="personal">
                        <div class="personal-center">
                            <h2>Your Score</h2>
                                <!-- Your Score Placeholder -->
                            <p>placeholder text</p>
                        </div>
                        <div class="buttons-lb">
                            <a id="lb-button" class="daily button">Daily</a>
                            <a id="lb-button" class="monthly button">Monthly</a>
                            <a id="lb-button" class="alltime button">All-Time</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="difficulty-selector">
            <form action="">
                <select name="difficulty" id="diff" onChange="getDiff(this)">
                    <option value="1">Easy</option>
                    <option value="2">Normal</option>
                    <option value="3">Hard</option>
                    <option value="4">Impossible</option>
                </select>
            </form>
        </div>
        <footer>
            <?php include 'PHP/footer.php'; ?>
        </footer>
    </body>
</html>