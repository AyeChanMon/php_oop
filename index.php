<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <script>
        let name = "aye chan mon"; //string
        let age = 26; //number
        let fruits = ["apple","orange","mango"]; //array

        function drive(){
            return name+" can drive";
        }
        //object
        let mySelf = {
            name: "hein htet zan", //property
            age: 26,
            eat(){ //method
                return this.name + "can eat";
            },
            sleep(){
                return "I like sleep";
            }
        }
    </script>
</body>
</html>