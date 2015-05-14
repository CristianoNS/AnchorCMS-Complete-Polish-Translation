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
	<h1><?php echo __('posts.posts'); ?></h1>

	<?php if($posts->count): ?>
	<nav>
		<?php echo Html::link('admin/posts/add', __('posts.create_post'), array('class' => 'btn')); ?>
	</nav>
	<?php endif; ?>
</hgroup>

<section class="wrap">
	<?php echo $messages; ?>

	<nav class="sidebar">
		<?php echo Html::link('admin/posts', __('global.all'), array(
			'class' => isset($category) ? '' : 'active'
		)); ?>
	    <?php foreach($categories as $cat): ?>
		<?php echo Html::link('admin/posts/category/' . $cat->slug, $cat->title, array(
			'class' => (isset($category) and $category->id == $cat->id) ? 'active' : ''
		)); ?>
	    <?php endforeach; ?>
	</nav>

	<?php if($posts->count): ?>
	<ul class="main list">
		<?php foreach($posts->results as $article): ?>
		<li>
			<a href="<?php echo Uri::to('admin/posts/edit/' . $article->id); ?>">
				<strong><?php echo $article->title; ?></strong>
				<span>
					<time><?php echo dateV('j f Y',strtotime($article->created)); ?></time>

					<em class="status <?php echo $article->status; ?>" title="<?php echo __('global.' . $article->status); ?>">
						<?php echo __('global.' . $article->status); ?>
					</em>
				</span>

				<p><?php echo strip_tags($article->description); ?></p>
			</a>
		</li>
		<?php endforeach; ?>
	</ul>

	<aside class="paging"><?php echo $posts->links(); ?></aside>

	<?php else: ?>

	<p class="empty posts">
		<span class="icon"></span>
		<?php echo __('posts.noposts_desc'); ?><br>
		<?php echo Html::link('admin/posts/add', __('posts.create_post'), array('class' => 'btn')); ?>
	</p>

	<?php endif; ?>
</section>

<?php echo $footer; ?>
