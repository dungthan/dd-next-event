
<?php
yii::import("application.components.functions", true);
$function = new functions();
?>

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

<!------------------------------------- THE CONTENT ------------------------------------------------->
<div id="jslidernews1" class="lof-slidecontent" style="width:730px; height:200px;">
	<div class="preload"><div></div></div>
    		 <div  class="button-previous">Previous</div>
              <div  class="button-next">Next</div>
    		 <!-- MAIN CONTENT --> 
              <div class="main-slider-content" style="width:730px; height:200px;">
                <ul class="sliders-wrap-inner">
                <?php foreach ($model as $row) :?>
                <?php 
                		$time = getdate(strtotime($row['start_time']));
                		$date = "Ngày ".$time["mday"]." tháng ".$time["mon"]." nam ".$time["year"];
              		?>
                    <li>
                            <?php echo '<img alt="" src="'.Yii::app()->request->baseUrl.'/images/thumbnail/'.$row['thumbnail'].'" width = 730px height = 200px/>';?>
                                      
                            <div class="slider-description">
                            <div class="slider-meta">
                             
                            <a target="_parent" title='<?php echo $function->CutString($row['name'],50)?>'>/<?php echo CHtml::link($function->CutString($row['name'],80),array('event/view','id'=>$row['id']),array('class'=>'is_link'))?>/</a>
                             <br /><i> <?php echo $date ;?></i></div>
                            <p><?php // echo $function->substrws($row['content']) ;?>
                            <?php echo CHtml::link('Read more',array('event/view','id'=>$row['id']),array('class'=>'is_link'))?>
                            </p>
                         </div>
                    </li> 
      <?php endforeach ;?> 
                  </ul>  	
            </div>
 		   <!-- END MAIN CONTENT --> 
           <!-- NAVIGATOR -->
           	<div class="navigator-content">
                  <div class="button-control"><span></span></div>	
                  <div class="navigator-wrapper">
                        <ul class="navigator-wrap-inner">
                        <?php $stt=0 ; foreach($model as $row): $stt++?> 
                          <li><span><?php echo $stt ;?></span></li>
                          <?php endforeach ;?> 
                        </ul>
                  </div>
                
             </div> 
          <!----------------- END OF NAVIGATOR --------------------->