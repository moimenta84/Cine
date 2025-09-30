<php 

        function view($nameView, $data){

            extract($data)
            include __DIR__ .'../views'.$nameView .'.php';

        }
?>