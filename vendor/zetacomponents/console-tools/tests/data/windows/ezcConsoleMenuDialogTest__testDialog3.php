<?php

require_once "Base/src/base.php";

function __autoload( $className )
{
    ezcBase::autoload( $className );
}

$out = new ezcConsoleOutput();

$opts = new ezcConsoleMenuDialogOptions();
$opts->text = "Please choose a possibility:\n";
$opts->validator = new ezcConsoleMenuDialogDefaultValidator(
    array(
        "A" => "Selection A",
        "B" => "Selection B",
        "C" => "Selection C",
        "D" => "Selection D",
        "Z" => "Selection Z",
    ),
    "Z",
    ezcConsoleMenuDialogDefaultValidator::CONVERT_UPPER
);

$dialog = new ezcConsoleMenuDialog( $out, $opts );

while ( ( $res = ezcConsoleDialogViewer::displayDialog( $dialog ) ) !== 'Z' )
{
    echo "User seletced $res\n";
}

echo "User quitted\n";

?>
