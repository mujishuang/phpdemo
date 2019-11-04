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

This is updated on local hotfix54 branch.
  
10:36, this is updated on remote hotfix54.
