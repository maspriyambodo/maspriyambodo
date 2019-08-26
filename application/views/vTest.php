<html>
    <head>
        <title>Test</title>
    </head>
    <body>
        <form method="post" action="<?= site_url('Test/CheckUser'); ?>">
            <input type="text" name="uname" placeholder="Username"/>
            <input type="password" name="pword" placeholder="Password"/>
            <input type="submit" name="okbtn" value="Submit"/>
        </form>
    </body>
</html>