
<body>


<script type="text/javascript">
 $(document).ready( function(){							 
		var buttons = { previous:$('#jslidernews1 .button-previous') ,
						next:$('#jslidernews1 .button-next') };
		 $obj = $('#jslidernews1').lofJSidernews( { interval : 4000,
											 	easing			: 'easeInOutQuad',
												duration		: 1200,
												auto		 	: false,
												maxItemDisplay  : 3,
												startItem:1,
												navPosition     : 'horizontal', // horizontal
												navigatorHeight : null,
												navigatorWidth  : null,
												mainWidth:730,
												buttons:buttons} );		
	});
</script>
</body>
<div id="container">

<div id="jslidernews1" class="lof-slidecontent" style="width:730px; height:200px;">
	<div class="preload"><div></div></div>
    		 <div  class="button-previous">Previous</div>
              <div  class="button-next">Next</div>
  
              <div class="main-slider-content" style="width:730px; height:200px;">
                <ul class="sliders-wrap-inner">
                <?php foreach ($model as $row) :?>
                    <li>
                            <img src="<?php echo Yii::app()->request->baseUrl; ?>/images/thumbnail/<?php echo $row['thumbnail'] ?>" width="730px" height="200px" title="Newsflash 2" >     
                          <div class="slider-description">
                            <div class="slider-meta"><a target="_parent" title="Newsflash 1" href="#Category-1">/ Newsflash 1 /</a> <i> — Monday, February 15, 2010 12:42</i></div>
                            <h4>Content of Newsflash 1</h4>
                            <p>The one thing about a Web site, it always changes! Joomla! makes it easy to add Articles, content,...
                            <a class="readmore" href="#">Read more </a>
                            </p>
                         </div>
                    </li> 
                    <?php endforeach ;?> 
                  </ul>  	
            </div>
            
           	<div class="navigator-content">
                  <div class="button-control"><span></span></div>	
                  <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                          <?php $stt=0 ; foreach($model as $row): $stt++?> <li><span><?php echo $stt ;?></span></li><?php endforeach ;?>          		
                        </ul>
                  </div>
                
             </div> 
         
 </div> 
</div>
