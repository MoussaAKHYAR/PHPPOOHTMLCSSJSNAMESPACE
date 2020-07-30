<?php
namespace system;
    class View
    {
        public function load()
        {
            $args = func_get_args();
            $num = func_num_args();
            switch ($num) {
                case 1:
                    $file = "src/view/".$args[0].".php";
                    if (file_exists($file)) {
                        require_once $file;
                    }else {
                        die($file." n'existe pas ");
                    }
                    break;
                case 2:
                    $file = "src/view/".$args[0].".php";
                    if (file_exists($file)) {
                        $data = $agrs[1];
                        require_once $file;
                    }else {
                        die($file." n'existe pas ");
                    }
                    break;
                default:
                    break;
            }
        }
    }


?>