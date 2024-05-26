<?php
namespace app\controllers;

use app\forms\CalcForm;
use app\transfer\CalcResult;

class CalcCtrl {
    private $form;
    private $result;

    public function __construct(){
        $this->form = new CalcForm();
        $this->result = new CalcResult();
    }

    public function getParams(){
        $this->form->x = isset($_REQUEST['x']) ? $_REQUEST['x'] : null;
        $this->form->y = isset($_REQUEST['y']) ? $_REQUEST['y'] : null;
        $this->form->z = isset($_REQUEST['z']) ? $_REQUEST['z'] : null;
    }

    public function validate() {
        if (!($this->form->x && $this->form->y && $this->form->z)) {
            return false;
        }

        if ($this->form->x === "") {
            getMessages()->addError('Nie podano kwoty kredytu');
        }
        if ($this->form->y === "") {
            getMessages()->addError('Nie podano oprocentowania');
        }
        if ($this->form->z === "") {
            getMessages()->addError('Nie podano okresu spłaty');
        }

        if (!getMessages()->isError()) {
            if (!is_numeric($this->form->x)) {
                getMessages()->addError('Kwota kredytu nie jest liczbą');
            }
            if (!is_numeric($this->form->y)) {
                getMessages()->addError('Oprocentowanie nie jest liczbą');
            }
            if (!is_numeric($this->form->z)) {
                getMessages()->addError('Okres spłaty nie jest liczbą');
            }
        }

        return !getMessages()->isError();
    }

    public function action_calcCompute() {
        $this->getParams();

        if ($this->validate()) {
            $this->form->x = floatval($this->form->x);
            $this->form->y = floatval($this->form->y);
            $this->form->z = intval($this->form->z);

            $this->result->result = ($this->form->x * ($this->form->y / 100 / 12)) / (1 - pow(1 + ($this->form->y / 100 / 12), -$this->form->z * 12));
            $this->result->result = number_format($this->result->result, 2, '.', '');

            try {
                $database = new \Medoo\Medoo([
                    // required
                    'database_type' => 'mysql',
                    'database_name' => 'kredyt',
                    'server' => 'localhost',
                    'username' => 'root',
                    'password' => '',
                    'charset' => 'utf8',
                    'collation' => 'utf8_polish_ci',
                    'port' => 3306,
                    'option' => [
                        \PDO::ATTR_CASE => \PDO::CASE_NATURAL,
                        \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION
                    ]
                ]);

                $database->insert("wynik", [
                    "kwota" => $this->form->x,
                    "lat" => 10,
                    "procent" => $this->form->y,
                    "rata" => $this->result->result,
                    "data" => date("Y-m-d H:i:s")
                ]);
            } catch (\PDOException $ex) {
                getMessages()->addError("DB Error: " . $ex->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_calcShow(){
        getMessages()->addInfo('Witaj w kalkulatorze');
        $this->generateView();
    }

    public function generateView(){
        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_description','Oblicz swoją ratę kredytu.');
        getSmarty()->assign('page_header','Kalkulator');
        getSmarty()->assign('form', $this->form);
        getSmarty()->assign('result', $this->result);
        getSmarty()->assign('msgs', getMessages());
        getSmarty()->display('CalcView.html');
    }
}
?>
