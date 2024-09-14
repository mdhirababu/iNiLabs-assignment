<?php

interface LoggerInterface
{
    public function log(string $message): void;
}
class FileLogger implements LoggerInterface
{
    private $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message): void
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}
class DatabaseLogger implements LoggerInterface
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function log(string $message): void
    {
        $stmt = $this->pdo->prepare("INSERT INTO logs (message) VALUES (:message)");
        $stmt->execute(['message' => $message]);
    }
}
// Using FileLogger
$fileLogger = new FileLogger('/path/to/log.txt');
$fileLogger->log('This is a log message.');

// Using DatabaseLogger
$pdo = new PDO('mysql:host=localhost;dbname=test', 'username', 'password');
$databaseLogger = new DatabaseLogger($pdo);
$databaseLogger->log('This is a log message.');
