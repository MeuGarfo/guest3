<?php
//Criado por Anderson Ismael
//24 de agosto de 2018

function view($name,$data=null,$print=true){
    $nameArr=explode('/',$name);
    end($nameArr);
    $key=key($nameArr);
    if($name=='404' OR $nameArr[$key]=='404'){
        header('HTTP/1.0 404 Not Found');
    }
    $filename=ROOT.'view/'.$name.'.php';
    $name2=explode('/',$name);
    $repoName=@$name2[0];
    unset($name2[0]);
    $viewName=implode('/',$name2);
    $filename2=ROOT.$repoName.'/view/'.$viewName.'.php';
    if(file_exists($filename)){
        $output=getViewOutput($filename,$data);
    }elseif(file_exists($filename2)){
        $output=getViewOutput($filename2,$data);
    }else{
        $output='<p><b>Erro:</b><br>'.PHP_EOL.'views ';
        $output.='<b>'.$filename.'</b> and ';
        $output.='<b>'.$filename2.'</b>';
        $output.=' not found';
    }
    if($print){
        print $output;
    }else{
        return $output;
    }
}
function getViewOutput($filename,$data){
    if(is_array($data)){
        extract($data);
    }
    ob_start();
    require $filename;
    $output=ob_get_contents();
    ob_end_clean();
    return $output;
}
