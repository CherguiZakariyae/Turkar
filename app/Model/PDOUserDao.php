<?php

include_once("C_User.php");

class PDOUserDao
{
    private $database;

    public function __construct(DataBase $database)
    {
        $this->database = $database;
    }

    public function addUser(User $user)
    {
        // Hash the password
        $hashedPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);
        $user->setPassword($hashedPassword);

        $sqlQuery = 'INSERT INTO users(CIN, username, gender, email, password, status, phone, imagePath, birthday, enable, dateCreate) 
                     VALUES (:cin, :username, :gender, :email, :password, :status, :phone, :imagePath, :birthday, :enable, NOW())';
        $insertStatement = $this->database->getDb()->prepare($sqlQuery);
        $insertStatement->execute([
            'cin' => $user->getCIN(),
            'username' => $user->getUsername(),
            'gender' => $user->getGender(),
            'email' => $user->getEmail(),
            'password' => $user->getPassword(),
            'status' => $user->getStatus(),
            'phone' => $user->getPhone(),
            'imagePath' => $user->getImagePath(),
            'birthday' => $user->getBirthday(),
            'enable' => $user->getEnable(),
        ]);
        return $this->database->getDb()->lastInsertId();
    }

    public function editUser(User $user)
    {
        $sqlQuery = 'UPDATE users 
                     SET CIN = :CIN, username = :username, gender = :gender, email = :email, 
                         status = :status, phone = :phone, imagePath = :imagePath, birthday = :birthday, 
                         enable = :enable 
                     WHERE id = :id';
        $updateStatement = $this->database->getDb()->prepare($sqlQuery);
        $updateStatement->execute([
            'id' => $user->getId(),
            'CIN' => $user->getCIN(),
            'username' => $user->getUsername(),
            'gender' => $user->getGender(),
            'email' => $user->getEmail(),
            'status' => $user->getStatus(),
            'phone' => $user->getPhone(),
            'imagePath' => $user->getImagePath(),
            'birthday' => $user->getBirthday(),
            'enable' => $user->getEnable(),
        ]);
    }

    public function deleteUser($id)
    {
        $deleteStatement = $this->database->getDb()->prepare("DELETE FROM users WHERE id = :id");
        $deleteStatement->execute(['id' => $id]);
    }

    public function getUserById($id)
    {
        $query = "SELECT * FROM users WHERE id = :id";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute(['id' => $id]);
        $row = $statement->fetch();

        return new User(
            $row['id'],
            $row['CIN'],
            $row['username'],
            $row['gender'],
            $row['email'],
            $row['password'],
            $row['status'],
            $row['phone'],
            $row['imagePath'],
            $row['birthday'],
            $row['enable'],
            $row['dateCreate']
        );
    }

    public function getAllUsers()
    {
        $tab = array();
        $rs = $this->database->select("SELECT * FROM users ORDER BY username ASC");
        foreach ($rs as $row) {
            $tab[] = new User(
                $row['id'],
                $row['CIN'],
                $row['username'],
                $row['gender'],
                $row['email'],
                $row['password'],
                $row['status'],
                $row['phone'],
                $row['imagePath'],
                $row['birthday'],
                $row['enable'],
                $row['dateCreate']
            );
        }

        if (count($tab) > 0) {
            return $tab;
        } else {
            return null;
        }
    }


    public function authenticateUserByEmail($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = :email";
        $statement = $this->database->getDb()->prepare($query);
        $statement->execute([
            'email' => $email,
        ]);

        $user = $statement->fetch();
        if ($user && password_verify($password, $user['password'])) {
            // Authentication successful
            return new User(
                $user['id'],
                $user['CIN'],
                $user['username'],
                $user['gender'],
                $user['email'],
                $user['password'],
                $user['status'],
                $user['phone'],
                $user['imagePath'],
                $user['birthday'],
                $user['enable'],
                $user['dateCreate']
            );
        } else {
            // Authentication failed
            return null;
        }
    }
    public function getCountUsers()
    {
        $list = $this->getAllUsers();
        if ($list !== null) {
            return count($list);
        } else {
            return 0;
        }
    }
}
