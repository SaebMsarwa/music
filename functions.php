<?php
    // Count songs total for artist
    function artist_count_songs($id) {
        global $db;
        $count = $db->prepare("SELECT COUNT(`song_id`) FROM `songs` WHERE `album_id` = :id");
        $count = $count->execute(array(':id' => $id));        
        $row = $count->fetch();
        echo $row["COUNT(song_id)"];
    }
    
    // Count albums total for artist
    function artist_count_albums($id) {
        global $db;
        $count = $db->prepare("SELECT COUNT(`album_id`) FROM `albums` WHERE `artist_id` = :id");
        $count = $count->execute(array(':id' => $id));        
        echo $count;
    }

    // Gets artist profile image
    function artist_big_image($id) {
        global $db;
        $query = $db->query("SELECT  `big_image_url` FROM  `artists` WHERE  `artist_id` = '$id'");
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<img src="' . $row['big_image_url'] . '" width="300">';
        }
    }

    // Gets artist name
    function artist_name($id) {
        global $db;
        $query = $db->query("SELECT  `name` FROM  `artists` WHERE  `artist_id` = '$id'");
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo 'الاسم: '.$row['name'];
        }
    }
    
    // Gets artist birth date
    function artist_born($id) {
        global $db;
        $query = $db->query("SELECT  `born`,`name`,`big_image_url` FROM  `artists` WHERE  `artist_id` = '$id'");
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo 'تاريخ الميلاد: ' . $row['born'];
        }
    }
    
    // Gets artists with the given letter
    function artists_letter($letter) 
    {
        global $db;
        $query = $db->query("SELECT  `name`,`poster_url` FROM  `artists` WHERE  `name` LIKE  '$letter%' ORDER BY `name`");
        while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
            echo '<div class="artist"><img src="' . $row['poster_url'] . '" width="100">' . '<div class="artistName">' . $row['name'] . '</div></div>';
        }
    }
?>