<?php @ob_start();$q = '../files/presentazione.pdf';@header('Pragma: public');@header('Expires: 0');@header('Cache-Control: must-revalidate, post-check=0, pre-check=0');@header('Cache-Control: private', false);@header('Content-Type: application/pdf');@header('Content-Disposition: attachment; filename = "'. @basename($q) . '";');@header('Content-Transfer-Encoding: binary');@header('Content-Length: '.@filesize($q));@readfile($q);@ob_end_clean();exit();?>