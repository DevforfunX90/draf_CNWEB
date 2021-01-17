<style>
* 
{
    margin: 0;
    padding :0;
    box-sizing : border-box;
    font-family : 'Poppins', sans-serif;
}
html,body
{
    display: grid;
    height: 100%;
    width:100%;
    place-items: center;
    
    /* background  : #f2f2f2; */
    /* background: -webkit-linear-gradient(left, #a445b2,#fa4299); */
    background-image :url(./img/pexels-abhilash-sahoo-4402584.jpg);
    background-position :center;
    background-repeat :no-repeat;
    background-size:cover;
}
.wrapper {
    overflow :hidden;
    max-width: 390px;
    background:#fff;
    padding: 30px;
    border-radius: 5px;
    box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.1);
}
.wrapper .title-text{
    display: flex;
    width: 200%;
}
.wrapper .title-text  .title 
{
    width : 50%;
    font-size : 35px;
    font-weight :600;
    text-align : center;
    
}
.wrapper .form-container
{
    width : 100%;
    overflow :hidden;
}
.form-container .slide-controls{
    position:relative;
    display :flex;
    height:50px;
    width:100%;
    overflow : hidden;
    border-radius:5px;
    margin:30px 0  10px 0;
    justify-content: space-between;
    border: 1px solid lightgrey;
}
.slide-controls .slide{
    height:100%;
    width:100%;
    z-index :1;
    color:#fff;
    font-size:18px;
    font-weight:500;
    text-align:center;
    line-height:48px;
    cursor: pointer;
    transition :all 0.6s ease;
}
.slide-controls .signup{
    color:#000;
}
.slide-controls .slide-tab{
    position: absolute;
    height:100%;
    width:50%;
    left:0;
    z-index:0;
    border-radius: 5px;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
    background: -webkit-linear-gradient(left, #a445b2,#fa4299);
}
input[type="radio"]{
    display:none;
}
#signup:checked ~ .slide-tab{
    left:50%;
}
#signup:checked ~ .signup{
    color:#fff;
}
#signup:checked ~ .login{
    color:#000;
}
.form-container .form-inner{
    display:flex;
    width :200%;
}
.form-container .form-inner form{
    width :50%;
    transition: all 0.6s cubic-bezier(0.68,-0.55,0.265,1.55);
}
.form-container .form-inner form .field{
    height : 50px;
    width: 100%;
    margin-top: 20px;
}
.form-inner form .field input{
    height :100%;
    width : 100%;
    outline :none;
    padding-left :15px;
    font-size: 17px;
    border-radius:5px;
    border :1px solid lightgrey;
    border-bottom-width:2px;
    transition : all 0.4s ease;
}
.form-inner form .field input:focus{
    border-color: #fc83bb;
}
.form-inner form .pass-link{
    margin-top: 5px;
}
.form-inner form .pass-link a,
.form-inner form .signup-link a {
    color :   #fa4299;
    text-decoration : none;
}
.form-inner form .signup-link{
    text-align:center;
    margin-top:30px;

}
.form-inner form .pass-link a:hover,
.form-inner form .signup-link a:hover{
    text-decoration :underline;
}
.form-inner form .field input[type="submit"]{
    color: #fff;
    font-size:20px;
    font-weight:500;
    padding-left:0px;
    border :none;
    cursor:pointer;
    background: -webkit-linear-gradient(left, #a445b2,#fa4299);
}


</style>

<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href ="./style.css">
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      <div class="wrapper">
        <div class="title-text">
            
            <div class="title signup">SIGN UP FORM</div>
        </div>

        <div class="form-container">
        <div class="slide-controls">
            <input type="radio" name="slier" id="login" checked>
            <input type="radio" name="slier" id="signup" >
            <label for="login" class="slide login"><a href="http://127.0.0.1:5501/">LogIn</a></label>
            <label for="signup" class="slide signup">Signup</label>
            <div class="slide-tab"></div>
        </div>
        <div class="form-inner">
            <form action ='#' class ="login">
            <div class="field">
                <input type="text" placeholder = "Email Address" required>
            </div>
            <div class="field">
                <input type="password" placeholder = "PassWord" required>
            </div>
            <div class="field">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">Not a member?<a href="#">Signup now</a></div>
            </form>

            <form action ='#' class ="signup">
            <div class="field">
                <input type="text" placeholder = "Email Address" required>
            </div>
            <div class="field">
                <input type="password" placeholder = "PassWord" required>
            </div>
            <div class="field">
                <input type="password" placeholder = "Confirm passWord" required>
            </div>
            <div class="field">
                <input type="submit" value="Signup">
            </div>
            </form>
        </div>
        </div>
      </div>
    <script> 
    </script>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>