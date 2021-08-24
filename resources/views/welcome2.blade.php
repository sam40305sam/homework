<!DOCTYPE html>
<html>

<head>
    <title>Homework</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="https://cdn.rawgit.com/google/code-prettify/master/loader/run_prettify.js?skin=desert"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/main.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('js/main.js') }}">
    <script>
        function load_change() {
            $('span.pln').each(function () {
                var text = $(this).text();
                $(this).text(text.replace(/\&lt;/g, '<'));
            });
        }
    </script>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="10" onload="PR.prettyPrint(),load_change()">

    <nav id="nav" class="navbar navbar-inverse" data-spy="affix">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Homework</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">hw9<span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#9-1">9-1</a></li>
                                <li><a href="#9-2">9-2</a></li>
                                <li><a href="#9-3">9-3</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <div id="9-1" class="container-fluid section1">
        <h1>9-1</h1>
        <h3>hw01.html</h3>
        <pre class="prettyprint lang-html linenums prettyprint_style"><script type="text/plain" class="pre-script"><!DOCTYPE html>
<html lang="en">
<head>
    <title>甲班 38 蘇靜山 09-01</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">&lt;/script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">&lt;/script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 5px;">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="text-center">使用 POST 傳遞變數 -- HTML 文件</h2>
                    </div>
                    <div class="panel-body">
                        <form action="hw01.php" method="post" class="form-horizontal" role="form">
                            <div class="form-group">
                            <label class="control-label col-sm-3" for="user">字串:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="user" name="guoguo" placeholder="請輸入字串">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button class="btn btn-info" type="submit">提交 - 送到伺服器端</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</script></pre>
<h3>hw01.php</h3>
<pre class="prettyprint lang-html linenums prettyprint_style"><script type="text/plain" class="pre-script"><!DOCTYPE html>
<html lang="en">
    <head>
        <title>甲班 38 蘇靜山 09-01</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">&lt;/script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">&lt;/script>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-md-offset-3" style="margin-top: 5px;">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <h2 class="text-center">使用 POST 傳遞變數 -- HTML 文件</h2>
                        </div>
                        <div class="panel-body">
                            <p>
                                &lt;?php
                                    echo "你輸入的字串".$_POST['guoguo']."<br/>";
                                    echo "你輸入的字數".mb_strlen($_POST['guoguo'])."<br/>";
                                ?>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
</script></pre>
    </div>


    <div id="9-2" class="container-fluid section2">
        <h1>9-2</h1>
        <h3>hw02.php</h3>
<pre class="prettyprint lang-html linenums prettyprint_style"><script type="text/plain" class="pre-script"><!DOCTYPE html>
<html lang="en">

<head>
    <title>甲班 38 蘇靜山 09-02</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">&lt;/script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">&lt;/script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 5px;">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="text-center">使用 POST 傳遞變數 -- HTML 文件</h2> </div>
                    <div class="panel-body">
                        <p>
                            &lt;?php
                                $a=8;
                                $b=2;
                                $c=3;
                                echo "a 加 b 等於 ".($a+$b)."<br/>";
                                echo "a 減 b 等於 ".($a-$b)."<br/>";
                                echo "a 乘 b 等於 ".($a*$b)."<br/>";
                                echo "a 除 b 等於".($a/$b)."<br/>";
                                echo "a 除 c 餘 ".($a%$c)."<br/>";
                                echo "a 加 1 等於 ".($a+1)."<br/>";
                                echo "c 減 1 等於 ".($c-1)."<br/>";
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
</script></pre>
    </div>
    <div id="9-3" class="container-fluid section1">
        <h1>9-3</h1>
        <h3>hw03.html</h3>
<pre class="prettyprint lang-html linenums prettyprint_style"><script type="text/plain" class="pre-script"><!DOCTYPE html>
<html lang="en">
<head>
    <title>甲班 38 蘇靜山 09-03</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">&lt;/script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">&lt;/script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 5px;">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="text-center">使用 POST 傳遞變數 -- HTML 文件</h2>
                    </div>
                    <div class="panel-body">
                        <form action="hw03.php" method="post" class="form-horizontal" role="form">
                            <div class="form-group">
                                <label class="control-label col-sm-3" for="user">a:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="user" name="a" placeholder="請輸入字串">
                                </div>
                                <label class="control-label col-sm-3" for="user">b:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="user" name="b" placeholder="請輸入字串">
                                </div>
                                <label class="control-label col-sm-3" for="user">c:</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="user" name="c" placeholder="請輸入字串">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button class="btn btn-info" type="submit">提交 - 送到伺服器端</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</script></pre>
<h3>hw03.php</h3>
<pre class="prettyprint lang-html linenums prettyprint_style"><script type="text/plain" class="pre-script"><!DOCTYPE html>
<html lang="en">
<head>
    <title>甲班 38 蘇靜山 09-03</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js">&lt;/script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js">&lt;/script>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-md-offset-3" style="margin-top: 5px;">
                <div class="panel panel-info">
                    <div class="panel-heading">
                        <h2 class="text-center">使用 POST 傳遞變數 -- HTML 文件</h2>
                    </div>
                    <div class="panel-body">
                        <p>
                            &lt;?php
                                $a=filter_input(INPUT_POST, 'a', FILTER_SANITIZE_NUMBER_INT);
                                $b=filter_input(INPUT_POST, 'b', FILTER_SANITIZE_NUMBER_INT);
                                $c=filter_input(INPUT_POST, 'c', FILTER_SANITIZE_NUMBER_INT);
                                if(!is_numeric($a)||!is_numeric($b)||!is_numeric($c)){
                                    echo "請輸入包含數字的字串";
                                }else{
                                    echo "a=".$a." b=".$b." c=".$c."<br/>";
                                    echo "a 加 b 等於 ".($a+$b)."<br/>";
                                    echo "a 減 b 等於 ".($a-$b)."<br/>";
                                    echo "a 乘 b 等於 ".($a*$b)."<br/>";
                                    echo "a 除 b 等於".($a/$b)."<br/>";
                                    echo "a 除 c 餘 ".($a%$c)."<br/>";
                                    echo "a 加 1 等於 ".($a+1)."<br/>";
                                    echo "c 減 1 等於 ".($c-1)."<br/>";
                                }
                            ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
</script></pre>
    </div>


    <footer class="hidden-print footer-show">
        <div class="container-thiner">
            <div class="footer">
                <div class="footer_content">
                    Made By&nbsp;&nbsp;<strong>sam40305</strong>
                    &nbsp;&nbsp;<s><small>maybe??</small></s>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>