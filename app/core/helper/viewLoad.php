<?php

    function view(string $nameView,array $data = []): void {

            extract($data);
            include __DIR__.'/../../../resources/views/'.$nameView.' .php';
    }
?>


resources\views