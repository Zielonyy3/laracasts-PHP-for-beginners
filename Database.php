<?php

class Database
{
    private PDO $PDO;

    public function __construct(array $config, string $username = 'root', string $password = '')
    {
        $dsn = 'mysql:' . http_build_query($config, '', ';');
        $this->PDO = new PDO($dsn, $username, $password, [
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]);
    }

    public function query(string $queryString, array $params)
    {
        $statement = $this->PDO->prepare($queryString);
        $statement->execute($params);
        return $statement;
    }

}
