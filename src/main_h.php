<?php
// Hierdie lêer word eerste gelaai – jy kan veranderlikes hier stel en data verwerk

// Trek naam in vanaf vorm POST-data
$name = $_POST['name'] ?? '';

// Bepaal groetboodskap op grond van naam
$greeting = $name ? "Hallo, $name!" : 'Voer jou naam in asseblief.';

// Voeg ekstra CSS in (word ingesluit in <head>)
$css_extra = '
    .greeting {
        font-size: 1.5em;
        color: #007acc;
        margin-top: 20px;
    }
';

// Voeg ekstra JavaScript in (word onderaan bladsy ingesluit)
$js = '
    console.log("Bladsy gelaai");
';
?>

