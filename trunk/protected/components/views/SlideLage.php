

<script type="text/javascript">
 $(document).ready( function(){	
		// buttons for next and previous item						 
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

<!------------------------------------- THE CONTENT ------------------------------------------------->
<div id="jslidernews1" class="lof-slidecontent" style="width:730px; height:200px;">
	<div class="preload"><div></div></div>
    		 <div  class="button-previous">Previous</div>
              <div  class="button-next">Next</div>
    		 <!-- MAIN CONTENT --> 
              <div class="main-slider-content" style="width:730px; height:200px;">
                <ul class="sliders-wrap-inner">
                    <li>
                            <img src="images/thumbl_980x340.png" title="Newsflash 2" >           
                          <div class="slider-description">
                            <div class="slider-meta"><a target="_parent" title="Newsflash 1" href="#Category-1">/ Newsflash 1 /</a> <i> — Monday, February 15, 2010 12:42</i></div>
                            <h4>Content of Newsflash 1</h4>
                            <p>The one thing about a Web site, it always changes! Joomla! makes it easy to add Articles, content,...
                            <a class="readmore" href="#">Read more </a>
                            </p>
                         </div>
                    </li> 
                   <li>
                      <img src="images/thumbl_980x340_002.png" title="Newsflash 1" >           
                         <div class="slider-description">
                           <div class="slider-meta"><a target="_parent" title="Newsflash 2" href="#Category-2">/ Newsflash 2 /</a> 	<i> — Monday, February 15, 2010 12:42</i></div>
                            <h4>Content of Newsflash 2</h4>
                            <p>Joomla! makes it easy to launch a Web site of any kind. Whether you want a brochure site or you are...
                            <a class="readmore" href="#">Read more </a>
                            </p>
                         </div>
                    </li> 
                      <li>
                      <img src="images/thumbl_980x340_008.png" title="Newsflash 8" >            
                        <div class="slider-description">
        
                          <div class="slider-meta"><a target="_parent" title="Newsflash 8" href="#">/ Newsflash 8 /</a>	<i> — Monday, February 15, 2010 12:42</i></div>
                            <h4>Content of Newsflash 8</h4>
                            <p>Joomla! 1.5 - 'Experience the Freedom'!. It has never been easier to create your own dynamic Web...
                                <a class="readmore" href="#">Read more </a>
                            </p>
                         </div>
                    </li> 
                  </ul>  	
            </div>
 		   <!-- END MAIN CONTENT --> 
           <!-- NAVIGATOR -->
           	<div class="navigator-content">
                  <div class="button-control"><span></span></div>	
                  <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                           <li><span>1</span></li>
                           <li><span>2</span></li>
                           <li><span>3</span></li>
                           <li><span>4</span></li>    
                           <li><span>5</span></li>
                           <li><span>6</span></li>       
                           <li><span>7</span></li>       
                           <li><span>8</span></li>          		
                        </ul>
                  </div>
                
             </div> 
          <!----------------- END OF NAVIGATOR --------------------->
 </div> 

