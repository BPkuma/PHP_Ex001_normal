<?php
  const BEEF = "牛肉";
  const PORK = "豚肉";
  const CHICKEN = "鶏肉";

  echo "「メニュー番号を入力してください」\n";
  $number = readline();

  switch($number) {
    case 1:
      echo "「ステーキを作ります」\n";
      cookSteak();
      break;
    default:
      echo "「入力されたメニュー番号は用意出来ません」\n";
      break;
  }

  function cookSteak():void {
    echo "「肉番号を入力してください」(0以外の整数)\n";
    while(true){
      $number = (int)readline();
      if($number === null || $number === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      } else {
        break;
      }
    }
    if ($number % 2 === 0) {
      $meat = BEEF;
    } else if ($number % 3 === 0) {
      $meat = CHICKEN;
    } else {
      $meat = PORK;
    }

    echo "「グラム数を入力してください」\n";
    while(true){
      $gram = (int)readline();
      if($gram === null || $gram === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }
    $thickness = cutMeat($meat, $gram);

    if ($meat === BEEF || $meat === PORK) {
      $bool = grilledIronPlate($meat, $thickness);
    } else {
      $bool = grilledOven($meat, $gram);
    }

    if($bool) {
      echo "「美味しいステーキが出来ました」\n";
    } else {
      echo "「このステーキは失敗作です」\n";
    }
  }

  function cutMeat($meat, $gram) {
    echo "「肉をカットする厚さを入力してください」\n";
    while(true){
      $thickness = (int)readline();
      if($thickness === null || $thickness === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }
    echo "「{$meat}{$gram}グラムを{$thickness}センチにカットしました」\n";
    return $thickness;
  }

  function grilledIronPlate($food, $thickness){
    echo "「厚さ{$thickness}センチの{$food}を鉄板で焼きます」\n";
    echo "「焼き時間を設定してください」\n";
    while(true){
      $minute = (int)readline();
      if($minute === null || $minute === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }

    $flag = $thickness - $minute;

    if($flag === 0){
      echo "「ミディアムに焼きあがりました」\n";
      $bool = true;
    } if ($flag === 1){
      echo "「レアに焼きあがりました」\n";
      $bool = true;
    } if ($flag === -1){
      echo "「ウェルダンに焼きあがりました」\n";
      $bool = true;
    } if ($flag > 1) {
      echo "「生焼けです」\n";
      $bool = false;
    } if ($flag < -1) {
      echo "「焦げました」\n";
      $bool = false;
    }
    return $bool;
  }

  function grilledOven($food, $gram){
    echo "「{$gram}グラムの{$food}をオーブンで焼きます」\n";
    echo "「焼き時間を設定してください」\n";
    while(true){
      $minute = (int)readline();
      if($minute === null || $minute === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      }else {
        break;
      }
    }

    $flag = $gram / $minute;

    if ($flag < 10) {
      echo "「焦げました」\n";
      $bool = false;
    } else if ($flag > 20) {
      echo "「生焼けです」\n";
      $bool = false;
    } else {
      echo "「美味しく焼けました」\n";
      $bool = true;
    }
    return $bool;
  }