<?php

require_once __DIR__ . '/Model.php';

class Ad extends Model {
    protected static $table = 'ads';

    // override the __set method so that we can hash passwords. if the
    // given key is not a password, just call the parent method
    public function __set($name, $value)
    {
        if ($name == 'password') {
            $value = password_hash($value, PASSWORD_DEFAULT);
        }
        parent::__set($name, $value);
    }

    /**
     * find a user by username or email
     *
     * @param string $usernameOrEmail
     * @return User|null returns null if no matching record is found
     */
    public static function findByTitle($title)
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . self::$table . ' WHERE title = :title';

        $stmt = self::$dbc->prepare($query);
        $stmt->bindValue(':title', $title, PDO::PARAM_STR);
        
        $stmt->execute();

        $results = $stmt->fetch(PDO::FETCH_ASSOC);

        $instance = null;
        if ($results) {
            $instance = new static;
            $instance->attributes = $results;
        }

        return $instance;
    }

    public static function topFiveAds()
    {
        self::dbConnect();

        $query = 'SELECT * FROM ' . static::$table . ' ORDER BY click_count DESC LIMIT 5';

        $stmt = self::$dbc->prepare($query);
        $stmt->execute();

        //Store the resultset in a variable named $result
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

        // turn each associative array into an instance of the model subclass
        return array_map(function($result) {
            $instance = new static;
            $instance->attributes = $result;
            return $instance;
        }, $results);
    }
}