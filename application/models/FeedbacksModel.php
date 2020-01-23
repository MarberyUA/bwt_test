<?php
class FeedbacksModel extends Model
{
    function get_data(){
        $db_connection = self::database_connection();

        $query = "SELECT * FROM users_callbacks";
        $query_data = mysqli_query($db_connection, $query);
        mysqli_close($db_connection);
        return$query_data;
    }
}