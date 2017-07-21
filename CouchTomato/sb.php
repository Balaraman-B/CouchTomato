
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/main.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="css/theme.css" media="screen" title="no title" charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" media="screen" title="no title" charset="utf-8">
    
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
    
    <title>Couch Tomato </title>
    <style>

.wrapper{
    background:  #d9d9f2;
    width: 750px;
    border: 1px auto 10px auto;
    height: 200px;
    margin: 50px;
}
.RestTable
{
    background-color: whitesmoke;
    margin-right:  570px;
}


.comment-wrapper
{
    margin: 10px;
    border: 1px solid #elelel;
    height: auto;
    width: auto;
}

h3.comment-title
{
    height: 30px;
    line-height: 35px;
    font-size: 14px;
    margin: 0 5px 0 5px;
    color: #555;
    border-bottom: 1px solid #elelel;
    
}
.comment-list
{
    height: 50px;
    font-size: 13px;
    margin: 0 5px 0 5px;
    color: #555;
   
 
}
ul.comment-holder-ul
{
    list-style-type: none;
    margin: 0px;
    padding: 0px;
    width: auto;
    height: auto;
    overflow: hidden;
    
}
ul.comment-holder-ul li.comment-holder
{
    list-style-type: none;
    background: #fffff5;
    height: auto;
    width: auto;
    margin: 5px 0 5px 0;
    overflow: hidden;
    border: 1px solid #elelel;
    position: relative;
       
}
ul.comment-holder-ul li.comment-holder:hover
{
    background: #FFFFDB;
    
}
.comment-body
{
    width: auto;
    background: #fffff5;
}
ul.comment-holder-ul li.comment-holder h3.username-field
{
    height: 25px;
    
    line-height: 22px;
    color: blue;
    font-size: 11px;
    margin-left: 10px;
}
ul.comment-holder-ul li.comment-holder .comment-text
{
    display: block;
    width: auto;
    height: auto;
    font-size: 12px;
    margin-left: 20px;
    
    
}
ul.comment-holder-ul li.comment-holder:hover  .comment-button-holder
{
    display: block;
}




.comment-button-holder
{
    display: none;
    position: absolute;
    top: 0px;
    right: 0px;
    width: 100px;
    height: 20px;
    
}

.comment-button-holder ul
{
    list-style-type: none;
    width: auto;
    height: auto;
    overflow: hidden;
    
}

.comment-button-holder ul li
{
    float: right;
    height: 20px;
    width: 20px;
    color: #666;
    background:#2E5CBB; 
    text-align: center;
    line-height: 18px;
    cursor: pointer;
    
}
.comment-button-holder ul li:hover
{
    color: #444;
}
        
        
        
        
        
        
    </style>
  </head>
  <body>
    <header>
    <nav class="navbar navbar-toggleable-md navbar-inverse bg-inverse">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcoll" aria-controls="navbarcoll" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarcoll">
    <ul class="navbar-nav mr-auto mt-2 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="#">
        <span class="fa fa-truck"></span>
      </a>
    </li>
      <li class="nav-item active ">
          <a class="nav-link" href="Home.php">Couch Tomato <span class="sr-only">(current)</span></a>
      </li>
    </ul>
    <ul class="navbar-nav mt-1 mt-md-0">
      <li class="nav-item">
        <a class="nav-link" href="#">
        <span class="fa fa-phone"></span>
      </a>
    </li>
      <li class="nav-item">
        <a class="nav-link" href="#">
        <span class="fa fa-info"></span>
      </a>
    </li>
    </ul>
    
  </div>
        
        
</nav>    
        
       
</header>
   <table class = "RestTable">
                        <tr>
                            <th rowspan='6' width = '10%' ><img src ="RestaurantsDetails\sb.jpg" alt="saravana Bhavan"/></th>
                            <th width = '75px' >Name: </th>
                            <td>Saravana Bhavan</td>
                        </tr>
                        
                        <tr>
                            <th>Type: </th>
                            <td>South Indian</td>
                        </tr>
                        
                        <tr>
                            <th>Price: </th>
                            <td>200 (average)</td>
                        </tr>
                        
                        <tr>
                            <th>city: </th>
                            <td>Chennai</td>
                        </tr>
                        
                        <tr>
                            <th>Address: </th>
                            <td>45A, Anna Salai,Chennai</td>
                        </tr>
                       
                        <tr>
                            <td colspan='2' > Decent variety and price</td>
                        </tr>                      
                     </table>
                     
                     <div class="wrapper">
                         
                         <div class="comment-wrapper">
                             <h3 class="comment-title"> Give your feedbacks ! </h3>
                             <div class="comment-list">
                                 <ul class="comment-holder-ul">
                                     <li class="comment-holder" id="_1">
                                        
                                         <div class="comment-body">
                                            <h3 class="username-field"> Bala </h3> 
                                         </div>
                                         
                                        
                                     <div class="comment-text">
                                         Service is not up to the mark. Taste is okay, not good
                                     </div> 
                                          <div class="comment-button-holder">
                                             <ul>
                                                 <li class="delete-btn">X
                                                     
                                                 </li>
                                             </ul>
                                             
                                         </div>
                                         
                                       </li>  
                                       
                                       <li class="comment-holder" id="_1">
                                        
                                         <div class="comment-body">
                                            <h3 class="username-field"> Guna </h3> 
                                         </div>
                                         
                                        
                                     <div class="comment-text">
                                        Very Great Place. Don't Miss !
                                     </div> 
                                          <div class="comment-button-holder">
                                             <ul>
                                                 <li class="delete-btn">X
                                                     
                                                 </li>
                                             </ul>
                                             
                                         </div>
                                         
                                       </li>    
                                      
                                </ul>
                             </div>   
                          </div>       
                      </div>                
                             
                            
                         
                         
                     
      
        
       
     
</body>

</html>
