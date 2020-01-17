<?php

    class User{
        protected $first_name = null;
        protected $last_name = null;
        protected $email = null;
        protected $date = null;
        protected $password = null;
        protected $gender = null;
        protected $db_connection = null;

        function __construct($name, $surname, $mail,  $user_password,  $connect, $birthday_date = null, $user_gender = 'Not matched')
        {
            //initializing all class variables

            $this->first_name = $name;
            $this->last_name = $surname;
            $this->email = $mail;
            $this->date = $birthday_date;
            $this->password = md5($user_password);
            $this->gender = $user_gender;
            $this->db_connection = $connect;

        }

        public function is_empty_fields(){
            // model validation

            $fields = [trim($this->first_name), trim($this->last_name)];
            foreach ($fields as $field){
                if($field == ''){
                    return true;
                }
            }
            return false;
        }

        public function is_such_email(){
            // check table`s row on same email

            $check_email = mysqli_query($this->db_connection, "SELECT * FROM users WHERE email = '$this->email'");
            return mysqli_num_rows($check_email);
        }

        public function save(){
            // saving data to database

            $query = "INSERT INTO users VALUES (NULL, '$this->first_name', '$this->last_name', '$this->email','$this->date', '$this->gender', '$this->password')";

            $saving = mysqli_query($this->db_connection, $query) or die('Error!');

            mysqli_close($this->db_connection);
        }


    }