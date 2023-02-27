<?php
namespace Operation;

class Mix
{
  public function mix($onion_gram){
    echo "「肉を何グラム使用しますか？」\n";
      while(true){
        $meat_gram = (int)readline();
        if($meat_gram === null || $meat_gram === 0){
          echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
        }else {
          break;
        }
      }
    echo "「卵を何グラム入れますか？」\n";
      while(true){
        $egg_gram = (int)readline();
        if($egg_gram === null || $egg_gram === 0){
          echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
        } else if($egg_gram > $meat_gram / 3){
          echo "「卵の量が多すぎます。もう一度入れる量を入力してください。」\n";
        } else {
          break;
        }
      }
    echo "「パン粉を何グラム入れますか？」\n";
      while(true){
        $bread_gram = (int)readline();
        if($bread_gram === null || $bread_gram === 0){
          echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
        } else if($bread_gram > $meat_gram / 5){
          echo "「パン粉の量が多すぎます。もう一度入れる量を入力してください。」\n";
        } else {
          break;
        }
      }
    echo "「塩を何グラム入れますか？」\n";
      while(true){
        $salt_gram = (int)readline();
        if($salt_gram === null || $salt_gram === 0){
          echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
        } else if($salt_gram > $meat_gram / 15){
          echo "「塩の量が多すぎます。もう一度入れる量を入力してください。」\n";
        } else {
          break;
        }
      }
    $all = $meat_gram + $egg_gram + $bread_gram + $onion_gram;

    echo "「全体重量{$all}グラムに対して塩を{$salt_gram}グラム入れました」\n";
    
    $flag = $salt_gram / $all;
    $getpoint = 0;

    if (0.005 <= $flag && $flag <= 0.015){
      $getpoint += 2;
      return array($getpoint, $all);
    } else {
      $getpoint -= 2;
      return array($getpoint, $all);
    }
    
  }
}