<?php
$age = 15;
$foo = <<<'EOI'
ヒアドキュメントでは、このように、
複数行にわたる文章をそのまま表記することができます。
Tom の年齢は $age 歳です。
EOI;
echo $foo;

