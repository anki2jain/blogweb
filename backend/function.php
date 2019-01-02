<?php
function connect_db()
{
    $link=mysqli_connect("localhost","root","","blogger");
    if( mysqli_connect_error()){
        die("something is fishy");
    }
    return $link;
}

function data()
{
   if(isset($_GET["blog"]))
   {
    $link=connect_db();
    $t=$_GET["blog"];
    $query="SELECT * from `bloddata` where title = '$t'";
    $result=mysqli_query($link,$query);
    if(!$result)
    die("no blog");
   while($row=mysqli_fetch_array($result))
    {
        
        
        echo '
    <h1 class="mt-4">'.$row["title"].'</h1>

    <!-- Author -->
    <p class="lead">
      by
      <a href="#">'.$row["name"].'</a>
    </p>

    <hr>

    <!-- Date/Time -->
    <p>'.$row["timeblog"].'
    Posted on January 1, 2019 at 12:00 PM</p>

    <hr>

    <!-- Preview Image -->
    <img class="img-fluid rounded" src="'.$row["image"].'" alt="">

    <hr>
    <blockquote class="blockquote">
    <p class="mb-0">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer posuere erat a ante.</p>
    <footer class="blockquote-footer">Someone famous in
      <cite title="Source Title">Source Title</cite>
    </footer>
  </blockquote>
    <!-- Post Content -->
    <p class="lead">
    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ducimus, vero, obcaecati, aut, error quam sapiente nemo saepe quibusdam sit excepturi nam quia corporis eligendi eos magni recusandae laborum minus inventore?</p>
    <p>'.$row["data"].'
  </p>
   
    ';
    }
   }
   else
   {Header("Location:index.php");
    

   }
}

function newblog(){
       
    if(isset($_POST['submit']))
    {
        $link=connect_db();
        $author=$_POST['author'];
        $title=$_POST['title'];
        $header=$_POST['header'];
        $main=$_POST['maincontent'];
        $end=$_POST['ending'];
        $q="INSERT INTO `bloddata` (name,title,heading,data,ending) VALUES ('$author','$title','$header','$main','$end')";
        $result=mysqli_query($link,$q);
        if($result)
echo '<script>alert("Congrats Blog is added");</script>';
        else
        echo "Error: " . $result . "<br>" . $link->error;
    }
    // else
    // echo '<script>alert("Some problem occurs Try Again! or contact our tech  team ");</script>';
}

function show_blogs()
{ 
$link=connect_db();
$q="SELECT * from `bloddata` ";

$result=mysqli_query($link,$q);
$j=0;
if($result)
while($row=mysqli_fetch_array($result))
{

    if($j%2==0)
    {
        echo '<article class="brick entry format-standard animate-this">

        <div class="entry-thumb">
           <a href="blog.php?blog='.$row["title"].'" class="thumb-link">
               <img src="'.$row["image"].'"  alt="building">             
           </a>
        </div>
    
        <div class="entry-text">
            <div class="entry-header">
    
                <div class="entry-meta">
                    <span class="">
                        <a href="#">-</a> 
                        <a href="blog.php?blog='.$row["title"].'">'.$row["name"].'</a>               				
                    </span>			
                </div>
    
                <h1 class="entry-title"><a href="blog.php?blog='.$row["title"].'" >'.$row["title"].'</a></h1>
                
            </div>
                 <div class="entry-excerpt">';
                 
                 
                 echo substr($row['data'], 0, 500);

                 echo '</div>
        </div>
    
         </article>';

    }
    else
{
    echo '<article class="brick entry format-standard animate-this">

    <div class="entry-thumb">
       <a href="blog.php?blog='.$row["title"].'" class="thumb-link">
           <img src="'.$row["image"].'"  alt="building">             
       </a>
    </div>

    <div class="entry-text">
        <div class="entry-header">

            <div class="entry-meta">
                <span class="">
                    <a href="#">-</a> 
                    <a href="blog.php?blog='.$row["title"].'">'.$row["name"].'</a>               				
                </span>			
            </div>

            <h1 class="entry-title"><a href="blog.php?blog='.$row["title"].'" >'.$row["title"].'</a></h1>
            
        </div>
             <div class="entry-excerpt">';
             
             
             echo substr($row['data'], 0, 600);

             echo '</div>
    </div>

     </article>';
}

  $j++;  
}
}
?>
