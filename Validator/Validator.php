<?php
namespace Validator;

  ///////////////////////////////////////
  // ClassName    Validate
  // Purpose      ユーザーの入力値の型を制限する
  // Return       $word（ユーザーの入力値）
  // Memo         
  ///////////////////////////////////////
class Validate
{
  public static function validate(){
    while(true){
      (int)$word = readline();
      if($word === null || $word === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      } else {
        break;
      }
    }
    return $word;
  }

  public static function validate_meat(int $amount){
    while(true){
      (int)$word = readline();
      if($word === null || $word === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      } else if($word < $amount){
        echo "「肉の量が少なすぎます。{$amount}g以上の量を入力してください。」\n";
      } else {
        break;
      }
    }
    return $word;
  }

  public static function validate_notice(string $target, int $compare, int $amount){
    while(true){
      (int)$word = readline();
      if($word === null || $word === 0){
        echo "「正しい入力を行ってください。文字列や数字の０、入力なしでエンターは正しくありません」\n";
      } else if($word > $compare / $amount){
        echo "「{$target}の量が多すぎます。もう一度入れる量を入力してください。」\n";
      } else {
        break;
      }
    }
    return $word;
  }
}