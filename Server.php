<h1> SERVER PAGE  PHP </h1>
<?php 

 $n1 = $_GET['n1'];
 $n2 = $_GET['n2'];
 $sign = $_GET['sign'];

 switch ($sign){
    case '+':
        echo $n1 + $n2;
        break;
        case '-':
            echo $n1 - $n2;
            break;
            case '/':
                if($n2 == 0){
                    echo" بس ي حمادة ";
                } else {
                    echo $n1 / $n2;
                }

                break;
                
                case '*':
                    echo $n1 * $n2;
                    break;
 }



?>