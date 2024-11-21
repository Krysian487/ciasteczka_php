<?php
// Sprawdzanie, czy ciasteczko 'visited' jest ustawione w tablicy $_COOKIE
if (!isset($_COOKIE['visited']))
{
    // Jeśli ciasteczko nie jest ustawione, ustawienie ciasteczka 'visited' z wartością 'true'
    setcookie('visited', 'true', time() + 3600); // Ciasteczko ważne przez 1 godzinę
    // Ustawienie komunikatu "Witamy na stronie"
    $info = "Witamy na stronie";
}
else
{
    // Jeśli ciasteczko jest ustawione, ustawienie komunikatu "Witamy ponownie"
    $info = "Witamy ponownie";
}
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8" />
<title>Ciasteczka</title>
</head>
<body>

<?php
// Wyświetlenie komunikatu przechowywanego w zmiennej $info
echo $info;
?>

</body>
</html>