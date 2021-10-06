<?php
//  using the heredoc
//  <<<HEREDOC
//              HEREDOC;

$animal = 'cat';
$name = 'Moose';
$age = 1;
$color = 'black';

$content = <<<MOOSE
My $animal's name is $name. He is only $age year old and very wild.
$name is very beautiful with a sleek, $color coat.
MOOSE;

echo $content;

// below using no HEREDOC

$story = 'My '.$animal.'\' name is '.$name.'. He is only '.$age.' year old and very wild.
'.$name.' is very beautiful with a sleek, '.$color.' coat.';

echo '<br>';
echo '<br>';
echo '<br>';

echo $story;


?>