<?php
class QueryBuilder
{
    protected $u;
    public function __construct($pdo)
    {
        $this->u=$pdo;
    }

    public function selectAll($table)
    {
        $statement=$this->u->prepare("select * from $table");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_OBJ);
    }
    
    public function insert($dataArr,$table)
    {
        //insert into users (NAME) values ("KyawKyaw")
        $getDataKeys=array_keys($dataArr);
        $cols=implode(",",$getDataKeys);
        $quertionMark="";
        foreach($getDataKeys as $key){
            $quertionMark.="?,";
        }
        $quertionMark=rtrim($quertionMark,",");
        $sql="insert into $table ($cols) values ($quertionMark)";
         $statement=$this->u->prepare($sql);
         $getDataValues=array_values($dataArr);
        $statement->execute($getDataValues);
    }
}
?>