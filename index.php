<?php

$obj = new main();

class main
{

	private $html; 

	public function __construct()
	{

		$date =  date('Y-m-d', time());
		echo "The value of \$date: ".$date."<br>";

		$tar = "2017/05/24";		
		echo "The value of \$tar: ".$tar."<br>";

		$year = array(2012, 396, 300, 2000, 1100, 1089);
		echo "The value of \$year: ";
		print_r($year);
		// echo '<hr>';
		$this->html .= mytags::horizontalLine();

		$this->html .= mytags::headThree("Replace String Example");
		$this->html .= manipulateString::stringReplacement('-','/',$date);
		$this->html .= mytags::horizontalLine();

		$this->html .= mytags::headThree("Compare String Example");
		$this->html .= manipulateString::stringComparison($date,$tar);
		$this->html .= mytags::horizontalLine();

		$this->html .= mytags::headThree("Word Count Example");
		$this->html .= manipulateString::stringWordcounting($date);
		$this->html .= mytags::horizontalLine();

		$this->html .= mytags::headThree("String Length Example");
		$this->html .= manipulateString::stringLength($date);
		$this->html .= mytags::horizontalLine();

		$this->html .= mytags::headThree("ASCII Value Example");
		$this->html .= manipulateString::ASCIIstring('2');
		$this->html .= mytags::horizontalLine();

		$this->html .= mytags::headThree("Last two characters of the string are: ");
		$this->html .= manipulateString::stringChar($date,8);
		$this->html .= mytags::horizontalLine();

		$this->html .= mytags::headThree("String into Array Example:");
		$this->html .= manipulateString::stringExplode("/",$date);
		$this->html .= mytags::horizontalLine();

		
	}
 	
 	 public function __destruct() 
 	{
 		print($this->html);
 	}
}


class manipulateString
{

	 static public function stringReplacement($src,$target,$str)
	 {
	 	return str_replace($src,$target,$str);
	 }

	 static public function stringComparison($string1,$string2)
	 {
	 	if($string1==$string2)
	 	{
	 		echo "Oops";
	 	}
	 		else if($string1>$string2)
	 		{
	 			return "Future";
	 		}
	 			else if($string1<$string2)
	 			{
	 				return "Past";
	 			}
	 }

	 static public function stringWordcounting($string1)
	 {
	 	return str_word_count($string1);
	 }

	 static public function stringLength($string1)
	 {
	 	return strlen($string1);
	 }

	 static public function ASCIIstring($string1)
	 {
	 	return ord($string1);
	 }

	 static public function stringChar($string1,$value)
	 {
	 	return substr($string1,$value);
	 }

	 static public function stringExplode($value,$string1)
	 {
	 	print_r (explode($value,$string1));
	 }

}


 


}

class mytags
{
  static public function horizontalLine() 
  {
      return '<hr>';
    }
    static public function headingOne($text) 
    {
      return '<h1>' . $text . '</h1>';
  }
    static public function headThree($text)
    {
      return '<h3>' .$text . '</h3>';
    }
    
}
?>
