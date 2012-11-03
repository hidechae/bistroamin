<?php
class Bistroamin_Note extends Bistroamin_Data
{
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
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8
 */
/**
    CREATE TABLE `note` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `user_id` int(11) NOT NULL,
      `title` varchar(255) NOT NULL,
      `body` text DEFAULT NULL,
      `ctime` datetime DEFAULT NULL,
      `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`),
      KEY `user_id` (`user_id`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8
 */
/**
    CREATE TABLE `note_image` (
      `id` int(11) NOT NULL AUTO_INCREMENT,
      `blog_id` int(11) NOT NULL,
      `image` varchar(100) NOT NULL,
      `ctime` datetime DEFAULT NULL,
      `mtime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
      PRIMARY KEY (`id`),
      UNIQUE KEY (`blog_id`, `image`)
    ) ENGINE=InnoDB DEFAULT CHARSET=utf8
 */
    function __construct($backend) {
        $this->db = $backend->getDB();
        $this->table = 'note';
        $this->column_list = array(
            'id',
            'user_id',
            'title',
            'body',
            'ctime',
            'mtime'
        );
    }

    function getAll() {
        $sql = "SELECT * FROM $this->table;";
        return $this->getData($sql);
    }

    function get($id) {
        $sql = "SELECT * FROM $this->table WHERE id = $id;";
        return array_pop($this->getData($sql));
    }

    function getByUserId($user_id) {
        $sql = "SELECT * FROM $this->table WHERE user_id = $user_id;";
        return $this->getData($sql);
    }

    function delete($id) {
        $sql = "DELETE FROM $this->table WHERE id = $id;";
        return $this->db->query($sql);
    }

    function saveOrUpdate($params) {
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
        $sql .= 'now()) ON DUPLICATE KEY UPDATE ';
        $length = count($params);
        $i = 1;
        foreach ($params as $key => $value) {
            if ($i == $length) {
                $sql .= "$key = '$value';";
            } else {
                $sql .= "$key = '$value',";
                $i++;
            }
        }
        return $this->db->query($sql);
    }
}
