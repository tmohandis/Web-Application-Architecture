<?php

//1.Членовредительство (Mutilation) (Hard Code??)

/** 
 * В данном контексте мы строго привязываемся к классу EmailService и ни к какому другому.
 * Решением данного антипаттерна является увеличение уровня абстракции, создание интрефейса
 * IEmailService, имплиментирование от него класса EmailService. Используя данное решение
 * мы получаем гибкий код, можем использовать любой потчовый сервис соответсвующий нашему 
 * интерфейсу
 */

 //проблема
class NotificationService {

    protected $emailServise;

    public function __construct(EmailService $emailServise)
    {
        $this->emailService = $emailServise;
    }
}
//решение
class NotificationService {

    protected $emailServise;

    public function __construct(IEmailService $emailServise)
    {
        $this->emailService = $emailServise;
    }
}

//2.Слепая вера (Blind Faith) ??
class ActivityController extends Controller {

/** 
 * В данном коде имеется упущение, что любой пользователь, задавший
 * нужный URL мог получить доступ к изменению объекта. Поэтому, обязательно 
 * нужно добавить проверку на то, имеет ли юзер права изменения данного объекта.
 */

 //проблема
public function actionUpdate($id = null)
    {
        if (isset($id)) {
            $activity = Activity::findOne($id);
        } else {
            $activity = new Activity();
        }

        return $this->render('update', [
            'activity' => $activity,
        ]);
    }
//решение 
public function actionUpdate($id = null)
    {
        if (isset($id)) {
            $activity = Activity::findOne($id);
            if (!$activity->hasUserRights())
            return $this->redirect('/site/error');
        } else {
            $activity = new Activity();
        }

        return $this->render('update', [
            'activity' => $activity,
        ]);
    }
}
// 3. Изобретение велосипеда 

/**
 * Не так давно на работе мы долго не могли пордружить наш проект с ORACLE DataBase
 * И нам буквально пришлось изобретать новое колесо. Оказалось, что достаточтно было использовать
 * одно из расшерений PDO для установки соединения с БД. Хотя данный пример не совсем о вреде:) В итоге
 * оказалось, что PDO не умеет работать с курсорами, а наш класс подошел как нельзя кстати! Тут правда уже
 * изменненная рабочая версия, а не первоночальный перегруженный класс:)
 */

class OracleDB
{
    public $username;
    public $password;
    public $db;

    public function __construct(array $connection)
    {
        $this->username = $connection['username'];
        $this->password = $connection['password'];
        $this->db = $connection['db'];
    }

    public function getConnection()
    {
        $connection = oci_connect($this->username,$this->password,$this->db);
        return $connection;
    }

    public function readCursor($procedure, $binds)
    {
        $conn = $this->getConnection();
        if ($conn) {
            $stid = oci_parse($conn, 'BEGIN :result := ' . $procedure . '; END;');
            foreach ($binds as $variable) {
                oci_bind_by_name($stid, $variable["parameter"], $variable["value"], $variable["size"]);
            }
            oci_bind_by_name($stid, ':result', $result);
            $p_cursor = oci_new_cursor($conn);
            oci_bind_by_name($stid, ':pCURSEUR', $p_cursor, -1, OCI_B_CURSOR);
            oci_execute($stid);
            oci_execute($p_cursor, OCI_DEFAULT);
            oci_fetch_all($p_cursor, $data, null, null, OCI_FETCHSTATEMENT_BY_ROW);
            return $data;
        }
    }

?>