<?php

namespace App\Models;

use App\Core\Application;

class User
{
    public int $id;
    public string $name;
    public string $email;
    public string $password;
    public int $status;

    public function save()
    {
        $password = password_hash($this->password, PASSWORD_DEFAULT);
        
        $sql = "INSERT INTO users (name, email, password) VALUES (?, ?, ?)";
        $statement = \App\Core\Application::$app->db->pdo->prepare($sql);
        
        return $statement->execute([$this->name, $this->email, $password]);
    }

    public static function findOne($where)
    {
        $tableName = 'users';
        $attributes = array_keys($where);
        $sql = implode(" AND ", array_map(fn($attr) => "$attr = ?", $attributes));
        $statement = Application::$app->db->pdo->prepare("SELECT * FROM $tableName WHERE $sql");
        
        $params = array_values($where);
        $statement->execute($params);
        
        return $statement->fetchObject(static::class);
    }

    public function update()
    {
        $attributes = ['name', 'email'];
        $params = [$this->name, $this->email];
        
        $sql = "UPDATE users SET name = ?, email = ?";
        
        if (!empty($this->password)) {
            $attributes[] = 'password';
            $params[] = password_hash($this->password, PASSWORD_DEFAULT);
            $sql .= ", password = ?";
        }
        
        $sql .= " WHERE id = ?";
        $params[] = $this->id;
        
        $statement = Application::$app->db->pdo->prepare($sql);
        return $statement->execute($params);
    }
} 