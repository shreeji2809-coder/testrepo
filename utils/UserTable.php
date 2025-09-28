<?php

require_once 'User.php';

class UserTable {
    private $link;
    
    public function __construct($connection) {
        $this->link = $connection;
    }

    public function insert($user) {
        if (!isset($user)) {
            throw new Exception("User required");
        }
        $sql = "INSERT INTO users(username, password, role) "
             . "VALUES (:username, :password, :role)";

        $params = array(
            'username' => $user->getUsername(),
            'password' => $user->getPassword(),
            'role' => $user->getRole()
        );
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute($params);
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not save user: " . $errorInfo[2]);
        }

        $id = $this->link->lastInsertId('users');
        
        return $id;
    }
    public function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->link->prepare($sql);
        $status = $stmt->execute();
        if ($status != true) {
            $errorInfo = $stmt->errorInfo();
            throw new Exception("Could not retrieve users: " . $errorInfo[2]);
        }
        $users = array();
        $row = $stmt->fetch();
        while ($row != null) {
            $id = $row['id'];
            $username = $row['username'];
            $pwd = $row['password'];
            $role = $row['role'];
            $user = new User($id, $username, $pwd, $role);
            $users[$id] = $user;

            $row = $stmt->fetch();
        }
        return $users;
    }
}
?>