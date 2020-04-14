<!doctype html>
<html>
    <head>
    <meta charset="utf-8">
    <title>Music Quiz </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href='https://fonts.googleapis.com/css?family=Rajdhani:400,500,700' rel='stylesheet' type='text/css'> 
    

    
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
  <link rel="stylesheet" href=css/project.css type="text/css">
 
 <link rel="stylesheet" href=css/bootstrap.css type="text/css">
 <link rel="stylesheet" href=css/bootstrap.min.css type="text/css">
  
    </head>
    <body> 
        <!-- heading and Logo -->   
    <img src="images/shakur.png" width=45px>
    <h1 style="font-size:60px;"> Music Quiz</h1> 

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>
 
    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src= images/pacbiggie.jpg >
        <div class="carousel-caption">
          <h3>Music</h3>
          <p>QUIZ</p>
        </div>      
      </div>
 
      <div class="item">
        <img src= images/ygh.jpg>
        <div class="carousel-caption">
          <h3>Music</h3>
          <p>QUIZ</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  


</head>
		
            <?php 
        
            $Questions = array(
                'question1' => array(
                    'Question' => '1:Which album was released on November 5 1995?',
                    'Answers' => array(
                        'A' => 'The Don Killuminati: The 7 Day Theory-2pac',
                        'B' => 'At. Long. Last. ASAP-A$ap Rocky',
                        'C' => 'If Youre Reading This Its Too Late-Drake',
                        'D' => 'Starboy-The weeknd'
                    ),
                    'CorrectAnswer' => 'A'
                ),
                'question2' => array(
                        'Question' => '2:What artists was assassinated in 1997',
                        'Answers' => array(
                            'A' => '2pac',
                            'B' => 'Biggie',
                            'C' => 'Ememinem',
                            'D' => 'The Game'
                        ),
                        'CorrectAnswer' => 'A'
                    ),
                'question3' => array(
                    'Question' => '3:Wich artist had the biggest impact on the youth?(select one only)',
                    'Answers' => array(
                        'A' => 'Lil Peep',
                        'B' => 'A$ap Yams',
                        'C' => 'Xxxtentacion',
                        'D' => 'Drake'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question4' => array(
                    'Question' => '4:Wich artist/s have have a male rapper write their songs? ',
                    'Answers' => array(
                        'A' => 'Ariana Grande',
                        'B' => 'Charlie XCX',
                        'C' => 'Beyonce',
                        'D' => 'Selena Gomez'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question5' => array(
                'Question' => '5:Wich male artist has been referred to has a godfather of a genre ?',
                'Answers' => array(
                    'A' => 'Drake',
                    'B' => 'Soulja boy',
                    'C' => 'Quavo',
                    'D' => 'Snoop Dogg'
                ),
                'CorrectAnswer' => 'D'
                ),
                'question6' => array(
                    'Question' => '6:Wich genre of music uses 808’s with rhythm and poetry?',
                    'Answers' => array(
                        'A' => 'RAP',
                        'B' => 'R&B',
                        'C' => 'Trance',
                        'D' => 'Reggae'
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question7' => array(
                    'Question' => ' 7:wich artist gained the most success in 2019?',
                    'Answers' => array(
                        'A' => 'Offset',
                        'B' => 'Mobb Deep',
                        'C' => 'Da baby',
                        'D' => 'Tyga'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question8' => array(
                'Question' => '8:wich artist claims to be a harvard dropout?',
                'Answers' => array(
                    'A' => 'Snoop Dogg',
                    'B' => 'Whiz khalifa',
                    'C' => 'Lil pump',
                    'D' => 'Ohgheezy'
                ),
                'CorrectAnswer' => 'C'
                ),
                'question9' => array(
                    'Question' => '9:what rapper is an immagrant to the USA?',
                    'Answers' => array(
                        'A' => 'Drake',
                        'B' => 'JID',
                        'C' => '21savage',
                        'D' => 'YG'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question10' => array(
                    'Question' => '10:What artist was charged with first degree murder?',
                    'Answers' => array(
                        'A' => 'Drake',
                        'B' => 'Pop Smoke',
                        'C' => 'Snoop Dogg',
                        'D' => '2pac'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question11' => array(
                    'Question' => '11:Wich artist is legally named Christopher Wallace?',
                    'Answers' => array(
                        'A' => 'YG',
                        'B' => 'Biggie',
                        'C' => 'Puffy',
                        'D' => '2pac'
                    ),
                    'CorrectAnswer' => 'B'
                ),
                'question12' => array(
                    'Question' => '12:wich artist/s was considered a voice for community in the between 1993-1996',
                    'Answers' => array(
                        'A' => 'Drake',
                        'B' => 'Miachel Jackson ',
                        'C' => 'The game',
                        'D' => '2pac'
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question13' => array(
                    'Question' => ' 13:Wich band has the artist Kurt Cobain?',
                    'Answers' => array(
                        'A' => 'The beatles',
                        'B' => 'Nirvana',
                        'C' => 'Metalica',
                        'D' => 'Gunz n Roses'
                    ),
                    'CorrectAnswer' => 'B'
                ),
                'question14' => array(
                    'Question' => '14:what rap group released the album Culture?',
                    'Answers' => array(
                        'A' => 'Migos',
                        'B' => 'A$ap Mob',
                        'C' => 'NWA',
                        'D' => 'Wu tang clan'
                    ),
                    'CorrectAnswer' => 'A'
                ),
                'question15' => array(
                    'Question' => '15:what was Tupac Shakurs first album?',
                    'Answers' => array(
                        'A' => 'Me againts the world',
                        'B' => 'R U Still down?',
                        'C' => 'all eyez on me',
                        'D' => '2pacalypse now'
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question16' => array(
                    'Question' => '16: who was biggie smalls long time friend turned rival?',
                    'Answers' => array(
                        'A' => 'Puffy',
                        'B' => 'Snoop',
                        'C' => '2pac',
                        'D' => 'Diddy'
                    ),
                    'CorrectAnswer' => 'C'
                ),
                'question17' => array(
                    'Question' => '17:Whiz Khalifas hit black and yellow what year is from?',
                    'Answers' => array(
                        'A' => '2009',
                        'B' => '2010',
                        'C' => '2011',
                        'D' => '2012'
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question18' => array(
                    'Question' => '18:Who featured on the hit song congratulations by Post Malone? ',
                    'Answers' => array(
                        'A' => 'Drake',
                        'B' => 'Offset',
                        'C' => 'T pain',
                        'D' => 'Quavo'
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question19' => array(
                    'Question' => '19:who made the song gucci gang?  ',
                    'Answers' => array(
                        'A' => 'Lil peep',
                        'B' => '21 savage',
                        'C' => '50 cent',
                        'D' => 'Lil pump',
                    ),
                    'CorrectAnswer' => 'D'
                ),
                'question20' => array(
                    'Question' => '20:who is the snitch in rap culture??',
                    'Answers' => array(
                        'A' => '6ix9ine',
                        'B' => 'Drake',
                        'C' => '2pac',
                        'D' => 'the game'
                    ),
                    'CorrectAnswer' => 'A'
                )

                );

                if (isset($_POST['answers'])) {
                    $Answers = $_POST['answers']; 
                    $counter = 0;
                    echo "<h1 class=\"text-center\" style=\"border:1px solid black;padding:1rem; margin-bottom:1rem;\">Quiz feedback </h1>";
                    foreach($Questions as $QuestionNo => $Value) {
                        


                        echo $Value['Question'].'';
                        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']) {
                           
                            echo 'You answered: <span style="color: red;text-decoration: font-size: 1rem;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>'; 
                            echo 'Correct answer: <span style="color: pink;">'.$Value['Answers'][$Value['CorrectAnswer']].'</span>';
                        } 
                        else {
                            
                            echo 'You answered: <span style="color:  PURPLE ; font-size: 1rem;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span><br>';
                            echo 'You are correct: <span style="color: ;">'.$Value['Answers'][$Answers[$QuestionNo]].'</span>';
                            $counter++;
                        }
                        echo '<hr>';
                    }
                    if ($counter < 10) {
                        echo "<h1>YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<br>";
                        echo "<h2>PLEASE TAKE THE QUIZ AGAIN FOR BETTER RESULTS</h2>";
                    } else if ($counter <= 15) {
                        echo "<h1>YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<br>";
                        echo "<h2> YOU SCORED AN AVERAGE AMOUNT</h2>";
                    } else {
                        echo "<h1>YOUR FINAL RESULT : $counter/20</h1>";
                        echo "<h2>CONGRATULATION YOU DID GREAT </h2>";
                    }
                }
                else {
                ?>
                    <form  class=" h-200 wow pulse" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" id="quiz">                 
                            <?php foreach ($Questions as $QuestionNo => $Value){ ?>                         
                                <h5 id="questionsInBlue"><?php echo $Value['Question']; ?></h5>
                                <?php                               
                                    foreach ($Value['Answers'] as $Letter => $Answer){
                                    $Label = 'question-'.$QuestionNo.'-answers-'.$Letter;                               
                                ?>

                                
                                <div id="line">
                                    <input type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>"required/>
                                    <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>                              
                                </div>                             
                                <?php } ?>
                                <hr>                      
                            <?php } ?>                    
                            <input class="btn" type="submit" value="SUBMIT" />               
                    </form>
                <?php 
                }
                ?>
            </div>
            <div class="col-sm-3 offsetColor"></div>
      </div>
	</div>
          
     
	</footer>
    

    <script>
	          
              
                   new WOW().init();
	</script> 
    </body>
</html>