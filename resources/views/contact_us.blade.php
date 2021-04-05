<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
</head>
<style>
        *{
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body{
            font-family: "Montserrat";
            background-color:aliceblue;
        }
        section{
            height: 80vh;
            width: 100%;
            background-color:aliceblue;
            display: flex;
            align-items:center;
            justify-content:center;
            margin-top:60px;
        }
        .container{
            width:90%;
            max-width: 500px;
            margin:0 auto;
            padding: 20px;
            box-shadow:0px 0px 20px #00000010;
            background-color:white;
            border-radius:8px;
            margin-bottom 20px;
            margin-top:150px;
        }
        img{
            width: 60px;
            height:60px;
            margin-left:200px;
        }
        .form_group{
            width:100%;
            margin-top: 5px;
            font-size: 20px;
        }
        .form_group input, 
        .form_group textarea{
            width:100%;
            padding:5px;
            font-size:20px;
            border: 1px solid rgba(128, 128, 128, 0.199);
            margin-top; 5px;
        }
        textarea{
            resize:none;
        }
        button[type="submit"]{
            width:100%;
            border: none;
            outline:none;
            padding:20px;
            font-size:24px;
            border-radius:8px;
            text-align:center;
            cursor:pointer;
            margin-top:10px;
            color:white;
            background-color:green;
            transition:.3s ease background-color;
        }
        button[type="submit"]:hover{
            opacity: .80;
        }
    </style>
<body>
    <section>
        <div class="container">
            <div class="cont">
           
            <form method="POST" action="{{route('contact.send')}}">
            {{@csrf_field()}}
            <img src="https://st4.depositphotos.com/27867620/30392/v/1600/depositphotos_303925352-stock-illustration-user-web-icon-simple-design.jpg" alt="">
                <div class="form_group">
                    <label for="name">Name</label>
                    <input type="text" name="name">
                </div>
                <div class="form_group">
                    <label for="surname">Surname</label>
                    <input type="text" name="surname">
                </div>
                <div class="form_group">
                    <label for="email">Email</label>
                    <input type="email" name="email">
                </div>
                <div class="form_group">
                    <label for="message">Message</label>
                    <textarea name="message" id="message" cols="20" rows="10"></textarea>
                </div>
                <button type="submit">Submit</button>
            </form>
            </div>
        </div>
    </section>


    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js" integrity="sha384-SR1sx49pcuLnqZUnnPwx6FCym0wLsk5JZuNx2bPPENzswTNFaQU1RDvt3wT4gWFG" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.min.js" integrity="sha384-j0CNLUeiqtyaRmlzUHCPZ+Gy5fQu0dQ6eZ/xAww941Ai1SxSY+0EQqNXNE6DZiVc" crossorigin="anonymous"></script>
</body>
</html>