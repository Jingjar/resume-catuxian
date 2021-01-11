<?php
    date_default_timezone_set("Asia/Taipei");
    session_start();
    $addstr=[
        'img'=>'新增大頭照',
        'about'=>'新增關於我',
        'exp'=>'新增學經歷',
        'skills'=>'新增技能',
        'works'=>'新增作品集',
        'contact'=>'新增聯絡我'
    ];
    //判斷傳來的是何table
    $tables=[
        'img'=>'resume_img'
    ];
    $Login=new DB("resume_login");
    $Img=new DB("resume_img");
    $About=new DB("resume_about");
    $Exp_t=new DB("resume_exp_title");
    $Exp_i=new DB("resume_exp_items");
    $Exp_e=new DB("resume_exp_edu");
    $Skills=new DB("resume_skills");
    $Works=new DB("resume_works");
    $Contact=new DB("resume_contact");
    
    class DB{
        protected $table;
        protected $dsn="mysql:host=localhost;dbname=s1090413;charset=utf8";
        protected $pdo;

        function __construct($table)
        {
            $this->table=$table;
            // $this->pdo=new PDO($this->dsn,'root','');
            $this->pdo=new PDO($this->dsn,'s1090413','s1090413');
        }

        function all(...$arg){
            $sql="select * from $this->table";
            if(isset($arg[0])){
                if(is_array($arg[0])){
                    foreach($arg[0] as $key=>$value){
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                    $sql.=" where ".implode("&&",$tmp);
                }else{
                    $sql.=$arg[0];
                }
            }
            if(isset($arg[1])){
                $sql.=$sql[1];
            }
            return $this->pdo->query($sql)->fetchAll();
        }
        function count(...$arg){
            $sql="select count(*) from $this->table";
            if(isset($arg[0])){
                if(is_array($arg[0])){
                    foreach($arg[0] as $key=>$value){
                        $tmp[]=sprintf("`%s`='%s'",$key,$value);
                    }
                    $sql.=" where ".implode("&&",$tmp);
                }else{
                    $sql.=$arg[0];
                }
            }
            if(isset($arg[1])){
                $sql.=$sql[1];
            }
            return $this->pdo->query($sql)->fetchColumn();
        }
        function find($id){
            $sql="select *  from $this->table";
            if(is_array($id)){
                foreach($id as $key=>$value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql.=" where ".implode("&&",$tmp);
            }else{
                $sql.=" where `id`='${id}'";      
            }
            return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
        }

        function del($id){
            $sql="delete from $this->table";
            if(is_array($id)){
                foreach($id as $key=>$value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql.=" where ".implode("&&",$tmp);
            }else{
                $sql.=" where `id`='${id}'";      
            }
            return $this->pdo->exec($sql);
        }

        function save($arr){
            if(isset($arr['id'])){
                foreach($arr as $key=>$value){
                    $tmp[]=sprintf("`%s`='%s'",$key,$value);
                }
                $sql="update $this->table set ".implode(",",$tmp)." where `id`={$arr['id']}";
            }else{
                $sql="insert into $this->table (`".implode("`,`",array_keys($arr))."`) values ('".implode("','",$arr)."')";
            }
            // echo $sql;
            return $this->pdo->exec($sql);
        }

        function q($sql){
            return $this->pdo->query($sql)->fetchAll();
        }
    }
    function to($url){
        header("location:".$url);
    }
?>