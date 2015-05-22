<?php

function count_words($str) {
	return count(preg_split('/\s+/', strip_tags($str), null, PREG_SPLIT_NO_EMPTY));
}

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

function total_articles() {
	return Post::where(Base::table('posts.status'), '=', 'published')->count();
}
