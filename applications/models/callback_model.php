<?php

class UserCallback{
    protected $user_name = null;
    protected $user_email = null;
    protected $user_message = null;
    protected $db_connection = null;

    function __construct($name, $mail,  $message, $connection)
    {
        //initializing all class variables

        $this->user_name = $name;
        $this->user_email = $mail;
        $this->user_message = $message;
        $this->db_connection = $connection;
    }

    public static function is_table($connection){
        //creating a table if it was not created

        $new_query = '
                CREATE TABLE IF NOT EXISTS users_callbacks (
                    id int NOT NULL AUTO_INCREMENT PRIMARY KEY,
                    username varchar(50) null,
                    user_email varchar(50) null,
                    user_message varchar(300) null
                )';
        $connection->query($new_query) or die('Error!' . mysqli_error($connection));
    }

    public static function all($connection){
        // getting all query with callbacks

        $query = "SELECT * FROM users_callbacks";
        return mysqli_query($connection, $query);
    }

    public function is_empty_fields(){
        // model validation

        $fields = [trim($this->user_name), trim($this->user_message)];
        foreach ($fields as $field){
            if($field == ''){
                return true;
            }
        }
        return false;
    }

    public function save(){
        // saving data to database

        $query = "INSERT INTO users_callbacks VALUES (NULL, '$this->user_name', '$this->user_email', '$this->user_message')";

        $saving = mysqli_query($this->db_connection, $query) or die('Error!' . mysqli_error($this->db_connection));

        mysqli_close($this->db_connection);
    }


}