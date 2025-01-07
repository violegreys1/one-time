<?php
function normalizeUrl($sentence)// как найти определенную часть из предложения 
{
  if (strpos($sentence,'https://') === 0) // находит https:// в переменой $sentence
  { 
      return ($sentence); // возвращает переменную 
  }
  else if (strpos($sentence,'http://') === 0) // в другом случае http:// в перенменной $sentence
  {
    return ('https://' . substr($sentence, 7)); // возвращает 'https://' и символ начиная с 8 позиции переменной 
  }
  else 
  {
     return ('https://' . $sentence);  // возвращает конкатенацию https:// и переменной 
  }
}
// эта функция для работы с If, else , else if


<?php
function convertText($strochka)
{   
    if (ucfirst ($strochka) == $strochka) 
    {
    return ($strochka);
    }
    else 
    {  
     return strrev($strochka);
    }
}
  echo convertText('Hello');

 
 ТОЖЕ САМОЕ НО ПУТЕМ ТЕРНАРНОГО ОПЕРАТОРА 
 function convertText($string)
{
    return $string[0] === strtoupper($string[0]) ? $string : strrev($string);
}
Обрвзец простого калькултора для 2 чисел 
  <?php
  function calculate($symvol, $one, $two)
{
    switch ($symvol) {
        case '+':
            return ($one + $two);
        case '-':
            return ($one - $two);
        case '/': 
            return ($one / $two);
        case '*':
            return ($one * $two);
        default:
            return null;
    }
}
echo calculate('/', 4, 5);
