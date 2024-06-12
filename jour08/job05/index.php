<!DOCTYPE html>
<html>
<head>
    <title>Tic-Tac-Toe</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 0 auto;
        }
        td {
            width: 50px;
            height: 50px;
            text-align: center;
            font-size: 24px;
            font-weight: bold;
            border: 1px solid black;
        }
        button {
            width: 100%;
            height: 100%;
            font-size: 24px;
            font-weight: bold;
        }
    </style>
</head>
<body>

<?php
session_start();

// Initialize the game board if it's not set
if (!isset($_SESSION['board'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
    $_SESSION['winner'] = '';
}

// Check if a player has won or if it's a draw
function checkWinner($board) {
    $winningCombos = array(
        array(0, 1, 2), array(3, 4, 5), array(6, 7, 8), // Rows
        array(0, 3, 6), array(1, 4, 7), array(2, 5, 8), // Columns
        array(0, 4, 8), array(2, 4, 6) // Diagonals
    );

    foreach ($winningCombos as $combo) {
        $a = $board[$combo[0]];
        $b = $board[$combo[1]];
        $c = $board[$combo[2]];

        if ($a !== '-' && $a === $b && $b === $c) {
            return $a;
        }
    }

    // Check for a draw
    if (!in_array('-', $board)) {
        return 'Draw';
    }

    return '';
}

// Handle the button clicks
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $index = $_POST['index'];

    if ($_SESSION['board'][$index] === '-') {
        $_SESSION['board'][$index] = $_SESSION['player'];

        $winner = checkWinner($_SESSION['board']);
        if ($winner !== '') {
            $_SESSION['winner'] = $winner;
        } else {
            $_SESSION['player'] = ($_SESSION['player'] === 'X') ? 'O' : 'X';
        }
    }
}

// Reset the game if requested
if (isset($_POST['reset'])) {
    $_SESSION['board'] = array_fill(0, 9, '-');
    $_SESSION['player'] = 'X';
    $_SESSION['winner'] = '';
}
?>

<h1>Tic-Tac-Toe</h1>

<?php if ($_SESSION['winner'] !== ''): ?>
    <h2><?php echo $_SESSION['winner']; ?> won!</h2>
    <form method="post">
        <input type="submit" name="reset" value="Reset Game">
    </form>
<?php else: ?>
    <table>
        <?php for ($i = 0; $i < 9; $i++): ?>
            <?php if ($i % 3 === 0): ?>
                <tr>
            <?php endif; ?>
                <td>
                    <form method="post">
                        <input type="submit" name="index" value="<?php echo $_SESSION['board'][$i]; ?>" <?php if ($_SESSION['board'][$i] !== '-') echo 'disabled'; ?>>
                    </form>
                </td>
            <?php if ($i % 3 === 2): ?>
                </tr>
            <?php endif; ?>
        <?php endfor; ?>
    </table>
    <p>Current Player: <?php echo $_SESSION['player']; ?></p>
    <form method="post">
        <input type="submit" name="reset" value="Reset Game">
    </form>
<?php endif; ?>

</body>
</html>