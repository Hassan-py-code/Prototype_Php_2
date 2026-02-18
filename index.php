<?php
// ---------- RESET ----------
if (isset($_GET['reset'])) {
    setcookie("cookie_user", "", time() - 3600);
    setcookie("cookie_color", "", time() - 3600);
    setcookie("cookie_lang", "", time() - 3600);
    setcookie("cookie_last_update_date", "", time() - 3600);
    header("Location: index.php");
    exit();
}

// ---------- SAVE ----------
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    

    $user  = $_POST["user"] ?? "";
    $color = $_POST["color"] ?? "#ffffff";
    $lang  = $_POST["lang"] ?? "en";

    setcookie("cookie_user", $user, time() + (86400 * 30));
    setcookie("cookie_color", $color, time() + (86400 * 30));
    setcookie("cookie_lang", $lang, time() + (86400 * 30));
    setcookie("cookie_last_update_date", date("Y-m-d H:i:s"), time() + (86400 * 30));

    header("Location: index.php");
    exit();
}

// ---------- LOAD COOKIES ----------
$user  = $_COOKIE["cookie_user"] ?? "Guest";
$color = $_COOKIE["cookie_color"] ?? "#ffffff";
$lang  = $_COOKIE["cookie_lang"] ?? "en";
$last  = $_COOKIE["cookie_last_update_date"] ?? "";

// ---------- LANGUAGE ----------
if ($lang === "fr") {
    $welcomeText = "Bienvenue";
    $saveText = "Enregistrer";
    $resetText = "Réinitialiser";
    $lastText = "Dernière mise à jour";
} else {
    $welcomeText = "Welcome";
    $saveText = "Save my choices";
    $resetText = "Reset all";
    $lastText = "Last update";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Cookies Preferences</title>
</head>
<body style="background-color: <?php echo $color; ?>;">

<h2><?php echo "$welcomeText, $user!"; ?></h2>

<?php if ($last): ?>
    <p><?php echo "$lastText: $last"; ?></p>
<?php endif; ?>

<form method="POST">
    <label>Name:</label>
    <input type="text" name="user" value="<?php echo $user; ?>"><br><br>

    <label>Choose color:</label>
    <input type="color" name="color" value="<?php echo $color; ?>"><br><br>

    <label>Language:</label>
    <select name="lang">
        <option value="en" <?php if($lang=="en") ?>>English</option>
        <option value="fr" <?php if($lang=="fr") echo "selected"; ?>>Français</option>
    </select><br><br>

    <button type="submit"><?php echo $saveText; ?></button>
</form>

<br>
<a href="?reset=1"><?php echo $resetText; ?></a>

</body>
</html>
