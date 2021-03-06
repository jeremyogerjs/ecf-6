<?php

require_once('./database/DbConnection.php');

class Model
{
    protected $table;
    protected $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }
    /**
     * 
     * 
     * @return array|object results
     * 
     */
    public function all(array $columns = ['*'])
    {
        $columns = implode(',', $columns);
        $sql = "SELECT $columns FROM " . $this->table;

        $res = $this->db->getPDO()->prepare($sql);

        $res->execute();

        return $res->fetchAll();
    }
    /**
     * 
     * @param string $query SQL request
     * @param array $params for sql request
     * @param bool $single if you want multiple result or single
     * @return object|array|int result
     * 
     */
    public function query(string $query, array $params = [], bool $single)
    {

        $sql = $query;
        $pdo = $this->db->getPDO();
        $res = $pdo ->prepare($sql);

        $res->execute($params);

        if ($single) {
            $res->fetch();
            return $pdo->lastInsertId();
        } else {
            return $res->fetchAll();
        }
    }
}
