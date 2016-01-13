<style>
  b { 
       /* c스타일의 주석 */
       color:red; 
       font-weight:normal;
       background-color:yellow; 
  }

  #hellobox{
       width:500px; height:300px;
       border:1px solid #ff0000;
       margin:10px;
       padding:10px;
       position:absolute; top:20px; right:26px;
  }
  .nicename{
       font-weight:bold;
       font-size:2px;
       text-decoration:underline;
       cursor:pointer;
  }
</style>

<div id="hellobox">
      Have a nice day!
</div>
<?php

for($i=0;$i<10000;$i++){
  echo $i . " <b>Hello</b>, <span class='nicename'>Ji Hyeon!</span><br >" ;
}

?>
