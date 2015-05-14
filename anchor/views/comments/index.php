<?php 

function dateV($format,$timestamp=null){
   $to_convert = array(
      'F'=>array('dat'=>'n','str'=>array('styczeń','luty','marzec','kwiecień','maj','czerwiec','lipiec','sierpień','wrzesień','październik','listopad','grudzień')),
      'f'=>array('dat'=>'n','str'=>array('stycznia','lutego','marca','kwietnia','maja','czerwca','lipca','sierpnia','września','października','listopada','grudnia'))
   );
   if ($pieces = preg_split('#[:/.\-, ]#', $format)){   
      if ($timestamp === null) { $timestamp = time(); }
      foreach ($pieces as $datepart){
         if (array_key_exists($datepart,$to_convert)){
            $replace[] = $to_convert[$datepart]['str'][(date($to_convert[$datepart]['dat'],$timestamp)-1)];
         }else{
            $replace[] = date($datepart,$timestamp);
         }
      }
      $result = strtr($format,array_combine($pieces,$replace));
      return $result;
   }
}

echo $header; ?>

<hgroup class="wrap">
	<h1><?php echo __('comments.comments'); ?></h1>
</hgroup>

<section class="wrap">
	<?php echo $messages; ?>

	<nav class="sidebar statuses">
		<?php foreach($statuses as $data): extract($data); ?>
		<?php echo Html::link('admin/comments/' . $url, '<span class="icon"></span> ' . __($lang), array(
			'class' => $class . (isset($status) and $status == $url ? ' active' : '')
		)); ?>
		<?php endforeach; ?>
	</nav>

	<?php if($comments->count): ?>
	<ul class="main list">
		<?php foreach($comments->results as $comment): ?>
		<li>
			<a href="<?php echo Uri::to('admin/comments/edit/' . $comment->id); ?>">
				<strong><?php echo strip_tags($comment->text); ?></strong>
				<span><time><?php echo dateV('j f Y',strtotime($comment->date)); ?></time></span>
				<span class="highlight"><?php echo $comment->status; ?></span>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>

	<aside class="paging"><?php echo $comments->links(); ?></aside>

	<?php else: ?>
	<p class="empty comments">
		<span class="icon"></span>
		<?php echo __('comments.nocomments_desc'); ?>
	</p>
	<?php endif; ?>
</section>

<?php echo $footer; ?>
