<?php

file_put_contents('./test', '123'); // Won't work because of permission issues

echo shell_exec("ls -lah");