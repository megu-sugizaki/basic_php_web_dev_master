<?php

function h($str){
  //javascriptで悪さされるので、htmlに値を埋め込むときはこのような処理をする。ENT_QUOTESは"""も変換してねという意味
  return htmlspecialchars($str, ENT_QUOTES, 'UTF-8');
}