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
    if (ucfirst ($strochka) != 0)
    {
    return ($strochka);
    }
    else 
    {  
     return strrev($strochka);
    }
}
  echo convertText('lello');

 
 ТОЖЕ САМОЕ НО ПУТЕМ ТЕРНАРНОГО ОПЕРАТОРА 
  function convertText($strochka)
{  
    return (ucfirst ($strochka) != 0)? $strochka: strrev($strochka);
}
echo convertText('lello');
