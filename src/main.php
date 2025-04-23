<?php
require_once 'main_h.php';
?>

<h2>Welkom by jou eerste Zimmersoftware-projek</h2>

<!-- Vorm stuur data via POST terug na dieselfde bladsy -->
<form method="post">
    <label for="name">Naam:</label>
    <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name ?? ''); ?>">
    <button type="submit">Stuur</button>
</form>

<!-- Wys groetboodskap -->
<?php
echo '<div class="greeting">' . htmlspecialchars($greeting ?? '') . '</div>';
?>
