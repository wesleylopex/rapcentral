<?php

class MY_Model extends CI_Model
{

    protected $table;

    protected $primary;
    protected $field_order;
    protected $type_order;


    public function __construct()
    {
        parent::__construct();
    }

    public function __call($method, $arguments)
    {
        if (method_exists($this->db, $method)) {
            return call_user_func_array(array($this->db, $method), $arguments);
        }
    }

    public function create($data)
    {
        if ($this->db->insert($this->table, $data)) {
            return $this->db->insert_id();
        } else {
            return FALSE;
        }
    }

    public function update($data)
    {
        $status = FALSE;

        if (empty($data['id']))
            return $status;

        $id = $data['id'];
        unset($data['id']);

        $where = array(
            $this->primary => $id,
        );

        $status = $this->db->update($this->table, $data, $where);
        //print_r($this->db->last_query());
        return (bool) $status;
    }

    /**
     * @todo DocBlock
     *
     * @param mixed $id Identification of record
     * @return bool Status of operation
     */
    public function delete($id)
    {
        $status = FALSE;

        if (!$id) {
            return $status;
        }

        $where = array(
            $this->primary => $id,
        );

        $status = $this->db->delete($this->table, $where);

        return (bool) $status;
    }

    /**
     * @todo DocBlock
     *
     * @param mixed $id Identification of record
     * @return bool Status of operation
     */
    public function deleteWhere($where)
    {
        $status = FALSE;

        if (!$where) {
            return $status;
        }

        $status = $this->db->delete($this->table, $where);
        //print_r($this->db->last_query());
        return (bool) $status;
    }

    /**
     * @todo DocBlock
     *
     * @param mixed $id Primary identification of record
     * @return mixed Object with record data or NULL
     */
    public function getByPrimary($id)
    {
        $data = NULL;

        if (!$id) {
            return $data;
        }

        $where = array(
            $this->primary => $id,
        );

        $query = $this->db->get_where($this->table, $where);

        if ($query->num_rows() == 1) {
            $data = $query->row();
        }
        return $data;
    }

    /**
     * @todo DocBlock
     *
     * @param mixed $id Primary identification of record
     * @return mixed Object with record data or NULL
     */
    public function getRowWhere($where)
    {
        $data = NULL;

        if ($where == NULL) {
            return $data;
        }

        $query = $this->db->get_where($this->table, $where);

        if ($query->num_rows() == 1) {
            $data = $query->row();
        }
        //print_r($this->db->last_query());

        return $data;
    }

    /**
     * @todo DocBlock
     *
     * $param int $limit Number of records to get
     * $param int $offset Start offset to get records
     * @return object[] Collection of record data objects
     */
    public function getAll($limit = NULL, $offset = NULL)
    {
        $query = $this->db->order_by($this->field_order, $this->type_order)->get($this->table, $limit, $offset);
        return $query->result();
    }

    public function getAllWhere($where = null, $limit = NULL, $offset = NULL, $field_order = NULL, $type_order = NULL, $escape = TRUE)
    {
        $query = $this->db->order_by($field_order == NULL ? $this->table . "." . $this->field_order : $this->table . "." . $field_order, $type_order == NULL ? $this->type_order : $type_order);

        $query = $query->where($where, "", $escape);
        $query = $query->get($this->table, $limit, $offset);
        //print_r($this->db->last_query());
        return $query->result();
    }

    public function count()
    {
        return $this->db->count_all($this->table);
    }

    public function countWhere($where)
    {
        return $this->db->where($where)->count_all_results($this->table);
    }

    function getLastOrder()
    {
        $data = NULL;

        $query = $this->db->select_max('ordem')->get($this->table);
        $data = $query->row();

        return ($data->ordem) + 1;
    }
    public function getLastWhere($where = null, $field_order = NULL, $type_order = NULL, $escape = TRUE)
    {
        $query = $this->db->order_by($field_order == NULL ? $this->table . "." . $this->field_order : $this->table . "." . $field_order, $type_order == NULL ? $this->type_order : $type_order);

        $query = $query->where($where, "", $escape);
        $query = $query->get($this->table, 1, 0);
        if ($query->num_rows() == 1) {
            return $query->row();
        }
    }

    public function getByEncodeUrl($encode_url, $id = NULL)
    {
        $data = NULL;

        if (!$encode_url) {
            return $data;
        }

        $where = array(
            'encode_url' => $encode_url,
        );

        if ($id != NULL) {
            $where = array(
                'encode_url' => $encode_url,
                'id <>' => $id
            );
        }

        $query = $this->db->get_where($this->table, $where);
        //print_r($this->db->last_query());
        if ($query->num_rows() == 1) {
            $data = $query->row();
        }

        return $data;
    }

    public function getURLEncode($str_url, $id = NULL)
    {

        $str_url = trim(mb_strtolower($str_url, 'utf-8'));
        $str_url = iconv('utf-8', 'us-ascii//TRANSLIT', $str_url);
        $str_url = preg_replace("/[][><}{)(:;,!?*%~^`'@\"]/", "", $str_url);
        $str_url = preg_replace("/[_]/", "-", $str_url);
        $str_url = preg_replace("/ /", "-", $str_url);
        $str_url = url_title(convert_accented_characters($str_url));

        $where = array(
            'encode_url' => $str_url,
        );
        if ($id != NULL) {
            $where = array(
                'encode_url like ' => '%' . $str_url . '%',
                'id <>' => $id
            );
        }

        $existe = $this->count_where($where);
        if ($existe > 0) {
            $cont = $existe + 1;
            $str_url .= "-" . $cont;
        }

        return $str_url;
    }

    function getImage($id, $campo = NULL)
    {
        $where = array('id' => $id,);

        if ($campo == NULL)
            $campo = 'imagem';

        $query = $this->db->select($campo)->from($this->table)->where($where)->get();

        if ($query->num_rows() == 1)
            $data = $query->row();

        return $data;
    }
}
