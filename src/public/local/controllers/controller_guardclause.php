<?php if ( ! defined('DOC_ROOT')) { header('HTTP/1.1 403 Forbidden'); die('Permission Denied'); }

class controller_guardclause Extends controller
{
    public $Error;
    public $db;
    public $CSS;
    public $JS;

    function __construct($Error, $db, $CSS, $JS)
    {
        parent::__construct($Error, $db, $CSS, $JS);
        $this->Error    = $Error;
        $this->db       = $db;
        $this->CSS      = $CSS;
        $this->JS       = $JS;
    }

    function guardclause($input)
    {
        $this->template = 'guard-clause';
        $this->render('Guard Clause');
    }
}