<!DOCTYPE html>
<html>
    <head>
        <title>ტრანსლიტერაცია</title>
        <link rel="stylesheet" href="css/style.css" type="text/css" media="screen" />
    </head>
    <body>
        <h1>{ &lt;DIRECTED ByABGEO /&gt; }</h1>
        <div class="content">
            <div class="glava">მაგ.4: ტრანსლიტერაცია</div> <hr>

            <form action="/" method="POST">
                <center>
                    <input type="text" name="string" size="20"> </br></br>

                    <input type="submit" value="ტრანსლიტერაცია">
                </center>
            </form>
            
            <?php
                $string = trim($_REQUEST['string']);

                function translit($str) {
                    $geo = array('ა', 'ბ', 'გ', 'დ', 'ე', 'ვ', 'ზ', 'თ', 'ი', 'კ', 'ლ', 'მ', 'ნ', 'ო', 'პ', 'ჟ', 
                        'რ', 'ს', 'ტ', 'უ', 'ფ', 'ქ', 'ღ', 'ყ', 'შ', 'ჩ', 'ც', 'ძ', 'წ', 'ჭ', 'ხ', 'ჯ', 'ჰ');
                    $lat = array('a', 'b', 'g', 'd', 'e', 'v', 'z', 't', 'i', 'k', 'l', 'm', 'n', 'o', 'p', 'j', 'r', 
                        's', 't', 'u', 'f', 'q', 'gh', 'k', 'sh', 'ch', 'ts', 'dz', 'ts', 'ch', 'kh', 'j', 'h');
                    return str_replace($geo, $lat, $str);
                }

                print (
                    "</br> <hr>
                    <div style='text-align: center; color: green;'>".
                        $string." - ".translit($string)
                    ."</div>"
                );
            ?>
        </div>
        <div class="footer">
            <p>{ TTProductions &copy; 2016-<?php echo date(Y); ?>. All Rights Reserved. }</p>
        </div>
    </body>
</html>