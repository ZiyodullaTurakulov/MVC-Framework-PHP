<?php

class m0002_users_table {
    public function up()
    {
        $db = \App\Core\Application::$app->db;
        $SQL = "CREATE TABLE IF NOT EXISTS users (
            id INT AUTO_INCREMENT PRIMARY KEY,
            name VARCHAR(255) NOT NULL,
            email VARCHAR(191) NOT NULL,
            password VARCHAR(255) NOT NULL,
            status TINYINT DEFAULT 0,
            created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
            UNIQUE KEY unique_email (email)
        ) ENGINE=INNODB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;";
        $db->pdo->exec($SQL);
    }

    public function down()
    {
        $db = \App\Core\Application::$app->db;
        $SQL = "DROP TABLE IF EXISTS users;";
        $db->pdo->exec($SQL);
    }
} 