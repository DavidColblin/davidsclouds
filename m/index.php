<h1>Unapproved Message</h1><style>i{font-size:9px}b{font-size:20px}</style>
 <?php
    include "../scripts/db.php"; $posts= mysql_query("SELECT * FROM messages WHERE msg_moderated = 0 ORDER BY msg_id DESC");

    while( $post = mysql_fetch_array($posts)){

echo
   "<h3>".$post['msg_name']."</h3>".$post['msg_message']."<hr/>";

    }
    mysql_close();

 ?>

