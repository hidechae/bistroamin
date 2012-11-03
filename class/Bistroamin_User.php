<?php
class Bistroamin_User extends Bistroamin_Data
{
/**
    CREATE TABLE `user` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `nick_name` varchar(255) NOT NULL,
      `first_name` varchar(100) DEFAULT NULL,
      `last_name` varchar(100) DEFAULT NULL,
      `mail` varchar(255) NOT NULL,
      `password` varchar(40) NOT NULL,
      `ctime` datetime DEFAULT NULL,
      `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`),
      UNIQUE KEY `mail` (`mail`),
      KEY `auth` (`mail`,`password`)
    ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8
 */

/**
    CREATE TABLE `user` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `name` varchar(100) NOT NULL,
      `screen_name` varchar(100) DEFAULT NULL,
      `mail` varchar(255) NOT NULL,
      `password` varchar(128) NOT NULL,
      `ctime` datetime DEFAULT NULL,
      `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`),
      UNIQUE KEY `name` (`name`),
      UNIQUE KEY `mail` (`mail`)
    ) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8
 */
    function __construct($backend) {
        $this->db = $backend->getDB();
        $this->table = 'user';
        $this->column_list = array(
            'id',
            'name',
            'screen_name',
            'mail',
            'password',
            'ctime',
            'mtime'
        );
    }

    function getAll() {
        $sql = "SELECT * FROM user";
        return $this->getData($sql);
    }

    function get($user_id) {
        $sql = "SELECT * FROM user WHERE id = $user_id";
        return array_pop($this->getData($sql));
    }

    function getByMail($mail) {
        $sql = "SELECT * FROM user WHERE mail = '$mail'";
        return array_pop($this->getData($sql));
    }

    function add($params) {
        $unknown_column = $this->getUnknownColumn($params);
        if (!is_null($unknown_column)) {
            throw new Exception("Unknown column '$unknown_column' in 'fiels_list'.");
        }
        $sql = "INSERT INTO $this->table (";
        foreach ($params as $key => $value) {
            $sql .= $key. ',';
        }
        $sql .= 'ctime) VALUES (';
        foreach ($params as $key => $value) {
            $sql .= "'$value',";
        }
        $sql .= 'now())';
        return $this->db->query($sql);
    }
}
