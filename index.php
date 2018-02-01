<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css\materialize.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script>
$(document).ready(function(){
    $(".top").click(function(e) {
        if($(e.target).is('.card')){
            $(this).children(".rep").toggle("medium");
        }

        
    }); 

    
});
</script>

<style type="text/css">
div.rep{
    margin-left: 50px;
    margin-top:-12px;
    display: none;
    padding: 2px;
    }

div.card-panel{
  padding: 10px;     
    }

div.stk{
  margin: 0px;

  padding: 10px;
  position: fixed;
  z-index: 100;
  display: block;
  width: 100%;
  text-align: center;
}

#tp{
  margin: 0px;
   margin-top: 10px; 
  padding: 0px;
}


    

</style>

</head>
<body class="blue-grey lighten-5">
  <div class="card deep-purple darken-4 stk white"><div class="card purple-text" style="margin: 0px; width: auto;  padding: 4px">**Name of WebApp**</div></div>
  <div class="row">
    
      
    <div class=" col l12 m12 s1 card horizontal z-depth-5 deep-purple darken-1 white-text row" id="tp">
      
      <div class="card-image center-align col l3 m4 s6 deep-purple darken-1" style="padding: 0px;">
        <img src="pic.jpeg" id="pc" align="center">
      </div>
      <div class="card-stacked col l9 m8 s6 " style="padding: 0px;">
          
          <div class="card-content">
            <h4>Shubham</h4>
            <p>Shubham0522@gmial.com</p>
          </div>
          <div class="card-action white">
            <a href="#">Logout</a>
          </div>
      </div>
        </div>
  </div>
</div>
</div>
  <div class="row">    
        <div class="col l3 m12 s12">
          <div class="card deep-purple darken-1">
            <div class="card-content white-text">
              <span class="card-title">Members</span>
            </div>
            <div class="collection">
              <a href="#!" class="collection-item deep-purple-text">Alvin</a>
              <a href="#!" class="collection-item deep-purple-text  ">Alvin</a>
              <a href="#!" class="collection-item deep-purple-text">Alvin</a>
              <a href="#!" class="collection-item deep-purple-text">Alvin</a>
            </div>
          </div>
        </div>
        
  


        <div class="col l9 m12 s12">
          
                <div class="top">                  
                    <div class="card card-panel deep-purple darken-1 white-text">
                      <div class="chip"><img src="yuna.jpg">Member Name</div>
                      <span class="card-title "><br>About Topic</span>
                    </div>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <div class="input-field">
                          <form action="#">
                          <i class="material-icons prefix">mode_edit</i>
                          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                          <label for="icon_prefix2">Comment</label>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                          <i class="material-icons right">send</i>
                          </button>
                          </form>
                        </div>
                      </div>
                    </div>


                      <div class="top">                  
                    <div class="card card-panel deep-purple darken-1 white-text">
                      <div class="chip"><img src="yuna.jpg">Member Name</div>
                      <span class="card-title "><br>About Topic</span>
                    </div>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep z-depth-3">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <div class="input-field">
                          <form action="#">
                          <i class="material-icons prefix">mode_edit</i>
                          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                          <label for="icon_prefix2">Comment</label>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                          <i class="material-icons right">send</i>
                          </button>
                          </form>
                        </div>
                      </div>
                    </div>

                    <div class="top">                  
                    <div class="card card-panel deep-purple darken-1 white-text">
                      <div class="chip"><img src="yuna.jpg">Member Name</div>
                      <span class="card-title"><br>About Topic</span>
                    </div>
                      <div class="card-panel rep">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                      </div>
                      <div class="card-panel rep">
                        <div class="chip"><img src="yuna.jpg">Member Name</div>
                        <div class="input-field">
                          <form action="#">
                          <i class="material-icons prefix">mode_edit</i>
                          <textarea id="icon_prefix2" class="materialize-textarea"></textarea>
                          <label for="icon_prefix2">Comment</label>
                          <button class="btn waves-effect waves-light" type="submit" name="action">Submit
                          <i class="material-icons right">send</i>
                          </button>
                          </form>
                        </div>
                      </div>
                    </div>


      </div>
    </div>

                  


                  

</body>
</html>