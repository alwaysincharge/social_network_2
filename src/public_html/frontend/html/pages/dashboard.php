<?php
/*
$url = 'https://www.youtube.com/watch?v=6nU4kfVZMAY';


//   "/(http|https|ftp|ftps)\:\/\/[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/"


$string = "The www.stackoverflow.com/questions/43708954/how-to-get-image-link-from-url text you want to filter goes here. http://google.com, https://www.youtube.com/watch?v=K_m7NEDMrV0, https://instagram.com/hellow/ , www.web.whatsapp.com/";
$url7 = "/(^|[\n ])([\w]*?)((www|wap)\.[^ \,\"\t\n\r<]*)/is";
$url6 = "/(http\:\/\/|https\:\/\/|ftp\:\/\/|ftps\:\/\/|www\.)[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\/\S*)?/";

$url5 = "%^((https?://)|(www\.))([a-z0-9-].?)+(:[0-9]+)?(/.*)?$%i";
$url4 = '#\bhttps?://[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#';
$url3 = '#\www.[^,\s()<>]+(?:\([\w\d]+\)|([^,[:punct:]\s]|/))#';

preg_match_all($url6, $string, $match);

echo "<pre>";
print_r($match[0]); 
echo "</pre>";


*/
/*

$urlfinal = file_get_contents($url);

preg_match("/<title>(.+)<\/title>/siU", $urlfinal, $matches);

$title = $matches[1];

echo $title;






$html_data = file_get_contents( $url );

preg_match( '#<meta name="description".*content="([^"]+)">#siU', $html_data, $description);

if (count($description) > 0) {
    
  $description = $description[1];

  echo $description;  
    
}

*/




//$tags = get_meta_tags('http://fridaycamp.com/home');
//echo "<pre>";
//print_r($tags);



// $url = 'https://api.urlmeta.org/?url=http://php.net/manual/en/function.get-meta-tags.php';
// $obj = json_decode(file_get_contents($url), true);
// echo $obj['access_token'];


?>

<html lang="en">
    
    
    
    
<head>
    
    
	<title>Friday Camp - connect with people, you already know.</title>
    
    <meta name="description" content="Create, display and update your resume, find jobs, find a co-founder, message your hero, meet other techies, all here.">
    
    <?php include('../templates/head_info.php'); ?>
    
    
</head>
    
    
    
    
    
<body class="dashboard-body">
    
    
    
    
   <nav class="nav-head">
    
    <div class="row nav-main-row">
        
        
        <div class="col-xs-6">
            
            <a class="logo-heading-1">friday camp <span class="logo-heading-2">//</span> <span class="logo-heading-3">physics group work</span></a>
                            
        </div>
        
        
        
        
        <div class="col-xs-6">
            
            
            <input maxlength="100" name="keywords" class="search-main" placeholder="Search this group" />
                
            
            
            
            <a>
                
            <button class="btn new-group-1">   
                
            <img src="pencil.svg" width="20" height="20" class="new-group-2"  />
                    
            Create new group</button>
            
            </a>
            
            
            
            
            <img src="a.jpg" width="35" height="35" class="current-user-img"  />
            
                    
        </div>
        
        
        
       </div>
    
    </nav>

                    
    
    
    
    
            <div class="row main-body-div">
                
                
                
                <div class="col-xs-9">
                
                
                <div>
                    
                
                <div class="col-xs-1" style="">
                    
                    
                <div>
                    
                     
                    <img src="a.jpg" width="70" height="70" class="writer-profile-img"  />
                    
                   
                    
                </div>    
                
                
                </div>
                
                
                
                
                <div class="col-xs-11">
                    
                    
                    <div class="row post-editor">
                        
                    
                        
                        
                    <div class="col-xs-2" id="chatboxicon" style="cursor: pointer;">
                        
                        <img src="chatting.svg" class="input-style-1"  />
                        
                        <p class="input-style-2">Chat</p>
                        
                    </div>
                        
                        
                        
                        
                      
                    <div class="col-xs-2">
                        
                         <img src="typography.svg" class="input-style-1"  />
                        
                         <p class="input-style-2">Text post</p>
                        
                    </div>
                        
                        
                        
                        
                    <div class="col-xs-2">
                        
                        <img src="camera.svg" class="input-style-1"  />
                        
                         <p class="input-style-2">Photo/Album</p>
                        
                    </div>
                        
                        
                        
                        
                        
                    <div class="col-xs-2">
                        
                        <img src="video-camera.svg" class="input-style-1" />
                        
                         <p class="input-style-2">Videos</p>
                        
                    </div>
                        
                        
                        
                        
                        
                        
                    <div class="col-xs-2">
                        
                        <img src="hands.svg" class="input-style-1"  />
                        
                         <p class="input-style-2">Polls</p>
                        
                    </div>
                        
                        
                       
                        
                        <div class="col-xs-2">
                        
                        <img src="controls.svg" class="input-style-1"  />
                        
                         <p class="input-style-2">Settings</p>
                        
                    </div>
                        
                        
                    
                    </div>
                    
                    
                    
                    
                    
                    
                   <div id="chatbox" style="display: none;">
                    
                        <textarea id="name" type="text" class="search-main" placeholder="write something" style="margin-bottom: 10px; width: 100%; height: 100px; resize: none; outline: none;"></textarea>
                       
                       
                       
                                              
                       <label id="file1label" for="file1" class="custom-file-upload" style="display: none; background: #ddd; padding: 6px; border-radius: 4px; font-family: Josefin Slab;
   font-size: 16px; cursor: pointer;
   font-weight: bold;">
    select file
</label>
                       <input type="file" id="file1" class="btn" style="display: none;"/><br>
                       
                       <!-- <input type="button" value="Upload file" onclick="uploadFile()" /><br> -->
                       
                       <progress value="0" max="100" id="progressBar" style="height: 5px; width: 250px; display: none;"></progress> 
                       
                       <a id="status" style="display: inline; font-family: Josefin Slab;
   font-size: 26px;
   font-weight: bold; color: blue; margin-left: 20px;"></a>
                       
                       <br><br>
                       <a id="progressMessage" style="font-family: Josefin Slab;
   font-size: 16px;
   font-weight: bold;"></a>
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                     
                    
                        <a id="chatboxfile"><img src="attachment.svg" style="width: 20px; cursor: pointer;"  /></a>
                    
                        <a id="chatboxclose"><img src="cancel.svg" style="width: 20px; margin-left: 10px; cursor: pointer;"  /></a> <br><br>
                       
                       

                       
                      <!-- <p id="loadedbytes"></p><br> -->
                    
                      <!--  <input id="submit" class="btn new-group-1" type="submit" style="margin-left: 0px;" value="POST"> -->
                    
                   </div> 
                    
                
                    
                    
                    
                    
                    
                    <div id="areas2" style="margin-top: 40px;">
                                                
                                   
                        <!-- Posts go here. -->                        
            
                        
                    </div>
                
                    
                    
                </div>
                    
                    
                    
                    

                    
                    

                    </div>
                   


                    
                 

                      
                        
                          <div style="display: table; margin: 0 auto;">
                        
                        
                        <p id="loadagain" style="display: none;">Poor connection. Try again. <a>Here</a></p>
                        
                        
                        
                        <img id="loading" style="display: none;" width="60px" height="60px" src="loading.gif" />
                    
                    
                    
                    </div>
                
                </div>
                
                
            
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                
                <div class="col-xs-3 group-list-div">
                    
                    
                    
                    
                    
                    
                    
                  <div class="row group-list-row">
                        
                        
                        <div class="col-xs-2">
                            
                           <img src="a.jpg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        
                        <div class="col-xs-7 group-list-body">
                            
                            <a class="group-list-name">Family</a><br>                            
                            <a class="group-list-membercount">90 members</a>
                        
                        </div>
                        
                        
                        
                        <div class="col-xs-3 group-list-notif-1">
                            
                            <img src="view.svg" width="30" height="30" style="group-list-notif-2"  />
                            
                        </div>
                        
                        
                    </div>
                    
                    
                    
                    
                    
                    
                  <div class="row group-list-row">
                        
                        
                        <div class="col-xs-2">
                            
                           <img src="a.jpg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        
                        <div class="col-xs-7 group-list-body">
                            
                            <a class="group-list-name">Family</a><br>                            
                            <a class="group-list-membercount">90 members</a>
                        
                        </div>
                        
                        
                        
                        <div class="col-xs-3 group-list-notif-1">
                            
                            <a class="group-list-notifs">76+</a>
                            
                        </div>
                        
                        
                    </div>
                        
                    
                    
                    
                    
                  
                    
                              
                  <div class="row group-list-row">
                        
                        
                        <div class="col-xs-2">
                            
                           <img src="a.jpg" width="40" height="40" style="group-list-profile-img"  />
                        
                        </div>
                        
                      
                        
                        <div class="col-xs-7 group-list-body">
                            
                            <a class="group-list-name">Family</a><br>                            
                            <a class="group-list-membercount">90 members</a>
                        
                        </div>
                        
                        
                        
                        <div class="col-xs-3 group-list-notif-1">
                            
                            <a class="group-list-notifs">76+</a>
                            
                        </div>
                        
                        
                    </div>
                        
                    
                    
                    
                    
                    
                    
               
                
                </div>
                
            </div>
    
    
    
</body>
    
 
    
</html>


<script type="text/javascript" src="jquery-3.2.1.min.js"></script>
    



<script type="text/javascript">
    
       function _(el) {
            
            return document.getElementById(el);
            
        }
    

    
   /* 
    var file = _('file1').files[0];
    
    if (file.size > 0) {
        
        uploadFile();
        
    }  */
    
    
    $('#file1').change(function() { 
    // select the form and submit
    uploadFile();
});
    
    
    
    
    function uploadFile() { 
        
        
         
       
        
        var file = _('file1').files[0];
        
        
        if (file.size <= 1000000) {
        
        $('#progressBar').show();
            
        
        var formdata = new FormData();
        
        formdata.append('file1', file);
        
      
        
        var ajax = new XMLHttpRequest();
        
        ajax.upload.addEventListener("progress", progressHandler, false);
        
        ajax.addEventListener("load", completeHandler, false);
        
        ajax.addEventListener("abort", abortHandler, false);
        
        ajax.open("POST", "files.php");
        
        ajax.send(formdata);
        
        } else {
            
            _('progressMessage').innerHTML = file.name + " is bigger than 1MB. Try again. <br><br> ";
            
        }
        
        function progressHandler(event) {
            
        //    _('loadedbytes').innerHTML = "Uploaded " + event.loaded + " of" + event.total;
            
            var percent = (event.loaded / event.total) * 100;
            
            _('progressBar').value = Math.round(percent);
            
             $('#progressMessage').show();
            
            _('status').innerHTML = Math.round(percent) + "%";
            
            _('progressMessage').innerHTML = "Uploading " + file.name;
            
            $('#file1label').hide();
            
            $('#chatboxclose').hide();
            
            $('#chatboxfile').hide();
        }
        
        
        
        function completeHandler(event) {

            
            _('status').innerHTML = "";
            

              
              sendAppend("", event.target.responseText);

            
            $('#file1label').hide(160);
            
            
            
            _('progressBar').value = 0;
            
           $('#progressBar').hide();
            
           _('progressMessage').innerHTML = "";
            
             $('#chatboxclose').show();
            
            $('#chatboxfile').show();
        }
        
        
        
        function errorHandler(event) {

            
            _('status').innerHTML = "Upload fail";
            
            
        }
        
        
        
        
        function abortHandler(event) {

            
            _('status').innerHTML = "Upload aborted";
            
            
        }
        
        
        
        
        
        
    }
    
    
    
    
    
    
    
    
    
    
     
    // When the user reaches the bottom, get more data from the database.
    $( window ).on( "scroll", function() {
       if ( ( window.innerHeight + window.scrollY ) >= document.body.offsetHeight ) {
          displayFromDatabasePagination();
           
       }
    } );
    
    
    
    //When you click the chat box...
    $( '#name' ).on( "focus", function() {
       // When you click eneter...
       $( '#name' ).keypress( function( e ) {
          if ( e.which == 13 ) {
             // Send message to page before even sending to the database.
             sendAppend( e, "" );
          }
       } );
    } );
    
    
    
    

    
    
    $('#loadagain').click(function() { 
   displayFromDatabasePagination();
           
    return false; // prevent default
  });
    
    
    
    
    $('#chatboxicon').click(function() { 
        
        $('#chatbox').show(100);

  });
    
    
    
    
        $('#chatboxclose').click(function() { 
        
        $('#chatbox').hide(100);
            
        $('#name').val("");    

  });
    
    
    
      $('#chatboxfile').click(function() { 
        
      //  $('#file1').show(100);
            
        $('#file1label').toggle(160);

  });
    
    
    
    
    var lastTimeID = 0;
    var firstTimeID = 0;
    var lam = "n";
    
    
    
    // When the page loads...
    $( document ).ready( function() {
       // Display some stuff from the database and when the user reaches the bottom of the page, return more stuff.
       displayFromDatabasePagination();
       //Begin asking the database if new items have been submitted and retrieve and prepend them to the page.
       startPostLoop();
    } );
    
    
    
    //Begin asking the database if new items have been submitted and retrieve and prepend them to the page.
    function startPostLoop() {
       //Fetch new chat data from the database when its available.
       displayFromDatabase();
    }
    
    
    
    // Fetch new chat data from the database.
    function displayFromDatabase() {
       $.ajax( {
          url: "ajax.php",
          type: "POST",
          async: true,
          data: {
             "melted": 1,
             "laminate": lastTimeID
          },
          success: function( d ) {
             var jsonData = JSON.parse( d );
             var jsonLength = jsonData.allposts.length;
             var html = "";
             var lastTimeIDzeroTest;
             //If lastTimeID is zero.
             if ( lastTimeID === 0 ) {
                lastTimeIDzeroTest = 1;
             }
             for ( var i = 0; i < jsonLength; i++ ) {
                var result = jsonData.allposts[ i ];
                // For each row from the database, set the last processed id number to lastTimeID.
                lastTimeID = result.id;
                // If the row's id is even.
                if ( result.post_type == 'attach' ) {
                
                    
                     
                 
                     
                   html += '<div class=\"row\">';
                html += '<div class=\"col-xs-2\">';
                html += '<a><img src=\"tumblr_oonx42GBY31tl2cbeo1_500.jpg\" class=\"chat-left-1\"  /></a>';
                html += '</div>';
                html += '<div class=\"col-xs-10\">';
                html += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                html += '<div class=\"talktext\">';
                html += '<p>' + result.id + ' ()  <a href=\" ' + result.attach_path  + ' \" download>' + result.attach_name + '</a></p>';
                html += ' </div></div></div></div>';    
                   
                    
                    
                   // If the row's id is odd.  
                } else {
                   html += '<div class=\"row\">';
                   html += '<div class=\"col-xs-10\">';
                   html += '<div class=\"talk-bubble1 tri-right1 left-top1\" class=\"chat-right-1\">';
                   html += '<div class=\"talktext1\">';
                   html += '<p>' + result.name + '</p>';
                   html += ' </div></div></div>';
                   html += '<div class=\"col-xs-2\">';
                   html += '<a><img src=\"tumblr_oonx42GBY31tl2cbeo1_500.jpg\" class=\"chat-right-2\"  /></a>';
                   html += '</div>';
                   html += '</div>';
                }
             }
             // If lastTimeIDzeroTest is 1, implying the lastTimeID is zero...
             if ( lastTimeIDzeroTest === 1 ) {
                // Set lastTimeIDzeroTest to 2 so that next time the function runs, we know that lastTimeID is no longer zero. Prepend nothing to the page.
                lastTimeIDzeroTest = 2;
             } else {
                // Return and prepend just parsed json from the database to the page. 
                var new_items = $( html ).hide();
                $( '#areas2' ).prepend( new_items );
                new_items.show( 100 );
             }
             // After the function runs successfully, run the function again after some milliseconds.
             startPostLoop();
          }, //error after here.
           error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
       } );
    }
    
    
    
    // Retrive old rows from database.
    function displayFromDatabasePagination() {
       $.ajax( {
          url: "ajax.php",
          type: "POST",
          async: true,
          data: {
             "felted": 1,
             "laminate": firstTimeID
          },
          success: function( dd ) {
              
             
             $('#loadagain').hide();
              $('#loading').hide();
             var jsonData2 = JSON.parse( dd );
             var jsonLength2 = jsonData2.allposts1.length;
              
             var html2 = "";
             for ( var i2 = 0; i2 < jsonLength2; i2++ ) {
                var result2 = jsonData2.allposts1[ i2 ];
                firstTimeID = result2.id;
                 
                 
                 if(result2.post_type == 'attach') {
                     
                   html2 += '<div class=\"row\">';
                html2 += '<div class=\"col-xs-2\">';
                html2 += '<a><img src=\"tumblr_oonx42GBY31tl2cbeo1_500.jpg\" class=\"chat-left-1\"  /></a>';
                html2 += '</div>';
                html2 += '<div class=\"col-xs-10\">';
                html2 += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                html2 += '<div class=\"talktext\">';
                html2 += '<p>' + result2.id + ' () <a href=\" ' + result2.attach_path  + ' \" download>' + result2.attach_name + '</a></p>';
                html2 += ' </div></div></div></div>';    
                     
                 }  else {
                     
                       
                html2 += '<div class=\"row\">';
                html2 += '<div class=\"col-xs-2\">';
                html2 += '<a><img src=\"tumblr_oonx42GBY31tl2cbeo1_500.jpg\" class=\"chat-left-1\"  /></a>';
                html2 += '</div>';
                html2 += '<div class=\"col-xs-10\">';
                html2 += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
                html2 += '<div class=\"talktext\">';
                html2 += '<p>' + result2.id + " () " + result2.name + '</p>';
                html2 += ' </div></div></div></div>';  
                     
                 }
                 
                 
             
             }
             $( '#areas2' ).append( html2 );
          },
            error: function( xhr, textStatus, errorThrown ) {
               
               $('#loading').hide();
                $('#loadagain').show();
                
             }
       } );
        
        $('#loading').show();
    }

    
    
    
    function sendChatData( e, slate, name1 ) {
        
       var dosome = function( data ) {
          $( "#" + data ).html('<img style=\" height: 15px; width: 15px; \" src=\"sent.png\" />');
       };
        
       var nameTrim = $( "#name" ).val().trim();
       // If the value of the chat box is not empty...
       if ( nameTrim != "" ) {
          // After submitting, clear the chat box.
          $( "#name" ).val( "" );
          e.preventDefault();
          //Submit the form to the database.
          $.ajax( {
             url: "ajax.php",
             type: "POST",
             async: true,
             data: {
                "done": 1,
                "name": name1
             },
             success: function( data ) {
                if ( data == 23 ) {
                   dosome( slate );
                } else {}
                // After submitting, clear the chat box.
                $( "#name" ).val( "" );
                // When enter is clicked, do not move to the next line.
                e.preventDefault();
             },
             error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
          } );
       } else {
          $( "#name" ).val( "" );
       }
    }
    
    
    
    
    
    
    
    
        function sendChatData2( slate, path333, name333, type333, posttype333 ) {
        
       var dooo = function( data ) {
          $( "#" + data ).html('<img style=\" height: 15px; width: 15px; \" src=\"sent.png\" />');
       };
        
     // alert(posttype333);
            
            
            
            
  
          $.ajax( {
             url: "add.php",
             type: "POST",
             async: true,
             data: {
                "donse": 1,
                "path": path333,
                 "name": name333,
                 "type": type333,
                 "posttype": posttype333
             },
             success: function( datas ) {
                 
                if ( datas == 23 ) {
                   dooo( slate );
                } else {}

             },
             error: function( xhr, textStatus, errorThrown ) {
                $.ajax( this );
                return;
             }
          } );
      
    }
    
    
    
    
    

    
    
    
    function sendAppend( e, attach ) {
        
       
        
        
        
     
       // If the value of the chat box is not empty...
        
        
        
        if (attach) {
            
           
            
            
            var jsonData6 = JSON.parse( attach );
            
            var attach_path2 =  jsonData6[0];
            
            var attach_name2 =  jsonData6[1];
            
            var attach_type2 = jsonData6[2];
            
            var post_type2 =  jsonData6[3];
          
            
            
            var html3 = '';
          html3 += '<div class=\"row\">';
          html3 += '<div class=\"col-xs-2\">';
          html3 += '<a><img src=\"tumblr_oonx42GBY31tl2cbeo1_500.jpg\" class=\"chat-left-1\"  /></a>';
          html3 += '</div>';
          html3 += '<div class=\"col-xs-10\">';
          html3 += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
          html3 += '<div class=\"talktext\">';
          html3 += '<p>bubu uploaded '  + attach_name2 + '</p><span id=\"' + lam + '\" ></span>';
          html3 += ' </div></div></div></div>';
            
            var new_items1 = $( html3 ).hide();
          $( '#areas2' ).prepend( new_items1 );
          new_items1.show( 'fast' );
          sendChatData2( lam, attach_path2, attach_name2, attach_type2, post_type2 );
          lam = lam + lam;
            
        } else {
            
              var name = $( "#name" ).val();
       var nameTrim = $( "#name" ).val().trim();
            if ( nameTrim != "" ) {
          var html3 = '';
          html3 += '<div class=\"row\">';
          html3 += '<div class=\"col-xs-2\">';
          html3 += '<a><img src=\"tumblr_oonx42GBY31tl2cbeo1_500.jpg\" class=\"chat-left-1\"  /></a>';
          html3 += '</div>';
          html3 += '<div class=\"col-xs-10\">';
          html3 += '<div class=\"talk-bubble tri-right left-top\" class=\"chat-left-2\">';
          html3 += '<div class=\"talktext\">';
          html3 += '<p>' + name + '</p><span id=\"' + lam + '\" ></span>';
          html3 += ' </div></div></div></div>';
          // Return and prepend just parsed json from the database to the page. 
                
                
                
                var new_items1 = $( html3 ).hide();
          $( '#areas2' ).prepend( new_items1 );
          new_items1.show( 100 );
          sendChatData( e, lam, name );
          lam = lam + lam;
       
       }
            
            
            
               
            
            
        }
        
     
        
        
     
    }
    
</script>   