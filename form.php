<!DOCTYPE html>
<html>
    <head>
        <title>Create User</title>
        <link rel="stylesheet" href="form.css" type="text/css" />
        <script type="text/javascript" src="form.js"></script>
    </head>
    <body>
        <h1 id="head"> Create User </h1>
        <br/>
        <br/>
        
        <form onsubmit="" action="cheapo.php" method="post">
            <div id="firstname">
                <label for="firstname"></label>
                First Name:
                <input type="text" name="firstname"/>
                <br> <br>
            </div>
            
            <div id="lastname">
                <label for="lastname"></label>
                Last Name:
                <input type="text" name="lastname"/>
                <br> <br>
            </div>
            
            <div id="username">
                
                <label for="username"></label>
                Username:
                <input type="text" name="username"/>
                <br> <br>
            </div>
            <p id="help"></p>
            <div id="password">
                <label for="password"></label>
                Password:
                <input type="password" name="password"/>
           </div> 
                <br/>
            <input id="submit" type="submit" value="Submit"/>
        </form>
    </body>
</html>