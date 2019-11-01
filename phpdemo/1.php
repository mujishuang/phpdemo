<?php
//heredoc
$name = 'Mike';
echo <<<PP
hello my name is {$name}
PP;

//nowdoc
echo <<<'DD'
changed 55, hello my name is {$name}
DD;
