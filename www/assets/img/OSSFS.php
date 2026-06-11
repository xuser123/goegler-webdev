<?php
  file_get_contents ('https://img.shields.io/ossf-scorecard/github.com/twbs/bootstrap');
  // outputs image directly into browser, as PNG stream
  echo QRcode::svg('SO is good');
?>