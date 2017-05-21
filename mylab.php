<HTML>
<HEAD>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <TITLE>Лабораторная работа</TITLE>
</HEAD>
<BODY>
    <TABLE>
    <TR><TD valign="top">
    <FORM action="mylab.php" method="POST">
    <?
        $trans = false;
        $symm = false;
        $refl = false;
        $asymm = false;
         
        $mulcount = 0;
        $mul[0] = "";
        $i = 0;
/*
        $pairs["left0"] = 0;
        $pairscount = 0;
        while (isset($_POST["left$i"]))
        {
            $pairs["left$i"] = ($_POST["left$i"]);
            $pairs["right$i"] = ($_POST["right$i"]);
            $pairscount++;

            $i++;

        }
 */       
        
        while (isset($_POST["left$i"]))
        {
            echo("(<INPUT name=\"left$i\" value=\"".$_POST["left$i"]."\"></INPUT>,<INPUT name=\"right$i\" value=\"".$_POST["right$i"]."\"></INPUT>)<BR>");
            $j = 0;
            $isexist = false;
            while (isset($mul[$j]))
            {
                if ($mul[$j] == $_POST["left$i"])
                {
                    $isexist = true;
                    break;
                }
                $j++;
            }
            if (!$isexist)
            {
                $mul[$mulcount] = $_POST["left$i"];
                $mulcount++;
            }
            $isexist = false;
            $j = 0;

            while (isset($mul[$j]))
            {
                if ($mul[$j] == $_POST["right$i"])
                {
                    $isexist = true;
                    break;
                }
                $j++;
            }
            if (!$isexist)
            {
                $mul[$mulcount] = $_POST["right$i"];
                $mulcount++;
            }
            $i++;


        }


        //Проверка рефлексивности

        $refl = true;
        for ($i = 0; $i < $mulcount; $i++)
        {
            $j = 0;
            $foundrefl = false;
            while (isset($_POST["left$j"]))
            {
                if (($_POST["left$j"] == $mul[$i]) && ($_POST["left$j"] == ($_POST["right$j"])))
                    $foundrefl = true;
                $j++;
            }
            $refl = $foundrefl;
        }

        //Проверка симметричности
        $i = 0;
        $symm = false;
        while (isset($_POST["left$i"]))
        {
            $j = 0;
            $foundsymm = false;
            while (isset($_POST["left$j"]))
            {
                if (($_POST["left$i"] == $_POST["right$j"]) && ($_POST["left$j"] == $_POST["right$i"]))
                    $foundsymm = true;
                $j++;
            }
            $symm = $foundsymm;
            $i++;
        }

        //Проверка транзитивности
        $trans = false;
        $i = 0;
        while (isset($_POST["left$i"]))
        {
            $j = 0;
            $foundtrans = false;
            while (isset($_POST["left$j"]))
            {
                if (($_POST["right$i"] == $_POST["right$j"]) && ($_POST["left$i"] != $_POST["left$j"]))
                {   
                    $k = 0;
                    while (isset($_POST["left$k"])) 
                    {
                         if (($_POST["left$k"] ==  $_POST["left$i"]) && ($_POST["right$k"] == $_POST["left$j"]))
                             $foundtrans = true;
                         $k++;
                    }
                }
                $j++;
            }
            $trans = $foundtrans;
            $i++;
        }

        $func = true;
        $i = 0;
        while (isset($_POST["left$i"]))
        {
            $j = $i;
            while (isset($_POST["left$j"]))
            {
                 if (($i != $j) && ($_POST["left$i"] == $_POST["left$j"]) && ($_POST["right$i"] != $_POST["right$j"]))
                 {
                     $func = false;
                     break;
                 }
                 $j++;
            }
            $i++;
        }

       
        
        

    ?>                
    Введите пару элементов:<BR>
    <?
            echo("(<INPUT name=\"left$i\"></INPUT>,<INPUT name=\"right$i\"></INPUT>)<BR>");
    ?>
        <INPUT type="submit" value="Добавить"></INPUT>
    </FORM>
    </TD><TD valign="top">
        Множество: {
        <?
           for ($i = 0; $i < $mulcount; $i++)
           {
                echo($mul[$i]." ");
           }
        ?>
        }
        <BR>
        Отношения: <BR>
        - Транзитивность:     <B><? if ($trans) { ?>Есть<? } else { ?>Нет<?} ?></B><BR>
        - Симметричность:     <B><? if ($symm) { ?>Есть<? } else { ?>Нет<?} ?></B><BR>
        - Асимметричность:     <B><? if (!$symm) { ?>Есть<? } else { ?>Нет<?} ?></B><BR>
        - Рефлексивность:     <B><? if ($refl) { ?>Есть<? } else { ?>Нет<?} ?></B><BR>
        - Функция:     <B><? if ($func) { ?>Есть<? } else { ?>Нет<?} ?></B><BR>
    </TD></TR>
    </TABLE>
</BODY>
</HTML>
