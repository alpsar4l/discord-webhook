<?php
    if (isset($_POST)) {
        $postdata = http_build_query(
            array(
                "content" => $_POST['message'],
            )
        );
        
        $opts = array('http' =>
            array(
                'method'  => 'POST',
                'header'  => 'Content-Type: application/x-www-form-urlencoded',
                'content' => $postdata
            )
        );

        file_get_contents($_POST['hook_link'], false, stream_context_create($opts));

        header("location:./");
    } else {
        echo "Something went wrong...";
    }
?>