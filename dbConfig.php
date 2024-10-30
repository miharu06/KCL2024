$dbName = 'mysql:host-localhost;dbname-laboratory name;charset-utf8';
$userName = 'root';

try{
    $db = new PDO($dbName, $userName);
}catch(\Throwable $th){
    exit();
}
