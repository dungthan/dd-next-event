<?php
$this->breadcrumbs = array(
    'Videoses' => array('index'),
    $model->name,
);
?>

<h1>View Videos #<?php echo $model->name; ?></h1>
<?php
// extension xem video 

  $this->widget('application.extensions.smp.StrobeMediaPlayback',array(
  //'srcRelative'=>'/[assets subfolder]/[filename].flv',//OR
  //'src'=>'http://[domain]/[path]/[filename].flv', //OR
  //Embed a video  from youtube  with youtube plugin,included by default:
  'src'=>$model->link,
  // 'src'=>'http://www.youtube.com/watch?v=yQGAedJcdlI',

  'src_title'=>'[Title for the media file,will show up above the player.]',
  //optional playlist:
  /* 'playlistLinks'=>array('Title1'=>'URL1',
  'Title2'=>'URL2',
  'Title3'=>'URL3',
  ), */

  'width'=>'300',
  'height'=>'250',
  'allowFullScreen'=>'true'    //default is true
  ));
 
?>
<h2><?php echo $model->name ?></h2>
<p>Upload by: 
    <a href="<?php echo $model->createUser->username ?>"><?php echo $model->createUser->username ?></a>
    | View: <?php echo $model->view ?> time(s)</p>
<embed src="<?php echo $model->link ?>" width="300" height="300" autostart="false" loop="FALSE" />