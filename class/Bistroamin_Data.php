<?php
class Bistroamin_Data
{
    protected $table;
    protected $db = null;
    protected $colmun_list = array();

    protected function getData($sql) {
        $result = $this->db->query($sql);
        $i = 0;
        while ($data[$i] = $result->fetchRow()) {
            $i++;
        }
        $info = array();
        foreach ($data as $key => $d) {
            if (!is_array($d)) {
                continue;
            }
            foreach ($d as $column => $value) {
                $info[$key][$this->column_list[$column]] = $value;
            }
        }
        return $info;
    }

    protected function getUnknownColumn($params) {
        foreach ($params as $key => $value) {
            if (in_array($key, $this->column_list)) {
                continue;
            } else {
                return $key;
            }
        }
        return null;
    }
}
