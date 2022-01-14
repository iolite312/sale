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
    //gets difficulty from the difficulty dropdown menu 
    function getDiff(difficultySelect) {
        var val = difficultySelect.value
        document.cookie = "difficulty=" + val;
        location.reload()
    }

    //gets the cookie that is asked for with the parameter needed in the function
    function getCookie(cookie) {
        name = cookie + "=";
        ca = document.cookie.split(';');
        for (i = 0; i < ca.length; i++) {
            c = ca[i];
            //while there is a space in the string it will remove the space from the string
            while (c.charAt(0) == ' ') {
                c = c.substring(1);
            }
            //if the specified cookie exists return the value of the cookie else return null
            if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
            } else {
                return null;
            }
        }
    }

    //this sets the remembered difficulty value from the cookie into the dropdown menu
    window.onload = function() {
        if (getCookie("difficulty") === null) {
            document.getElementById("diff").value = parseInt('1');
        } else {
            difficulty = getCookie("difficulty");
            document.getElementById("diff").value = parseInt(difficulty);
        }
    }

    //this sets the timeFrame cookie value for the specific scoreboard with value from the clicked button
    function setTimeFrame(timeFrame, scoreboard) {
        switch (scoreboard) {
            case 'score':
                document.cookie = "timeFrameScores=" + timeFrame;
                break;
            case 'waves':
                document.cookie = "timeFrameWaves=" + timeFrame;
                break;
            case 'kills':
                document.cookie = "timeFrameKills=" + timeFrame;
                break;
        }
        location.reload();
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
                        <?php include 'PHP/personalScoreKills.php'; ?>
                    </div>
                    <div class="buttons-lb">
                        <a id="lb-button" class="daily button" onclick="setTimeFrame('day', 'kills')">Daily</a>
                        <a id="lb-button" class="monthly button" onclick="setTimeFrame('month', 'kills')">Monthly</a>
                        <a id="lb-button" class="alltime button" onclick="setTimeFrame('all', 'kills')">All-Time</a>
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
                        <?php include 'PHP/personalScoreWaves.php'; ?>
                    </div>
                    <div class="buttons-lb">
                        <a id="lb-button" class="daily button" onclick="setTimeFrame('day', 'waves')">Daily</a>
                        <a id="lb-button" class="monthly button" onclick="setTimeFrame('month', 'waves')">Monthly</a>
                        <a id="lb-button" class="alltime button" onclick="setTimeFrame('all', 'waves')">All-Time</a>
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
                        <?php include 'PHP/personalScore.php'; ?>
                    </div>
                    <div class="buttons-lb">
                        <a id="lb-button" class="daily button" onclick="setTimeFrame('day', 'score')">Daily</a>
                        <a id="lb-button" class="monthly button" onclick="setTimeFrame('month', 'score')">Monthly</a>
                        <a id="lb-button" class="alltime button" onclick="setTimeFrame('all', 'score')">All-Time</a>
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